<?php

use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // お問い合わせフォーム（入力・確認・送信・完了）
    Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/contact/complete', [ContactController::class, 'complete'])->name('contact.complete');

    // お問い合わせ管理（一覧・詳細・ステータス変更）
    Route::prefix('admin/contacts')->name('admin.contacts.')->group(function () {
        Route::get('/', [AdminContactController::class, 'index'])->name('index');
        Route::get('/{contact}', [AdminContactController::class, 'show'])->name('show');
        Route::patch('/{contact}/status', [AdminContactController::class, 'updateStatus'])->name('updateStatus');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
