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
            't_com_up_crs01s',
            function (Blueprint $table) {
                $table->string('yobi_kmk01');
                $table->string('tskoza_cd');
                $table->string('tskoza_nm');
                $table->ID();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_com_up_crs01s');
    }
};
