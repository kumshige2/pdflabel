<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSetteiInf01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_settei_inf01', function(Blueprint $table)
		{
			$table->string('p_id', 7)->primary('t_settei_inf01_pkey');
			$table->string('kgo_nm', 100)->nullable();
			$table->smallInteger('keisai_crs_add')->nullable();
			$table->string('otr_t', 1000)->nullable();
			$table->smallInteger('crs_nm_hk_kbn')->nullable();
			$table->string('crs_nm_crs', 1000)->nullable();
			$table->smallInteger('juko_hk_kbn')->nullable();
			$table->string('juko_hk_crs', 1000)->nullable();
			$table->smallInteger('heiyo_kbn')->nullable();
			$table->string('zai_f', 1)->nullable();
			$table->smallInteger('zai_mnt')->nullable();
			$table->string('hyozai_f', 1)->nullable();
			$table->smallInteger('hyozai_mnt')->nullable();
			$table->string('yusyu_f', 1)->nullable();
			$table->integer('yusyu_mnt')->nullable();
			$table->smallInteger('kigyo_crs_kbn')->nullable();
			$table->smallInteger('rpt_rnh_kbn')->nullable();
			$table->smallInteger('toku_no_kbn')->nullable();
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
		Schema::drop('t_settei_inf01');
	}

}
