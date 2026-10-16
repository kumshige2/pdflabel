<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<style>
    /* 日本語フォント（IPAexゴシック）をPDFに埋め込む。IPAフォントライセンスで埋め込み・再配布が許諾されている */
    @font-face {
        font-family: "IPAexGothic";
        src: url("{{ public_path('fonts/IPAexGothic.ttf') }}") format("truetype");
        font-weight: normal;
        font-style: normal;
    }

    @page {
        margin: 0;
    }

    body {
        margin: 0;
        font-family: "IPAexGothic", sans-serif;
    }

    .page {
        position: relative;
        width: {{ $pageWidth }}mm;
        height: {{ $pageHeight }}mm;
        page-break-after: always;
    }

    .page:last-child {
        page-break-after: auto;
    }

    .label-box {
        position: absolute;
        box-sizing: border-box;
        border: 1px solid #000;
        overflow: hidden;
        padding: {{ $padding }}mm;
        font-size: {{ $s['font_size'] }}pt;
        /* dompdfは white-space:pre-wrap + word-break:break-all だと折り返されず
           ラベル枠からテキストがはみ出すため、通常の折り返し指定にする。
           改行はPHP側でnl2br()により<br>へ変換して反映する */
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
</style>
</head>
<body>
@for ($page = 0; $page < $totalPages; $page++)
<div class="page">
    @php
        $remaining = $s['label_count'] - $page * $perPage;
        $countOnThisPage = min($perPage, $remaining);
    @endphp
    @for ($i = 0; $i < $countOnThisPage; $i++)
        @php
            $col = $i % $grid['cols'];
            $row = intdiv($i, $grid['cols']);
            $x = $s['margin_left'] + $col * ($s['label_width'] + $s['label_gap_x']);
            $y = $s['margin_top'] + $row * ($s['label_height'] + $s['label_gap_y']);
        @endphp
        <div class="label-box" style="left: {{ $x }}mm; top: {{ $y }}mm; width: {{ $s['label_width'] }}mm; height: {{ $s['label_height'] }}mm;">{!! nl2br(e($s['label_text'])) !!}</div>
    @endfor
</div>
@endfor
</body>
</html>
