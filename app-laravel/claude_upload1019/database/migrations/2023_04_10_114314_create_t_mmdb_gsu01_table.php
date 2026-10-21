<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMmdbGsu01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_mmdb_gsu01', function(Blueprint $table)
		{
			$table->string('ndo');
			$table->string('gsu_id');
			$table->string('gsu_nm')->nullable();
			$table->string('jokyo_kb1')->nullable();
			$table->integer('juko__cnt1')->nullable();
			$table->string('jokyo_kb2')->nullable();
			$table->integer('juko__cnt2')->nullable();
			$table->float('rate', 10, 0)->nullable();
			$table->primary(['ndo','gsu_id'], 't_mmdb_gsu01_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_mmdb_gsu01');
	}

}
