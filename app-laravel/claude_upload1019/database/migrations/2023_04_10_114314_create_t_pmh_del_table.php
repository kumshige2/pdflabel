<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhDelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_del', function(Blueprint $table)
		{
			$table->string('p_id', 6)->nullable();
			$table->string('p_nm')->nullable();
			$table->string('kgo_cd', 11)->nullable();
			$table->string('kgo_nm_k')->nullable();
			$table->string('kgo_nm_j')->nullable();
			$table->string('kgo_yubin', 7)->nullable();
			$table->string('kgo_ken', 10)->nullable();
			$table->string('kgo_adr1')->nullable();
			$table->string('kgo_adr2')->nullable();
			$table->string('kgo_adr3')->nullable();
			$table->string('kgo_ka', 100)->nullable();
			$table->string('kgo_tanto', 50)->nullable();
			$table->string('kgo_tel', 50)->nullable();
			$table->string('kgo_fax', 50)->nullable();
			$table->string('filler1', 50)->nullable();
			$table->string('filler2', 50)->nullable();
			$table->string('filler3', 50)->nullable();
			$table->string('filler4', 50)->nullable();
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
		Schema::drop('t_pmh_del');
	}

}
