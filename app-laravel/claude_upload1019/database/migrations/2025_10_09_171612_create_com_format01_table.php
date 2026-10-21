<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('pgsql_108_test')->create(
            't_com_format01s',
            function (Blueprint $table) {
                //Schema::create('t_company_format01s', function (Blueprint $table) {
                $table->string('fld01')->nullable();
                $table->string('fld02')->nullable();
                $table->string('fld03')->nullable();
                $table->string('fld04')->nullable();
                $table->string('fld05')->nullable();
                $table->string('fld06')->nullable();
                $table->string('fld07')->nullable();
                $table->string('fld08')->nullable();
                $table->string('fld09')->nullable();
                $table->integer('seq')->primary('t_com_format01s_pkey');
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('com_format01');
    }
};
