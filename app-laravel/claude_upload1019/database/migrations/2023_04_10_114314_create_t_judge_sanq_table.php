<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJudgeSanqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_judge_sanq', function(Blueprint $table)
		{
			$table->string('judge_sanq_key')->primary('t_judge_sanq_pkey');
			$table->string('judge_sanq_nm')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_judge_sanq');
	}

}
