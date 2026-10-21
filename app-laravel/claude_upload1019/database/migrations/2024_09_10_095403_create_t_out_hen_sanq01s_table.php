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
        Schema::create('t_out_hen_sanq01s', function (Blueprint $table) {
            $table->string('judge_sanq_key');
            $table->string('types');
            $table->string('tor')->nullable(true);
            $table->string('tor_tnto')->nullable(true);
            $table->string('tor_tel')->nullable(true);
            $table->string('tor_fax')->nullable(true);
            $table->string('tor_e_mail')->nullable(true);
            $table->string('sek_f')->nullable(true);
            $table->string('tor_sek_tnto')->nullable(true);
            $table->string('sho_sof')->nullable(true);
            $table->string('kaiko');
            $table->timestamps();
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_out_hen_sanq01s');
    }
};
