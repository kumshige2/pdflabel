<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LabelPdfController extends Controller
{
    // 用紙サイズ（A4固定、単位mm）
    private const PAGE_WIDTH = 210;
    private const PAGE_HEIGHT = 297;

    // ラベル内のテキスト余白(mm)
    private const LABEL_PADDING = 2;

    // 配置計算の許容誤差(mm)。製品仕様の余白値は0.1mm単位の丸めであることが多く、
    // そのままでは端数不足で列・行が1つ少なく計算されることがあるため設ける
    private const FIT_EPSILON = 0.5;

    // 実在するA4ラベル用紙のレイアウトプリセット
    // marginTop/marginBottom/marginLeft/marginRight: 余白, labelW/labelH: ラベル幅・高さ,
    // gapX: ラベル間の横余白, gapY: ラベル間の縦余白（いずれも製品仕様の実測値）
    public const PRESETS = [
        'a4-65' => ['label' => 'A4 65面', 'marginTop' => 10.7, 'marginBottom' => 10.7, 'marginLeft' => 9.8, 'marginRight' => 9.8, 'labelW' => 38.1, 'labelH' => 21.2, 'gapX' => 0, 'gapY' => 0],
        'a4-24' => ['label' => 'A4 24面', 'marginTop' => 12.9, 'marginBottom' => 12.9, 'marginLeft' => 6.0, 'marginRight' => 6.0, 'labelW' => 66.0, 'labelH' => 33.9, 'gapX' => 0, 'gapY' => 0],
        'a4-44' => ['label' => 'A4 44面', 'marginTop' => 9.0, 'marginBottom' => 9.0, 'marginLeft' => 7.5, 'marginRight' => 7.5, 'labelW' => 48.3, 'labelH' => 25.4, 'gapX' => 0, 'gapY' => 0],
    ];

    /**
     * ラベルPDF作成フォームを表示する
     */
    public function index()
    {
        return view('label_pdf.index', [
            'presets' => self::PRESETS,
        ]);
    }

    /**
     * 入力内容からラベルPDFを生成してダウンロードさせる
     */
    public function generate(Request $request)
    {
        $s = $request->validate([
            'margin_top' => 'required|numeric|min:0',
            'margin_bottom' => 'required|numeric|min:0',
            'margin_left' => 'required|numeric|min:0',
            'margin_right' => 'required|numeric|min:0',
            'label_width' => 'required|numeric|min:1',
            'label_height' => 'required|numeric|min:1',
            'label_gap_x' => 'required|numeric|min:0',
            'label_gap_y' => 'required|numeric|min:0',
            'font_size' => 'required|numeric|min:1',
            'label_count' => 'required|integer|min:1',
            'label_text' => 'required|string',
        ]);

        $grid = $this->calcGrid($s);

        if ($grid['cols'] < 1 || $grid['rows'] < 1) {
            return back()->withInput()->withErrors([
                'label_width' => '設定した余白・ラベルサイズでは、用紙に1枚もラベルが配置できません。値を見直してください。',
            ]);
        }

        $perPage = $grid['cols'] * $grid['rows'];
        $totalPages = (int) ceil($s['label_count'] / $perPage);

        $pdf = Pdf::loadView('label_pdf.pdf', [
            's' => $s,
            'grid' => $grid,
            'perPage' => $perPage,
            'totalPages' => $totalPages,
            'pageWidth' => self::PAGE_WIDTH,
            'pageHeight' => self::PAGE_HEIGHT,
            'padding' => self::LABEL_PADDING,
        ]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->download('labels.pdf');
    }

    /**
     * 用紙サイズ・余白・ラベルサイズ・ラベル間余白(横・縦)から、1ページに配置できる列数・行数を計算する
     *
     * @param  array<string, mixed>  $s
     * @return array{cols: int, rows: int}
     */
    private function calcGrid(array $s): array
    {
        $usableWidth = self::PAGE_WIDTH - $s['margin_left'] - $s['margin_right'];
        $usableHeight = self::PAGE_HEIGHT - $s['margin_top'] - $s['margin_bottom'];

        // ラベル1個分の専有幅・高さ（ラベル自身 + ラベル間余白1個分）で列数・行数を算出する
        $cols = (int) floor(($usableWidth + $s['label_gap_x'] + self::FIT_EPSILON) / ($s['label_width'] + $s['label_gap_x']));
        $rows = (int) floor(($usableHeight + $s['label_gap_y'] + self::FIT_EPSILON) / ($s['label_height'] + $s['label_gap_y']));

        return [
            'cols' => max(0, $cols),
            'rows' => max(0, $rows),
        ];
    }
}
