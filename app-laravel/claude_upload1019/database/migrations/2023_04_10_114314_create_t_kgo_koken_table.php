<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKgoKokenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_kgo_koken', function(Blueprint $table)
		{
			$table->string('kgo_cd', 11);
			$table->string('ndo', 6);
			$table->string('kgo_inf02', 75)->nullable();
			$table->integer('income')->nullable();
			$table->float('koken_rate', 10, 0)->nullable();
			$table->string('kgo_a_cd', 5)->nullable();
			$table->string('p_id', 10)->nullable();
			$table->string('dantai_cd', 11)->nullable();
			$table->string('dname')->nullable();
			$table->string('ad_cd', 10)->nullable();
			$table->string('ad_nm', 100)->nullable();
			$table->integer('this_year_cost')->nullable();
			$table->integer('sanno_cost')->nullable();
			$table->primary(['kgo_cd','ndo'], 't_kgo_koken_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_kgo_koken');
	}

}
