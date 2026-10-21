<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhSek01DelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_sek01_del', function(Blueprint $table)
		{
			$table->string('kgo_cd', 5)->nullable();
			$table->string('p_id', 10)->nullable();
			$table->string('p_no', 25)->nullable();
			$table->string('dantai_cd_knj', 15)->nullable();
			$table->string('dantai_cd_sek', 15)->nullable();
			$table->string('tks_type_kbn', 3)->nullable();
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
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pmh_sek01_del');
	}

}
