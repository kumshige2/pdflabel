<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukSysId01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_sys_id01', function(Blueprint $table)
		{
			$table->string('kgo_a_cd');
			$table->string('client_id')->nullable();
			$table->string('kgo_nm')->nullable();
			$table->string('dup_kbn')->nullable();
			$table->string('tnto')->nullable();
			$table->string('fld01')->nullable();
			$table->string('kaiko_memo')->nullable();
			$table->string('std')->nullable();
			$table->string('fld02')->nullable();
			$table->string('fld03')->nullable();
			$table->date('pro_ymd')->nullable();
			$table->string('pnd_kbn')->nullable();
			$table->date('trm_ymd')->nullable();
			$table->string('trm_kbn')->nullable();
			$table->string('memos', 9000)->nullable();
			$table->string('access_id')->nullable();
			$table->string('fld05')->nullable();
			$table->string('fld06')->nullable();
			$table->string('fld07')->nullable();
			$table->string('fld08')->nullable();
			$table->string('fld09')->nullable();
			$table->string('fld10')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->integer('seq', true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juk_sys_id01');
	}

}
