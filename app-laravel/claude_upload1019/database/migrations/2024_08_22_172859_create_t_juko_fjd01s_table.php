<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_juko_fjd01s', function (Blueprint $table) {
            $table->string('受講番号')->nullable();
            $table->string('受講者氏名 ')->nullable();
            $table->string('研修コード ')->nullable();
            $table->string('募集条件コード')->nullable();
            $table->string('開講年月日')->nullable();
            $table->string('修了除籍区分 ')->nullable();
            $table->string('修了除籍年月日')->nullable();
            $table->string('修了除籍判定日 ')->nullable();
            $table->string('申込入力受講者社員番号')->nullable();
            $table->string('申込入力受講者部所コード ')->nullable();
            $table->string('ユーザーコースコード')->nullable();
            $table->string('申込入力受講者部所名 ')->nullable();
            $table->string('共通管理番号')->nullable();
            $table->string('企業コード ')->nullable();
            $table->string('所属企業コード')->nullable();
            $table->string('所属企業名 ')->nullable();
            $table->string('パンフレットＩＤ')->nullable();
            $table->string('パンフレット枝番 ')->nullable();
            $table->string('企業コースコード')->nullable();
            $table->string('本学コースコード ')->nullable();
            $table->string('コース合格判定結果')->nullable();
            $table->string('コース優秀判定結果 ')->nullable();
            $table->string('コース合格判定日')->nullable();
            $table->string('受講科目数 ')->nullable();
            $table->string('修了科目数')->nullable();
            $table->string('合格科目数 ')->nullable();
            $table->string('不合格科目数')->nullable();
            $table->string('提出済科目数 ')->nullable();
            $table->string('未提出科目数 ')->nullable();
            $table->string('ユニットコード')->nullable();
            $table->string('ユニット表示順位 ')->nullable();
            $table->string('ユニット合格判定結果')->nullable();
            $table->string('ユニット優秀判定結果 ')->nullable();
            $table->string('科目コード')->nullable();
            $table->string('科目表示順位 ')->nullable();
            $table->string('科目合格判定結果')->nullable();
            $table->string('科目優秀判定結果 ')->nullable();
            $table->string('科目点数')->nullable();
            $table->string('ＳＧ換算点数 ')->nullable();
            $table->string('科目受付日')->nullable();
            $table->string('科目合格判定日 ')->nullable();
            $table->string('ユニット名')->nullable();
            $table->string('科目名 ')->nullable();
            $table->string('受講区分')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_juko_fjd01s');
    }
};
