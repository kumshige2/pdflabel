<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTC13008371Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_c1_3008371', function(Blueprint $table)
		{
			$table->string('juko_no', 10)->primary('t_c1_3003876_pkey');
			$table->string('juko_nm_j', 75)->nullable();
			$table->string('juko_nm_k', 75)->nullable();
			$table->string('ksy_cd', 15)->nullable();
			$table->string('kei_kgo_a_cd', 5)->nullable();
			$table->string('kei_kgo_a_nm')->nullable();
			$table->string('kei_kgo_b_cd', 3)->nullable();
			$table->string('kei_kgo_b_nm')->nullable();
			$table->string('kei_kgo_c_cd', 3)->nullable();
			$table->string('kei_kgo_c_nm')->nullable();
			$table->string('ad_cd', 10)->nullable();
			$table->string('ad_nm', 50)->nullable();
			$table->string('bsy_cd', 5)->nullable();
			$table->string('bsy_nm')->nullable();
			$table->string('kei', 10)->nullable();
			$table->string('sei_kgo_a_cd', 5)->nullable();
			$table->string('sei_kgo_a_nm')->nullable();
			$table->string('sei_kgo_b_cd', 3)->nullable();
			$table->string('sei_kgo_b_nm')->nullable();
			$table->string('sei_kgo_c_cd', 3)->nullable();
			$table->string('sei_kgo_c_nm')->nullable();
			$table->string('payment', 20)->nullable();
			$table->string('kaiko1', 10)->nullable();
			$table->string('syz_kgo_a_cd', 5)->nullable();
			$table->string('syz_kgo_a_nm')->nullable();
			$table->string('syz_kgo_b_cd', 3)->nullable();
			$table->string('syz_kgo_b_nm')->nullable();
			$table->string('syz_kgo_c_cd', 3)->nullable();
			$table->string('syz_kgo_c_nm')->nullable();
			$table->string('crs_cd', 100)->nullable();
			$table->string('p_id', 10)->nullable();
			$table->string('kgo_crs_cd', 100)->nullable();
			$table->string('kgo_crs_nm', 100)->nullable();
			$table->string('jgo_kei', 10)->nullable();
			$table->string('price', 7)->nullable();
			$table->string('teikyo_price', 7)->nullable();
			$table->string('sell_price', 7)->nullable();
			$table->string('kjn_price', 7)->nullable();
			$table->string('dan_price', 7)->nullable();
			$table->string('service_cd', 15)->nullable();
			$table->string('g1', 20)->nullable();
			$table->string('kyo_knr_no', 20)->nullable();
			$table->string('g0', 20)->nullable();
			$table->string('g2', 50)->nullable();
			$table->string('g3', 50)->nullable();
			$table->string('sai_kbn', 10)->nullable();
			$table->string('gak_cost', 15)->nullable();
			$table->string('trk_cost', 15)->nullable();
			$table->string('skn_cost', 15)->nullable();
			$table->string('kyo_cost', 15)->nullable();
			$table->string('nai_cost', 15)->nullable();
			$table->string('pay_web_no', 10)->nullable();
			$table->string('juko_sts', 10)->nullable();
			$table->string('kyufu_kbn', 10)->nullable();
			$table->string('reason', 10)->nullable();
			$table->string('juko_upd_id', 10)->nullable();
			$table->string('juko_upd_nm', 50)->nullable();
			$table->string('juko_upd_ymd', 20)->nullable();
			$table->string('juko_cre_ymd', 20)->nullable();
			$table->string('kei_no', 20)->nullable();
			$table->string('kei_seq', 5)->nullable();
			$table->string('gyo_cd', 5)->nullable();
			$table->string('gyo', 20)->nullable();
			$table->string('skn_kmk_cd', 10)->nullable();
			$table->string('skn_kmk_nm', 50)->nullable();
			$table->string('syn_kmk_cd', 10)->nullable();
			$table->string('syn_kmk_nm', 50)->nullable();
			$table->string('syn_ymd', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_c1_3008371');
	}

}
