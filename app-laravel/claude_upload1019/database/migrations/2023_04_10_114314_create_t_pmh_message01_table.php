<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhMessage01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_message01', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('message', 1000)->nullable();
			$table->string('p_id', 10)->nullable();
			$table->string('p_nd', 4)->nullable();
			$table->string('user_id', 10)->nullable();
			$table->integer('rep_post_id')->nullable();
			$table->dateTime('upd_ymd')->nullable();
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
		Schema::drop('t_pmh_message01');
	}

}
