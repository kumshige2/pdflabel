<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateContactStatus;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * 問い合わせ一覧を表示する
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(20);
        return view('admin.contacts.index', ['contacts' => $contacts]);
    }

    /**
     * 問い合わせ詳細を表示する
     */
    public function show(Contact $contact)
    {
        return view('admin.contacts.show', ['contact' => $contact]);
    }

    /**
     * ステータスを更新する
     */
    public function updateStatus(UpdateContactStatus $request, Contact $contact)
    {
        try {
            $contact->status = $request->status;
            $contact->save();
            Log::debug('--------------------Contact updateStatus!---' . $contact->id);
            return redirect()->route('admin.contacts.show', $contact)->with('flashmessage', 'ステータスを更新しました');
        } catch (\Exception $ex) {
            return redirect()->route('admin.contacts.show', $contact)->withErrors($ex->getMessage());
        }
    }
}
