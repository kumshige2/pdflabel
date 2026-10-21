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
        Schema::create('t_dan_sanq01s', function (Blueprint $table) {
            $table->string('dantai_cd')->primary('t_dan_sanq01s_pkey');
            $table->string('dantai_nm')->string();
            $table->string('flg')->boolean();
            $table->string('d_name')->varchar();
            $table->string('tanto_bsy')->varchar()->nullable();
            $table->string('tanto')->varchar()->nullable();
            $table->string('tel')->varchar();
            $table->string('fax')->varchar()->nullable();
            $table->string('email_cc')->varchar()->nullable();
            $table->string('email_to')->varchar()->nullable();
            $table->string('email_bcc')->varchar()->nullable();
            $table->text('mail_1')->nullable();
            $table->text('mail_2')->nullable();
            $table->text('mail_3')->nullable();
            $table->string('pw')->varchar();
            $table->string('title')->varchar();
            $table->string('adr')->varchar()->nullable();
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_dan_sanq01s');
    }
};
