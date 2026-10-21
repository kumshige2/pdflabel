<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhSekChk0301Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_sek_chk03_01', function(Blueprint $table)
		{
			$table->string('p_id', 10);
			$table->string('kgo_nm_j')->nullable();
			$table->string('bsy_cd', 10)->nullable();
			$table->string('bsy_nm')->nullable();
			$table->string('ad_cd', 10)->nullable();
			$table->string('ad_nm')->nullable();
			$table->string('kaiko1', 10)->nullable();
			$table->integer('this_year_cost')->nullable();
			$table->integer('mng_cost')->nullable();
			$table->integer('sanno_keisai_cost')->nullable();
			$table->integer('pmh_items')->nullable();
			$table->integer('pmh_cost')->nullable();
			$table->integer('post_cost')->nullable();
			$table->integer('bes_cost')->nullable();
			$table->integer('tdan_sek')->nullable();
			$table->float('crs_share_rate', 10, 0)->nullable();
			$table->string('insatu_kgo_nm')->nullable();
			$table->integer('sp_kin')->nullable();
			$table->string('sekyymm', 10)->nullable();
			$table->integer('sanno_cost')->nullable();
			$table->string('dantai_cd_knj', 15)->nullable();
			$table->string('dname')->nullable();
			$table->string('pmh_type', 10)->nullable();
			$table->string('pmh_type_nm', 50)->nullable();
			$table->string('deli_ymd1', 50)->nullable();
			$table->string('ksy_cd', 50)->nullable();
			$table->integer('this_income')->nullable();
			$table->float('this_koken_rate', 10, 0)->nullable();
			$table->integer('kanri_pmh_cost_sd')->nullable();
			$table->integer('kanri_pmh_cost_sei')->nullable();
			$table->integer('kanri_bos_cost_sd')->nullable();
			$table->integer('kanri_bas_cost_sei')->nullable();
			$table->string('kgo_cd', 15)->nullable();
			$table->integer('last_income')->nullable();
			$table->float('last_koken_rate', 10, 0)->nullable();
			$table->string('p_nd', 6);
			$table->primary(['p_id','p_nd'], 't_pmh_sek_chk03_01_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pmh_sek_chk03_01');
	}

}
