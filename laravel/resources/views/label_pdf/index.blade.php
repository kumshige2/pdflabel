@extends('adminlte::page')

@section('title', 'ラベルPDF作成')

@section('content_header')
<h1><i class="fas fa-tags"></i> ラベルPDF作成</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <form action="{{ route('label_pdf.generate') }}" method="POST">
            @csrf

            <fieldset class="border rounded p-3 mb-3">
                <legend class="w-auto px-2" style="font-size:1rem;">用紙設定</legend>
                <p class="mb-2">用紙サイズ: A4（210mm × 297mm）固定</p>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="margin_top">上余白(mm)</label>
                        <input type="number" class="form-control" id="margin_top" name="margin_top" value="{{ old('margin_top', 10) }}" min="0" step="0.1" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="margin_bottom">下余白(mm)</label>
                        <input type="number" class="form-control" id="margin_bottom" name="margin_bottom" value="{{ old('margin_bottom', 10) }}" min="0" step="0.1" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="margin_left">左余白(mm)</label>
                        <input type="number" class="form-control" id="margin_left" name="margin_left" value="{{ old('margin_left', 10) }}" min="0" step="0.1" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="margin_right">右余白(mm)</label>
                        <input type="number" class="form-control" id="margin_right" name="margin_right" value="{{ old('margin_right', 10) }}" min="0" step="0.1" required>
                    </div>
                </div>
            </fieldset>

            <fieldset class="border rounded p-3 mb-3">
                <legend class="w-auto px-2" style="font-size:1rem;">ラベル設定</legend>

                <div class="form-group">
                    <label for="preset_select">プリセット</label>
                    <select class="form-control w-auto" id="preset_select">
                        <option value="custom">1: カスタム（手動設定）</option>
                        @foreach ($presets as $key => $preset)
                        <option value="{{ $key }}">{{ $preset['label'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="label_width">ラベル幅(mm)</label>
                        <input type="number" class="form-control" id="label_width" name="label_width" value="{{ old('label_width', 70) }}" min="1" step="0.1" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="label_height">ラベル高さ(mm)</label>
                        <input type="number" class="form-control" id="label_height" name="label_height" value="{{ old('label_height', 37) }}" min="1" step="0.1" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="label_gap_x">ラベル間余白・横(mm)</label>
                        <input type="number" class="form-control" id="label_gap_x" name="label_gap_x" value="{{ old('label_gap_x', 2) }}" min="0" step="0.1" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="label_gap_y">ラベル間余白・縦(mm)</label>
                        <input type="number" class="form-control" id="label_gap_y" name="label_gap_y" value="{{ old('label_gap_y', 2) }}" min="0" step="0.1" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="font_size">フォントサイズ(pt)</label>
                        <input type="number" class="form-control" id="font_size" name="font_size" value="{{ old('font_size', 10) }}" min="1" step="0.5" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="label_count">印字枚数</label>
                        <input type="number" class="form-control" id="label_count" name="label_count" value="{{ old('label_count', 14) }}" min="1" step="1" required>
                    </div>
                </div>
            </fieldset>

            <fieldset class="border rounded p-3 mb-3">
                <legend class="w-auto px-2" style="font-size:1rem;">印字内容</legend>
                <textarea class="form-control" id="label_text" name="label_text" rows="3" placeholder="すべてのラベルに印字するテキストを入力してください" required>{{ old('label_text', 'サンプルラベル') }}</textarea>
            </fieldset>

            <p id="grid_status" class="text-muted small"></p>

            <button type="submit" class="btn btn-primary">PDFを生成</button>
        </form>
    </div>
</div>
@stop

@section('css')
<style>
    fieldset legend { color: #555; }
</style>
@stop

@section('js')
<script>
(function () {
    "use strict";

    // 用紙サイズ（A4固定、単位mm）
    var PAGE_WIDTH = 210;
    var PAGE_HEIGHT = 297;

    // 配置計算の許容誤差(mm)。サーバー側(LabelPdfController::calcGrid)と同じ値をあわせておく
    var FIT_EPSILON = 0.5;

    // 用紙プリセット（コントローラのPRESETSと同じ値）
    var PRESETS = @json($presets);

    var inputIds = [
        "margin_top", "margin_bottom", "margin_left", "margin_right",
        "label_width", "label_height", "label_gap_x", "label_gap_y", "label_count"
    ];

    function getSettings() {
        return {
            marginTop: Number(document.getElementById("margin_top").value) || 0,
            marginBottom: Number(document.getElementById("margin_bottom").value) || 0,
            marginLeft: Number(document.getElementById("margin_left").value) || 0,
            marginRight: Number(document.getElementById("margin_right").value) || 0,
            labelWidth: Number(document.getElementById("label_width").value) || 0,
            labelHeight: Number(document.getElementById("label_height").value) || 0,
            labelGapX: Number(document.getElementById("label_gap_x").value) || 0,
            labelGapY: Number(document.getElementById("label_gap_y").value) || 0,
            labelCount: Math.max(1, Math.floor(Number(document.getElementById("label_count").value) || 1))
        };
    }

    // 用紙サイズ・余白・ラベルサイズ・ラベル間余白(横・縦)から、1ページに配置できる列数・行数を計算する
    // （サーバー側 LabelPdfController::calcGrid と同じロジック。画面プレビュー用）
    function calcGrid(s) {
        var usableWidth = PAGE_WIDTH - s.marginLeft - s.marginRight;
        var usableHeight = PAGE_HEIGHT - s.marginTop - s.marginBottom;
        var cols = Math.floor((usableWidth + s.labelGapX + FIT_EPSILON) / (s.labelWidth + s.labelGapX));
        var rows = Math.floor((usableHeight + s.labelGapY + FIT_EPSILON) / (s.labelHeight + s.labelGapY));
        return { cols: Math.max(0, cols), rows: Math.max(0, rows) };
    }

    function updateStatus() {
        var s = getSettings();
        var grid = calcGrid(s);
        var el = document.getElementById("grid_status");
        if (grid.cols < 1 || grid.rows < 1) {
            el.textContent = "設定した余白・ラベルサイズでは、用紙に1枚もラベルが配置できません。値を見直してください。";
            el.classList.add("text-danger");
            return;
        }
        el.classList.remove("text-danger");
        var perPage = grid.cols * grid.rows;
        var totalPages = Math.ceil(s.labelCount / perPage);
        el.textContent = "1ページに " + grid.cols + "列 × " + grid.rows + "行 = " + perPage + "枚 配置できます（全" + totalPages + "ページ、" + s.labelCount + "枚分）。";
    }

    // プリセット選択時に、余白・ラベルサイズ・ラベル間余白を自動設定する（選択後も手動で変更可能）
    document.getElementById("preset_select").addEventListener("change", function (e) {
        var preset = PRESETS[e.target.value];
        if (!preset) {
            return; // カスタム（手動設定）の場合は何もしない
        }
        document.getElementById("margin_top").value = preset.marginTop;
        document.getElementById("margin_bottom").value = preset.marginBottom;
        document.getElementById("margin_left").value = preset.marginLeft;
        document.getElementById("margin_right").value = preset.marginRight;
        document.getElementById("label_width").value = preset.labelW;
        document.getElementById("label_height").value = preset.labelH;
        document.getElementById("label_gap_x").value = preset.gapX;
        document.getElementById("label_gap_y").value = preset.gapY;
        updateStatus();
    });

    inputIds.forEach(function (id) {
        document.getElementById(id).addEventListener("input", updateStatus);
    });

    updateStatus();
})();
</script>
@stop
