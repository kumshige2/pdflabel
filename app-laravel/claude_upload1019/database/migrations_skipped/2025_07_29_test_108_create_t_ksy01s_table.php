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
        Schema::connection('pgsql_108_test')->create('t_ksy01s', function (Blueprint $table) {
            $table->string('ksy_cd', 15)->primary('t_ksy01s_pkey');
            $table->string('kgo_a_cd', 5)->nullable();
            $table->string('kgo_b_cd', 3)->nullable();
            $table->string('kgo_c_cd', 3)->nullable();
            $table->string('seq_no', 15)->nullable();
            $table->string('card_no', 15)->nullable();
            $table->string('ksy_nm')->nullable();
            $table->string('entry_kbn', 2)->nullable();
            $table->string('juk_keitai_kbn', 2)->nullable();
            $table->string('p_id', 10)->nullable();
            $table->string('p_nd', 5)->nullable();
            $table->string('trk_p_id', 10)->nullable();
            $table->string('trk_p_nd', 10)->nullable();
            $table->string('bsy_cd', 5)->nullable();
            $table->string('ad_cd', 5)->nullable();
            $table->string('ksy_fr', 15)->nullable();
            $table->string('ksy_to', 15)->nullable();
            $table->boolean('ng_flg')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_ksy_sanq01s');
    }
};
