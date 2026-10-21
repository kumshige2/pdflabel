<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        DB::table('customers')->delete();
        //$clients = App\Client::pluck('id')->toArray();

        return [
            'client_id' => $this->faker->randomNumber(),
            'country' => $this->faker->country(),                         // 国名
            'postcode' => $this->faker->postcode(),                       // 郵便番号
            'prefecture' => $this->faker->prefecture(),                   // 都道府県
            'city' => $this->faker->city(),                               // 市
            'ward' => $this->faker->ward(),                               // 区
            'streetAddress' => $this->faker->streetAddress(),             // 町以下
            'secondaryAddress' => $this->faker->secondaryAddress(),       // マンション名
            'company' => $this->faker->company(),                         // 会社名
            'userName' => $this->faker->userName(),                       // ユーザ名
            'domainName' => $this->faker->domainName(),                   // ドメイン名
            'email' => $this->faker->email(),                             // メールアドレス
            'lastName' => $this->faker->lastName(),                       // 姓
            'firstName' => $this->faker->firstName(),                     // 名
            'lastKanaName' => $this->faker->lastKanaName(),               // 姓カナ
            'firstKanaName' => $this->faker->firstKanaName(),             // 名カナ
            'phoneNumber' => $this->faker->phoneNumber(),                 // 電話番号
            'realText' => $this->faker->realText(),                       // 日本語文章
        ];
    }
}
