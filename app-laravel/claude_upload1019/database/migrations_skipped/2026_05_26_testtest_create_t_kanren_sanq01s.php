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
        Schema::connection('pgsql_108_test')->create('t_kanren_sanq01s', function (Blueprint $table) {
            $table->string('krn_kgocd')->primary('t_kanren_sanq01s_pkey');
            $table->string('krn_kgonm')->nullable(true);
            $table->string('yubin')->nullable(true);
            $table->string('addr1')->nullable(true);
            $table->string('tel')->nullable(true);
            $table->string('fax')->nullable(true);
            $table->string('bu')->nullable(true);
            $table->string('tanto')->nullable(true);
            $table->string('e_mail')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_kanren_sanq01s');
    }
};
