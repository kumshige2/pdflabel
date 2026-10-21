<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhSek01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_sek01', function(Blueprint $table)
		{
			$table->string('kgo_cd', 5);
			$table->string('p_id', 10);
			$table->string('p_no', 25);
			$table->string('dantai_cd_knj', 15);
			$table->string('dantai_cd_sek', 15);
			$table->string('tks_type_kbn', 3);
			$table->integer('xx_cost01')->nullable();
			$table->integer('xx_cost02')->nullable();
			$table->integer('xx_cost03')->nullable();
			$table->integer('etc_cost')->nullable();
			$table->float('senyu_page', 10, 0)->nullable();
			$table->float('all_page', 10, 0)->nullable();
			$table->float('com_page', 10, 0)->nullable();
			$table->float('sho_page', 10, 0)->nullable();
			$table->float('page_tanka', 10, 0)->nullable();
			$table->string('xx_fld01', 5)->nullable();
			$table->integer('com_cost')->nullable();
			$table->integer('sho_cost')->nullable();
			$table->integer('sanno_crs')->nullable();
			$table->integer('shokai_dantai')->nullable();
			$table->integer('crs_tanka')->nullable();
			$table->integer('mng_cost')->nullable();
			$table->integer('sanno_cost')->nullable();
			$table->integer('sp_kin')->nullable();
			$table->string('sekyymm', 6)->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->string('memos_sek', 1000)->nullable();
			$table->primary(['kgo_cd','p_id','p_no','dantai_cd_knj','dantai_cd_sek','tks_type_kbn'], 't_pmh_sek01_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pmh_sek01');
	}

}
