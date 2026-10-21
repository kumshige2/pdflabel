<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTInsatuKgoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_insatu_kgo', function(Blueprint $table)
		{
			$table->string('insatu_kgo_cd', 3)->primary('t_insatu_kgo_pkey');
			$table->string('insatu_kgo_nm')->nullable();
			$table->string('tanto', 100)->nullable();
			$table->string('tel', 30)->nullable();
			$table->string('fax', 30)->nullable();
			$table->string('email_cc', 100)->nullable();
			$table->string('email_to')->nullable();
			$table->string('email_bcc', 100)->nullable();
			$table->string('mail_1', 500)->nullable();
			$table->string('mail_2', 400)->nullable();
			$table->string('mail_3', 400)->nullable();
			$table->string('pw', 50)->nullable();
			$table->string('tytle')->nullable();
			$table->boolean('sanno_flg')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_insatu_kgo');
	}

}
