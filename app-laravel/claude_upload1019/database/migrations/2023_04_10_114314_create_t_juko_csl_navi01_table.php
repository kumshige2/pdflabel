<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukoCslNavi01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juko_csl_navi01', function(Blueprint $table)
		{
			$table->string('レコード番号')->nullable();
			$table->string('研修先id')->nullable();
			$table->string('cslナビアクセスid')->nullable();
			$table->string('募集期間from')->nullable();
			$table->string('募集期間to')->nullable();
			$table->string('受講申込データ送信日時')->nullable();
			$table->string('申込管理番号')->nullable();
			$table->string('窓口団体コード')->nullable();
			$table->string('窓口教育団体名')->nullable();
			$table->string('成績報告団体コード')->nullable();
			$table->string('成績報告教育団体名')->nullable();
			$table->string('共通管理番号')->primary('t_juko_csl_navi01_pkey');
			$table->string('氏名')->nullable();
			$table->string('カナ氏名')->nullable();
			$table->string('社員番号')->nullable();
			$table->string('所属番号')->nullable();
			$table->string('所属名')->nullable();
			$table->string('パンフid')->nullable();
			$table->string('募集年度')->nullable();
			$table->string('開講年月日')->nullable();
			$table->string('ユーザコース番号')->nullable();
			$table->string('コースコード')->nullable();
			$table->string('受講期間')->nullable();
			$table->string('コース名')->nullable();
			$table->string('コース名（管理用）')->nullable();
			$table->string('選択名')->nullable();
			$table->string('受講料')->nullable();
			$table->string('再受講区分')->nullable();
			$table->string('受講番号（再受講時）')->nullable();
			$table->string('給付対象区分')->nullable();
			$table->string('教材送付先')->nullable();
			$table->string('送付先郵便番号')->nullable();
			$table->string('送付先都道府県')->nullable();
			$table->string('送付先住所１')->nullable();
			$table->string('送付先住所２')->nullable();
			$table->string('送付先住所３')->nullable();
			$table->string('送付先住所４')->nullable();
			$table->string('送付先電話番号')->nullable();
			$table->string('連絡先メールアドレス')->nullable();
			$table->string('勤務先電話番号')->nullable();
			$table->string('勤務先ＦＡＸ番号')->nullable();
			$table->string('勤務先内線番号')->nullable();
			$table->string('勤務先郵便番号')->nullable();
			$table->string('勤務先都道府県')->nullable();
			$table->string('勤務先住所１')->nullable();
			$table->string('勤務先住所２')->nullable();
			$table->string('勤務先住所３')->nullable();
			$table->string('勤務先住所４')->nullable();
			$table->string('担当者名')->nullable();
			$table->string('担当者名カナ')->nullable();
			$table->string('担当者メールアドレス')->nullable();
			$table->string('ｅラーニング用メールアドレス')->nullable();
			$table->string('支払方法')->nullable();
			$table->string('年齢')->nullable();
			$table->string('性別')->nullable();
			$table->string('生年月日')->nullable();
			$table->string('会社名１')->nullable();
			$table->string('会社名２')->nullable();
			$table->string('所属コード２')->nullable();
			$table->string('所属名２')->nullable();
			$table->string('等級１')->nullable();
			$table->string('等級２')->nullable();
			$table->string('入社年月日')->nullable();
			$table->string('勤続年数')->nullable();
			$table->string('宅配問合せ番号')->nullable();
			$table->string('宅配発送日')->nullable();
			$table->string('配送業者コード')->nullable();
			$table->string('配送業者名')->nullable();
			$table->string('成績管理対象外フラグ（社員マスタ）')->nullable();
			$table->string('社員マスタ自由項目１')->nullable();
			$table->string('社員マスタ自由項目２')->nullable();
			$table->string('社員マスタ自由項目３')->nullable();
			$table->string('社員マスタ自由項目４')->nullable();
			$table->string('社員マスタ自由項目５')->nullable();
			$table->string('成績管理対象外フラグ（コースマスタ）')->nullable();
			$table->string('コースマスタ自由項目１')->nullable();
			$table->string('コースマスタ自由項目２')->nullable();
			$table->string('コースマスタ自由項目３')->nullable();
			$table->string('コースマスタ自由項目４')->nullable();
			$table->string('コースマスタ自由項目５')->nullable();
			$table->string('自由項目１')->nullable();
			$table->string('自由項目２')->nullable();
			$table->string('自由項目３')->nullable();
			$table->string('自由項目４')->nullable();
			$table->string('自由項目５')->nullable();
			$table->string('自由項目６')->nullable();
			$table->string('自由項目７')->nullable();
			$table->string('自由項目８')->nullable();
			$table->string('自由項目９')->nullable();
			$table->string('自由項目１０')->nullable();
			$table->string('自由項目１１')->nullable();
			$table->string('自由項目１２')->nullable();
			$table->string('自由項目１３')->nullable();
			$table->string('自由項目１４')->nullable();
			$table->string('自由項目１５')->nullable();
			$table->string('自由項目１６')->nullable();
			$table->string('自由項目１７')->nullable();
			$table->string('自由項目１８')->nullable();
			$table->string('自由項目１９')->nullable();
			$table->string('自由項目２０')->nullable();
			$table->string('修正用flg')->nullable();
			$table->string('配信用済flg')->nullable();
			$table->string('キャンセルflg')->nullable();
			$table->string('変更取消理由')->nullable();
			$table->string('新規登録日時')->nullable();
			$table->string('新規登録ログインid')->nullable();
			$table->string('最終更新日時')->nullable();
			$table->string('最終更新ログインid')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juko_csl_navi01');
	}

}
