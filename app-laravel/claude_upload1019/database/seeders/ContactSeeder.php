<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ContactSeeder extends Seeder
{
    /**
     * 思春期の男女によくある悩みの件名・本文（テストデータ用のサンプル文面）
     */
    private array $topics = [
        ['subject' => '勉強に集中できない', 'body' => '最近、授業に集中できず、成績が落ちてきています。どうすれば集中力を保てるでしょうか。'],
        ['subject' => '友達関係がうまくいかない', 'body' => 'クラスの友達グループの中でうまく話が合わず、孤立しているように感じます。どう付き合えばいいか悩んでいます。'],
        ['subject' => '将来の進路が決まらない', 'body' => '卒業後の進路について、やりたいことが見つからず不安です。相談できる人がいなくて困っています。'],
        ['subject' => '部活での人間関係の悩み', 'body' => '部活の先輩との関係がうまくいかず、練習に行くのがつらいです。どうしたらいいでしょうか。'],
        ['subject' => '恋愛の悩み', 'body' => '好きな人がいるのですが、どう気持ちを伝えればいいかわからず悩んでいます。'],
        ['subject' => '親との関係がうまくいかない', 'body' => '最近、親と話すたびにケンカになってしまい、家にいるのが居心地悪いです。'],
        ['subject' => 'SNSでのトラブル', 'body' => 'SNSに書かれた内容がきっかけで、友人関係がこじれてしまいました。どう対処すればいいでしょうか。'],
        ['subject' => '容姿について悩んでいる', 'body' => '自分の見た目にコンプレックスがあり、人と会うのが怖くなっています。'],
        ['subject' => '成績が伸びず焦っている', 'body' => '定期テストの成績が思うように伸びず、このままで大丈夫か不安です。'],
        ['subject' => 'クラスでの嫌がらせについて相談したい', 'body' => 'クラスで一部の生徒から嫌なことを言われることが続いています。どう対応すればいいか教えてください。'],
        ['subject' => '体調不良が続いて不安', 'body' => '最近、体調が優れない日が続いており、成長期特有のものなのか心配です。'],
        ['subject' => '自分に自信が持てない', 'body' => '何をやっても自信が持てず、周りと比べて落ち込んでしまいます。'],
        ['subject' => '受験のストレスがつらい', 'body' => '受験が近づくにつれてストレスが大きくなり、夜も眠れないことがあります。'],
        ['subject' => '家族に悩みを話せない', 'body' => '家族には心配をかけたくなくて、悩みを一人で抱え込んでしまっています。'],
        ['subject' => '友人の悩みをどう支えるか', 'body' => '友人が悩んでいる様子なのですが、どう声をかければいいかわからず困っています。'],
        ['subject' => '人前での緊張を変えたい', 'body' => '人前で緊張してしまう性格を変えたいのですが、どうすればいいでしょうか。'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ja_JP');
        $statuses = ['新規', '対応中', '解決済み'];

        // 男女比率50%/50%になるよう、あらかじめ性別の配列を作ってシャッフルする
        $genders = array_merge(array_fill(0, 25, 'male'), array_fill(0, 25, 'female'));
        shuffle($genders);

        foreach ($genders as $gender) {
            $topic = $this->topics[array_rand($this->topics)];

            // 過去3か月以内のランダムな日時
            $createdAt = Carbon::now()
                ->subDays(random_int(0, 90))
                ->setTime(random_int(8, 22), random_int(0, 59), random_int(0, 59));

            Contact::create([
                'name' => $faker->name($gender),
                'email' => $faker->regexify('[a-z]{5,10}[0-9]{2,4}') . '@example.com',
                'subject' => $topic['subject'],
                'body' => $topic['body'],
                'status' => $statuses[array_rand($statuses)],
                'created_at' => $createdAt,
                'updated_at' => $createdAt,
            ]);
        }
    }
}
