<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql_testtest')->create('t_out_hen_sanq01s', function (Blueprint $table) {
            $table->string('judge_sanq_key');
            $table->string('types');
            $table->string('tor')->nullable();
            $table->string('tor_tnto')->nullable();
            $table->string('url')->nullable();
            $table->string('tor_tel')->nullable();
            $table->string('tor_fax')->nullable();
            $table->string('tor_e_mail')->nullable();
            $table->string('sek_f')->nullable();
            $table->string('tor_sek_tnto')->nullable();
            $table->string('sho_sof')->nullable();
            $table->string('kaiko');
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
            $table->index(['judge_sanq_key', 'types', 'kaiko']);
            $table->primary(['judge_sanq_key', 'types', 'kaiko']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_out_hen_sanq01s');
    }
};
