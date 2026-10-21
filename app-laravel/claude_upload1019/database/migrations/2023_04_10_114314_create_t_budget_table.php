<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBudgetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_budget', function(Blueprint $table)
		{
			$table->string('ndo', 4);
			$table->string('bsy_cd', 10);
			$table->string('kan_cd', 10);
			$table->string('kan_nm', 100)->nullable();
			$table->integer('m04')->nullable();
			$table->integer('m05')->nullable();
			$table->integer('m06')->nullable();
			$table->integer('m07')->nullable();
			$table->integer('m08')->nullable();
			$table->integer('m09')->nullable();
			$table->integer('m10')->nullable();
			$table->integer('m11')->nullable();
			$table->integer('m12')->nullable();
			$table->integer('m01')->nullable();
			$table->integer('m02')->nullable();
			$table->integer('m03')->nullable();
			$table->string('filler')->nullable();
			$table->integer('sumsum')->nullable();
			$table->primary(['ndo','bsy_cd','kan_cd'], 't_budget_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_budget');
	}

}
