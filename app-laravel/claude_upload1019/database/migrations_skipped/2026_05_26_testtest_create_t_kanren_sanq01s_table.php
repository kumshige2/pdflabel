<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// クラス名を書かず、直接インスタンスを return する形式に変更
return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql_testtest')->create('t_kanren_sanq01s', function (Blueprint $table) {
            $table->string('krn_kgocd')->primary('t_kanren_sanq01s_pkey');
            $table->string('krn_kgonm');
            $table->string('yubin')->nullable(true);
            $table->string('addr1')->nullable(true);
            $table->string('tel')->nullable(true);
            $table->string('fax')->nullable(true);
            $table->string('bu')->nullable(true);
            $table->string('tanto')->nullable(true);
            $table->string('e_mail')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql_testtest')->dropIfExists('t_kanren_sanq01s');
    }
}; // セミコロンを忘れずに
