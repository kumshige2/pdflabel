<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTProfitMngKgoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_profit_mng_kgo', function(Blueprint $table)
		{
			$table->string('cre_ymd', 50)->nullable();
			$table->string('pages', 5)->nullable();
			$table->string('wheres', 100)->nullable();
			$table->string('term', 100)->nullable();
			$table->string('bsy_nm', 100)->nullable();
			$table->string('ad_nm', 50)->nullable();
			$table->string('crs_nm', 100)->nullable();
			$table->string('kgo_inf01', 20)->nullable();
			$table->string('kgo_inf02', 100)->nullable();
			$table->string('ksy_no', 50)->nullable();
			$table->integer('inc_tuk_tek_last_result_sd')->nullable();
			$table->integer('inc_tuk_tek_last_result_said')->nullable();
			$table->integer('inc_tuk_tek_this_result_sd')->nullable();
			$table->integer('inc_tuk_tek_this_result_said')->nullable();
			$table->integer('inc_tuk_tek_last_diff_sd')->nullable();
			$table->integer('inc_tuk_tek_last_diff_said')->nullable();
			$table->integer('inc_tuk_bak_last_result_sd')->nullable();
			$table->integer('inc_tuk_bak_last_result_said')->nullable();
			$table->integer('inc_tuk_bak_this_result_sd')->nullable();
			$table->integer('inc_tuk_bak_this_result_said')->nullable();
			$table->integer('inc_tuk_bak_last_diff_sd')->nullable();
			$table->integer('inc_tuk_bak_last_diff_said')->nullable();
			$table->integer('inc_addinc_bak_last_result_sd')->nullable();
			$table->integer('inc_addinc_bak_last_result_said')->nullable();
			$table->integer('inc_addinc_bak_this_result_sd')->nullable();
			$table->integer('inc_addinc_bak_this_result_said')->nullable();
			$table->integer('inc_addinc_bak_last_diff_sd')->nullable();
			$table->integer('inc_addinc_bak_last_diff_said')->nullable();
			$table->integer('inc_yb_last_result_sd')->nullable();
			$table->integer('inc_yb_last_result_said')->nullable();
			$table->integer('inc_yb_this_result_sd')->nullable();
			$table->integer('inc_yb_this_result_said')->nullable();
			$table->integer('inc_yb_last_diff_sd')->nullable();
			$table->integer('inc_yb_last_diff_said')->nullable();
			$table->integer('inc_juryo_neb_last_result_sd')->nullable();
			$table->integer('inc_juryo_neb_last_result_said')->nullable();
			$table->integer('inc_juryo_neb_this_result_sd')->nullable();
			$table->integer('inc_juryo_neb_this_result_said')->nullable();
			$table->integer('inc_juryo_neb_last_diff_sd')->nullable();
			$table->integer('inc_juryo_neb_last_diff_said')->nullable();
			$table->integer('inc_sogaku_neb_last_result_sd')->nullable();
			$table->integer('inc_sogaku_neb_last_result_said')->nullable();
			$table->integer('inc_sogaku_neb_this_result_sd')->nullable();
			$table->integer('inc_sogaku_neb_this_result_said')->nullable();
			$table->integer('inc_sogaku_neb_last_diff_sd')->nullable();
			$table->integer('inc_sogaku_neb_last_diff_said')->nullable();
			$table->float('inc_neb_rate_last_result_sd', 10, 0)->nullable();
			$table->float('inc_neb_rate_last_result_said', 10, 0)->nullable();
			$table->float('inc_neb_rate_this_result_sd', 10, 0)->nullable();
			$table->float('inc_neb_rate_this_result_said', 10, 0)->nullable();
			$table->float('inc_neb_rate_last_diff_sd', 10, 0)->nullable();
			$table->float('inc_neb_rate_last_diff_said', 10, 0)->nullable();
			$table->integer('var_cost_crscost_last_result_sd')->nullable();
			$table->integer('var_cost_crscost_last_result_said')->nullable();
			$table->integer('var_cost_crscost_this_result_sd')->nullable();
			$table->integer('var_cost_crscost_this_result_said')->nullable();
			$table->integer('var_cost_crscost_last_diff_sd')->nullable();
			$table->integer('var_cost_crscost_last_diff_said')->nullable();
			$table->integer('limit_profit_last_result_sd')->nullable();
			$table->integer('limit_profit_last_result_said')->nullable();
			$table->integer('limit_profit_this_result_sd')->nullable();
			$table->integer('limit_profit_this_result_said')->nullable();
			$table->integer('limit_profit_last_diff_sd')->nullable();
			$table->integer('limit_profit_last_diff_said')->nullable();
			$table->float('limit_profit_rate_last_result_sd', 10, 0)->nullable();
			$table->float('limit_profit_rate_last_result_said', 10, 0)->nullable();
			$table->float('limit_profit_rate_this_result_sd', 10, 0)->nullable();
			$table->float('limit_profit_rate_this_result_said', 10, 0)->nullable();
			$table->float('limit_profit_rate_last_diff_sd', 10, 0)->nullable();
			$table->float('limit_profit_rate_last_diff_said', 10, 0)->nullable();
			$table->integer('mngcost_pmhcost_last_result_sd')->nullable();
			$table->integer('mngcost_pmhcost_last_result_said')->nullable();
			$table->integer('mngcost_pmhcost_this_result_sd')->nullable();
			$table->integer('mngcost_pmhcost_this_result_said')->nullable();
			$table->integer('mngcost_pmhcost_last_diff_sd')->nullable();
			$table->integer('mngcost_pmhcost_last_diff_said')->nullable();
			$table->integer('mngcost_bsyfee_last_result_sd')->nullable();
			$table->integer('mngcost_bsyfee_last_result_said')->nullable();
			$table->integer('mngcost_bsyfee_this_result_sd')->nullable();
			$table->integer('mngcost_bsyfee_this_result_said')->nullable();
			$table->integer('mngcost_bsyfee_last_diff_sd')->nullable();
			$table->integer('mngcost_bsyfee_last_diff_said')->nullable();
			$table->integer('koken_profit_last_result_sd')->nullable();
			$table->integer('koken_profit_last_result_said')->nullable();
			$table->integer('koken_profit_this_result_sd')->nullable();
			$table->integer('koken_profit_this_result_said')->nullable();
			$table->integer('koken_profit_last_diff_sd')->nullable();
			$table->integer('koken_profit_last_diff_said')->nullable();
			$table->float('koken_profit_rate_last_result_sd', 10, 0)->nullable();
			$table->float('koken_profit_rate_last_result_said', 10, 0)->nullable();
			$table->float('koken_profit_rate_this_result_sd', 10, 0)->nullable();
			$table->float('koken_profit_rate_this_result_said', 10, 0)->nullable();
			$table->float('koken_profit_rate_last_diff_sd', 10, 0)->nullable();
			$table->float('koken_profit_rate_last_diff_said', 10, 0)->nullable();
			$table->string('bsy_cd', 10);
			$table->string('ad_cd', 10);
			$table->string('kgo_cd', 15);
			$table->string('ndo', 4);
			$table->primary(['bsy_cd','ad_cd','kgo_cd','ndo'], 't_profit_mng_kgo_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_profit_mng_kgo');
	}

}
