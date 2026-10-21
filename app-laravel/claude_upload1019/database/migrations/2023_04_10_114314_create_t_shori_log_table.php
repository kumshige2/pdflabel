<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTShoriLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_shori_log', function(Blueprint $table)
		{
			$table->integer('auto_id', true);
			$table->string('types', 250)->nullable();
			$table->integer('cnt')->nullable();
			$table->string('data_set', 250)->nullable();
			$table->string('user_id', 250)->nullable();
			$table->string('term_id', 250)->nullable();
			$table->string('memos', 550)->nullable();
			$table->dateTime('cre_ymd')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_shori_log');
	}

}
