<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSyainChk01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_syain_chk01', function(Blueprint $table)
		{
			$table->string('client_id', 10);
			$table->string('q_id', 10);
			$table->string('memos', 1000)->nullable();
			$table->string('sqls', 10000)->nullable();
			$table->integer('cnts')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->string('sts', 2)->nullable();
			$table->primary(['client_id','q_id'], 't_syain_chk01_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_syain_chk01');
	}

}
