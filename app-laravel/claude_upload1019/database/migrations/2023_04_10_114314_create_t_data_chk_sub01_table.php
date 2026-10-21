<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDataChkSub01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_data_chk_sub01', function(Blueprint $table)
		{
			$table->string('kgo_cd', 50);
			$table->string('p_id', 10);
			$table->string('p_nd', 5);
			$table->integer('p_seq');
			$table->string('items')->nullable();
			$table->integer('out_seq')->nullable();
			$table->boolean('dup_chk')->nullable()->default(0);
			$table->boolean('tel_chk')->nullable()->default(0);
			$table->boolean('num_chk')->nullable()->default(0);
			$table->boolean('yub_chk')->nullable()->default(0);
			$table->boolean('mail_chk')->nullable()->default(0);
			$table->boolean('null_chk')->nullable()->default(0);
			$table->boolean('a_zero_chk')->nullable()->default(0);
			$table->boolean('hankaku_chk')->nullable()->default(0);
			$table->integer('keta_chk')->nullable();
			$table->boolean('out_chk')->nullable()->default(0);
			$table->string('fld_nm', 100)->nullable();
			$table->string('memo')->nullable();
			$table->string('upd_ymd', 50)->nullable();
			$table->string('cre_ymd', 50)->nullable();
			$table->integer('sort_key')->nullable();
			$table->primary(['kgo_cd','p_id','p_nd','p_seq'], 't_data_chk_sub01_pkey1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_data_chk_sub01');
	}

}
