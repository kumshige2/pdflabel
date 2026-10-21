<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTaskTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_task', function(Blueprint $table)
		{
			$table->string('p_id', 10);
			$table->integer('seq');
			$table->string('item')->nullable();
			$table->dateTime('due_ymd')->nullable();
			$table->string('user_id')->nullable();
			$table->string('filler1')->nullable();
			$table->string('filler2')->nullable();
			$table->string('filler3')->nullable();
			$table->string('filler4')->nullable();
			$table->string('filler5')->nullable();
			$table->boolean('chk')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->string('filler6')->nullable();
			$table->primary(['p_id','seq'], 't_task_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_task');
	}

}
