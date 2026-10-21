<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// このdevcontainer用の補完マイグレーション。
// 元々は database/migrations_skipped/2025_08_21_testtest_create_t_juko_sanq01s_table.php
// のみに定義されており、pgsql_215_test接続（215サーバー向け）専用になっていたが、
// DatabaseSeeder::run_test() がデフォルト接続（pgsql_test）上にこのテーブルの存在を前提と
// しているため、接続指定を外した上でこちらに複製した。
class CreateTJukoSanq01sTableLocal extends Migration
{
    public function up()
    {
        Schema::create('t_juko_sanq01s', function (Blueprint $table) {
            $table->string('id')->primary('t_juko_sanq_01s_pkey');
            $table->string('shori_kbn', 5)->nullable();
            $table->string('send_ymd')->nullable();
            $table->string('name_k')->nullable();
            $table->string('name_j')->nullable();
            $table->string('syainno')->nullable();
            $table->string('syzkcd')->nullable();
            $table->string('yubin')->nullable();
            $table->string('addr1')->nullable();
            $table->string('addr2')->nullable();
            $table->string('addr3')->nullable();
            $table->string('tel')->nullable();
            $table->string('tel2')->nullable();
            $table->string('juk_crs_no')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('ndo')->nullable();
            $table->string('select_kmk')->nullable();
            $table->string('seal_no')->nullable();
            $table->string('sek_f')->nullable();
            $table->string('memos')->nullable();
            $table->string('comments')->nullable();
            $table->boolean('sai')->nullable();
            $table->string('sai_jukno')->nullable();
            $table->boolean('sai_juko_renraku')->nullable();
            $table->string('e_mail')->nullable();
            $table->string('kaiymd')->nullable();
            $table->integer('cancel_kbn')->nullable();
            $table->string('cancel_ymd')->nullable();
            $table->string('judge_sanq_key')->nullable();
            $table->string('sek_f_updymd')->nullable();
            $table->string('f1')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3')->nullable();
            $table->string('f4')->nullable();
            $table->string('f5')->nullable();
            $table->string('f6')->nullable();
            $table->string('f7')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_juko_sanq01s');
    }
};
