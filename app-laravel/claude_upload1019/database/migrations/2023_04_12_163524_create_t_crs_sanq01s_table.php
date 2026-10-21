<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCrsSanq01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_crs_sanq01s', function (Blueprint $table) {
            $table->string('crscd')->primary('t_crs_sanq01s_pkey');
            $table->string('haiflg')->nullable();
            $table->string('crsno')->nullable();
            $table->string('crsnj')->nullable();
            $table->string('dan_crscd')->nullable();
            $table->integer('juryo')->nullable();
            $table->string('jukmm')->nullable();
            $table->string('zaimm')->nullable();
            $table->string('kmk_su')->nullable();
            $table->string('taisho')->nullable();
            $table->string('dantai_cd')->nullable();
            $table->string('tok_dantai_cd')->nullable();
            $table->string('kyo_km')->nullable();
            $table->string('kaitei_yotei')->nullable();
            $table->string('address')->nullable();
            $table->string('saj_flg')->nullable();
            $table->integer('sai_juryo')->nullable();
            $table->string('sai_zaimm')->nullable();
            $table->string('sai_memo')->nullable();
            $table->string('hsn_crsno')->nullable();
            $table->string('caution_flg')->nullable();
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
        Schema::dropIfExists('t_crs_sanq01s');
    }
}
