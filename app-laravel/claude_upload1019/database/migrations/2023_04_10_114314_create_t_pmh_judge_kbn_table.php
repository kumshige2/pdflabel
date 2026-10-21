<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhJudgeKbnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_judge_kbn', function(Blueprint $table)
		{
			$table->integer('pmh_judge_kbn')->primary('t_pmh_judge_kbn_pkey');
			$table->char('pmh_judge', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pmh_judge_kbn');
	}

}
