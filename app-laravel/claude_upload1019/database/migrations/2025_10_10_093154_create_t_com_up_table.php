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
            't_com_up01s',
            function (Blueprint $table) {
                $table->string('sya_bg')->nullable();
                $table->string('tskoza_cd')->nullable();
                $table->string('seq_no')->nullable();
                $table->string('juko_sdate')->nullable();
                $table->string('syuryo_date')->nullable();
                $table->string('juko_kb')->nullable();
                $table->string('yusyu_kb')->nullable();
                $table->string('yobi_kmk01')->nullable();
                $table->string('sya_nm')->nullable();
                $table->increments('id');
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_com_up01s');
    }
};
