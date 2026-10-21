<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKsyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_ksy', function(Blueprint $table)
		{
			$table->string('ksy_cd', 15)->primary('t_ksy_pkey');
			$table->string('kgo_a_cd', 5)->nullable();
			$table->string('kgo_b_cd', 3)->nullable();
			$table->string('kgo_c_cd', 3)->nullable();
			$table->string('seq_no', 15)->nullable();
			$table->string('card_no', 15)->nullable();
			$table->string('ksy_nm')->nullable();
			$table->string('entry_kbn', 2)->nullable();
			$table->string('juk_keitai_kbn', 2)->nullable();
			$table->string('p_id', 10)->nullable();
			$table->string('p_nd', 5)->nullable();
			$table->string('trk_p_id', 10)->nullable();
			$table->string('trk_p_nd', 10)->nullable();
			$table->string('bsy_cd', 5)->nullable();
			$table->string('ad_cd', 5)->nullable();
			$table->string('ksy_fr', 15)->nullable();
			$table->string('ksy_to', 15)->nullable();
			$table->boolean('ng_flg')->nullable();
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
		Schema::drop('t_ksy');
	}

}
