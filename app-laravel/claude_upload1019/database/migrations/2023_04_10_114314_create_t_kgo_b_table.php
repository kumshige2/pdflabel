<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKgoBTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_kgo_b', function(Blueprint $table)
		{
			$table->string('kgo_a_cd', 5);
			$table->string('kgo_b_cd', 3);
			$table->string('kgo_b_nm_j')->nullable();
			$table->string('kgo_b_nm_k')->nullable();
			$table->string('kgo_yubin', 8)->nullable();
			$table->string('kgo_ken_cd', 10)->nullable();
			$table->string('kgo_town_cd', 10)->nullable();
			$table->string('kgo_ken', 50)->nullable();
			$table->string('kgo_adr1')->nullable();
			$table->string('kgo_adr2')->nullable();
			$table->string('kgo_adr3')->nullable();
			$table->string('memo')->nullable();
			$table->string('kgo_seq', 50)->nullable();
			$table->string('kgo_flg', 1)->nullable();
			$table->string('cre_ymd', 50)->nullable();
			$table->string('cre_usr_id', 10)->nullable();
			$table->string('upd_ymd', 50)->nullable();
			$table->string('upd_usr_id', 10)->nullable();
			$table->primary(['kgo_a_cd','kgo_b_cd'], 't_kgo_b_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_kgo_b');
	}

}
