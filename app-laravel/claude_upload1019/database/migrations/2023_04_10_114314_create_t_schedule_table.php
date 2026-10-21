<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_schedule', function(Blueprint $table)
		{
			$table->string('schedule_id', 20);
			$table->date('schedule_ymd')->primary('t_schedule_pkey');
			$table->string('act', 20)->nullable();
			$table->string('times', 20)->nullable();
			$table->string('detail', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_schedule');
	}

}
