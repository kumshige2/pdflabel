<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColTSyainSunLic01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_syain_sun_lic01', function (Blueprint $table) {
            $table->integer('license_id', true);
            $table->string('license')->nullable();
            $table->string('license_cnv')->nullable();
            $table->string('client_id')->nullable();
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
        Schema::drop('t_syain_sun_lic01');        //
    }
}
