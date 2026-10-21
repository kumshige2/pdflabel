<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDantaiSub01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dantai_sub01', function(Blueprint $table)
		{
			$table->string('dantai_cd', 11);
			$table->string('dantai_cd3', 5);
			$table->string('siten', 100)->nullable();
			$table->string('uketori', 100)->nullable();
			$table->string('tanto', 100)->nullable();
			$table->string('tel', 30)->nullable();
			$table->string('fax', 30)->nullable();
			$table->string('addr1')->nullable();
			$table->string('addr2')->nullable();
			$table->string('addr3')->nullable();
			$table->string('yubin', 10)->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->primary(['dantai_cd','dantai_cd3'], 't_dantai_sub01_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_dantai_sub01');
	}

}
