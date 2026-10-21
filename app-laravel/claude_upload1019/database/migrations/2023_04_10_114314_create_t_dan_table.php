<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dan', function(Blueprint $table)
		{
			$table->string('dantai_cd', 11)->primary('t_dan_pkey');
			$table->string('dname')->nullable();
			$table->string('dname_k')->nullable();
			$table->string('dantai_cd_sg', 20)->nullable();
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
			$table->string('dname_skip')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_dan');
	}

}
