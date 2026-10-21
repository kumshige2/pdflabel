<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOutHenSanq01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_out_hen_sanq01', function(Blueprint $table)
		{
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
			$table->index(['judge_sanq_key','types','kaiko'], 't_out_hen_sanq01_judge_sanq_key_types_kaiko_idx');
			$table->primary(['judge_sanq_key','types','kaiko'], 't_out_hen_sanq01_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_out_hen_sanq01');
	}

}
