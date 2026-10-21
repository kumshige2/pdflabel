<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKanrensanq01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kanren_sanq01s', function (Blueprint $table) {
            $table->string('krn_kgocd');
            $table->string('krn_kgonm');
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_kanren_sanq01s');
    }
}
