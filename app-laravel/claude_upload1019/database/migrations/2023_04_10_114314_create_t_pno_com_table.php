<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPnoComTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pno_com', function(Blueprint $table)
		{
			$table->string('p_id', 10)->primary('t_pno_com_pkey');
			$table->integer('p_no_seq')->nullable();
			$table->integer('fld01')->nullable();
			$table->integer('fld02')->nullable();
			$table->integer('fld03')->nullable();
			$table->integer('fld04')->nullable();
			$table->integer('fld05')->nullable();
			$table->integer('fld06')->nullable();
			$table->integer('fld07')->nullable();
			$table->integer('fld08')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pno_com');
	}

}
