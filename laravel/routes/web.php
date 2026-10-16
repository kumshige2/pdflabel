<?php

// ラベルPDF作成機能のルート。既存の routes/web.php に追記する。
// 権限制御が必要な場合は、サンプル(pdf_text_cnv01.blade.php)と同様に
// 既存のミドルウェア／@canのロール（system/admin/user7/user等）でグループ化すること。

use App\Http\Controllers\LabelPdfController;
use Illuminate\Support\Facades\Route;

Route::get('/label-pdf', [LabelPdfController::class, 'index'])->name('label_pdf.index');
Route::post('/label-pdf/generate', [LabelPdfController::class, 'generate'])->name('label_pdf.generate');
