<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTEAcdJuk01Wk01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_e_acd_juk01_wk01', function(Blueprint $table)
		{
			$table->string('user_id')->primary('t_e_acd_juk01_wk01_pkey');
			$table->string('パスワード')->nullable();
			$table->string('名前')->nullable();
			$table->string('カナ')->nullable();
			$table->string('メールアドレス')->nullable();
			$table->string('組織コード')->nullable();
			$table->string('所属長')->nullable();
			$table->string('入社年月日')->nullable();
			$table->string('年代コード')->nullable();
			$table->string('性別コード')->nullable();
			$table->string('職種コード')->nullable();
			$table->string('職位コード')->nullable();
			$table->string('業種コード')->nullable();
			$table->string('ロールコード')->nullable();
			$table->string('備考')->nullable();
			$table->string('社員番号')->nullable();
			$table->string('所属コード')->nullable();
			$table->string('ユーザーコースコード')->nullable();
			$table->string('所属名')->nullable();
			$table->string('共通管理番号')->nullable();
			$table->integer('受講料')->nullable();
			$table->string('成績送付先コード')->nullable();
			$table->string('受講番号')->nullable();
			$table->string('期間from')->nullable();
			$table->string('期間to')->nullable();
			$table->string('獲得ポイント数')->nullable();
			$table->string('修了基準ポイント数')->nullable();
			$table->string('受講状況')->nullable();
			$table->string('修了除籍年月日')->nullable();
			$table->string('前回期間from')->nullable();
			$table->string('前回期間to')->nullable();
			$table->string('前回獲得ポイント数')->nullable();
			$table->string('前回修了基準ポイント数')->nullable();
			$table->string('前回受講状況')->nullable();
			$table->string('前回修了除籍年月日')->nullable();
			$table->string('ログイン期限')->nullable();
			$table->string('有効無効')->nullable();
			$table->string('アクセス許可ipアドレス')->nullable();
			$table->string('保有ポイント')->nullable();
			$table->string('登録方法')->nullable();
			$table->string('研修_期間from')->nullable();
			$table->string('研修_期間to')->nullable();
			$table->string('企業_企業名')->nullable();
			$table->string('研修_研修名')->nullable();
			$table->string('研修_受講形態区分')->nullable();
			$table->string('募集_所属担当者')->nullable();
			$table->string('募集_成績報告先１')->nullable();
			$table->string('募集_成績報告先２')->nullable();
			$table->string('募集_成績報告先３')->nullable();
			$table->string('募集_成績報告先４')->nullable();
			$table->string('募集_成績報告先５')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_e_acd_juk01_wk01');
	}

}
