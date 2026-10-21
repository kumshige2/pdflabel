<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDantaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dantai', function(Blueprint $table)
		{
			$table->string('dantai_cd', 11)->primary('t_dantai_pkey1');
			$table->string('dname')->nullable();
			$table->string('dname_k')->nullable();
			$table->string('dantai_cd_sg', 20)->nullable();
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
		Schema::drop('t_dantai');
	}

}
