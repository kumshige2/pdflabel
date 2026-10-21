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
        Schema::connection('pgsql_108_test')->create('t_name_divide01s', function (Blueprint $table) {
            $table->string('nm_bef', 255)->nullable();
            $table->string('nm_aft', 255)->nullable();
            $table->integer('id')->autoIncrement();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_name_divide01s');
    }
};
