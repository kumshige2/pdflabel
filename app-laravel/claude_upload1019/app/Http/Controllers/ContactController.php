<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContact;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * 入力フォームを表示する
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * 入力内容を検証し、確認画面を表示する
     */
    public function confirm(StoreContact $request)
    {
        return view('contact.confirm', ['input' => $request->validated()]);
    }

    /**
     * 確認画面からの送信を受けて保存する（「戻る」の場合は入力画面に戻す）
     */
    public function store(StoreContact $request)
    {
        if ($request->action === 'back') {
            return redirect()->route('contact.create')->withInput($request->only(['name', 'email', 'subject', 'body']));
        }

        try {
            Contact::create($request->validated());
            Log::debug('--------------------Contact store!---');
            return redirect()->route('contact.complete');
        } catch (\Exception $ex) {
            return redirect()->route('contact.create')->withErrors($ex->getMessage());
        }
    }

    /**
     * 送信完了画面を表示する
     */
    public function complete()
    {
        return view('contact.complete');
    }
}
