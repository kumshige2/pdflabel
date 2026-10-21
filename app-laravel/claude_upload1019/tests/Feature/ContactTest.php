<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use DatabaseTransactions;

    protected $connectionsToTransact = ['pgsql_test'];

    private function user(): User
    {
        // User::factory()はemail_verified_atを設定するが、usersテーブルに
        // 当該カラムが存在しないため使わず、直接作成する
        return User::create([
            'name' => 'テストユーザー',
            'email' => uniqid() . '@example.com',
            'password' => bcrypt('password'),
            'role_id' => 9,
        ]);
    }

    public function test_入力フォームが表示される()
    {
        $this->actingAs($this->user())
            ->get(route('contact.create'))
            ->assertStatus(200);
    }

    public function test_確認画面に入力値が表示される()
    {
        $this->actingAs($this->user())
            ->post(route('contact.confirm'), [
                'name' => '確認太郎',
                'email' => 'kakunin@example.com',
                'subject' => 'テスト件名',
                'body' => 'テスト本文',
            ])
            ->assertStatus(200)
            ->assertSee('確認太郎')
            ->assertSee('kakunin@example.com')
            ->assertSee('テスト件名');
    }

    public function test_必須項目が無いとバリデーションエラーになる()
    {
        $this->actingAs($this->user())
            ->post(route('contact.confirm'), [])
            ->assertSessionHasErrors(['name', 'email', 'subject', 'body']);
    }

    public function test_送信すると保存され完了画面にリダイレクトされる()
    {
        $this->actingAs($this->user())
            ->post(route('contact.store'), [
                'name' => '確認太郎',
                'email' => 'kakunin@example.com',
                'subject' => 'テスト件名',
                'body' => 'テスト本文',
                'action' => 'submit',
            ])
            ->assertRedirect(route('contact.complete'));

        $this->assertDatabaseHas('contacts', [
            'name' => '確認太郎',
            'email' => 'kakunin@example.com',
            'status' => '新規',
        ]);
    }

    public function test_戻るを押すと入力画面に戻る()
    {
        $this->actingAs($this->user())
            ->post(route('contact.store'), [
                'name' => '確認太郎',
                'email' => 'kakunin@example.com',
                'subject' => 'テスト件名',
                'body' => 'テスト本文',
                'action' => 'back',
            ])
            ->assertRedirect(route('contact.create'));

        $this->assertDatabaseMissing('contacts', ['name' => '確認太郎']);
    }

    public function test_管理一覧画面が表示される()
    {
        Contact::factory()->create(['name' => '一覧太郎']);

        $this->actingAs($this->user())
            ->get(route('admin.contacts.index'))
            ->assertStatus(200)
            ->assertSee('一覧太郎');
    }

    public function test_管理詳細画面が表示される()
    {
        $contact = Contact::factory()->create();

        $this->actingAs($this->user())
            ->get(route('admin.contacts.show', $contact))
            ->assertStatus(200)
            ->assertSee($contact->subject);
    }

    public function test_ステータスを更新できる()
    {
        $contact = Contact::factory()->create(['status' => '新規']);

        $this->actingAs($this->user())
            ->patch(route('admin.contacts.updateStatus', $contact), ['status' => '対応中'])
            ->assertRedirect(route('admin.contacts.show', $contact));

        $this->assertDatabaseHas('contacts', ['id' => $contact->id, 'status' => '対応中']);
    }

    public function test_不正なステータスはバリデーションエラーになる()
    {
        $contact = Contact::factory()->create(['status' => '新規']);

        $this->actingAs($this->user())
            ->patch(route('admin.contacts.updateStatus', $contact), ['status' => '不正な値'])
            ->assertSessionHasErrors(['status']);
    }

    // 未ログイン時のリダイレクト確認は、Breezeのログインルートが
    // このdevcontainerにアップロードされていないため省略
}
