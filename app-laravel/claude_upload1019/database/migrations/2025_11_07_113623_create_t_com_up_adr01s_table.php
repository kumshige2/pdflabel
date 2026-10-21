<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTComupADR01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql_108_test')->create('t_com_up_adr01s', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('inn')->nullable();
            $table->string('out')->nullable();
            $table->string('fr_ymd')->nullable();
            $table->string('to_ymd')->nullable();
            $table->string('memo')->nullable();
            $table->string('links')->nullable();
            $table->string('yyyy')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at')->nullable();
            //$table->foreign('syainno')->references('syainno')->on('t_syain_sanq01s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_com_up_adr01s');
    }
};
