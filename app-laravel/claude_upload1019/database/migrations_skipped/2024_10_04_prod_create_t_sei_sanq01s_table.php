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
        Schema::connection('pgsql_215')->create('t_sei_sanq01s', function (Blueprint $table) {
            $table->string('key')->primary('t_sei_sanq01s_pkey');
            $table->string('sei');
            $table->timestamps(10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_sei_sanq01s');
    }
};
