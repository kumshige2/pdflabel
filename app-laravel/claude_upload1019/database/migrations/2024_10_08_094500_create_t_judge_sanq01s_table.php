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
        Schema::create('t_judge_sanq01s', function (Blueprint $table) {
            $table->string('judge_sanq_key')->primary('t_judge_sanq01s_pkey');
            $table->string('judge_sanq_nm');
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
        Schema::dropIfExists('t_judge_sanq01s');
    }
};
