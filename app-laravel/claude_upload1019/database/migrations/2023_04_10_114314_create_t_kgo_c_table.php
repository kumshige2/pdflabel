<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKgoCTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_kgo_c', function(Blueprint $table)
		{
			$table->string('kgo_a_cd', 5);
			$table->string('kgo_b_cd', 3);
			$table->string('kgo_c_cd', 3);
			$table->string('kgo_tnto_bsy_nm_j')->nullable();
			$table->string('kgo_tnto_bsy_nm_k')->nullable();
			$table->string('kgo_tnto_nm_j', 50)->nullable();
			$table->string('kgo_tnto_nm_k', 50)->nullable();
			$table->string('kgo_tel', 20)->nullable();
			$table->string('kgo_fax', 20)->nullable();
			$table->string('email')->nullable();
			$table->string('dm_kbn', 1)->nullable();
			$table->string('sg_flg', 1)->nullable();
			$table->string('sg_trk_ymd', 20)->nullable();
			$table->string('sg_knr_cd', 10)->nullable();
			$table->string('memo')->nullable();
			$table->string('kgo_seq', 50)->nullable();
			$table->string('inv_flg', 1)->nullable();
			$table->string('cre_ymd', 50)->nullable();
			$table->string('cre_usr_id', 10)->nullable();
			$table->string('upd_ymd', 50)->nullable();
			$table->string('upd_usr_id', 10)->nullable();
			$table->primary(['kgo_a_cd','kgo_b_cd','kgo_c_cd'], 't_kgo_c_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_kgo_c');
	}

}
