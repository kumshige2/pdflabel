<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhSub01TempTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_sub01_temp', function(Blueprint $table)
		{
			$table->string('p_id', 10);
			$table->string('p_no', 25);
			$table->string('p_nm')->nullable();
			$table->string('kaiko1', 6)->nullable();
			$table->string('pmh_type', 6)->nullable();
			$table->string('kaiko_ptn_kbn', 50)->nullable();
			$table->date('app_ymd')->nullable();
			$table->string('snk_kei_kbn', 10)->nullable();
			$table->string('ad_cd', 10)->nullable();
			$table->string('ad_nm', 50)->nullable();
			$table->string('bsy_cd', 10)->nullable();
			$table->string('bsy_nm', 50)->nullable();
			$table->string('uke_kgo_cd', 3)->nullable();
			$table->string('mke_kgo_cd', 3)->nullable();
			$table->string('insatu_kgo_cd', 3)->nullable();
			$table->integer('all_crs')->nullable();
			$table->integer('ww_fld14')->nullable();
			$table->float('crs_share_rate', 10, 0)->nullable();
			$table->integer('tdantai')->nullable();
			$table->string('dantai_cd_knj', 11)->nullable();
			$table->string('pmh_size_kbn', 50)->nullable();
			$table->string('han_size_kbn', 50)->nullable();
			$table->string('card_type_kbn', 50)->nullable();
			$table->string('card_hyojun_kbn', 50)->nullable();
			$table->string('card_hyojun_memo')->nullable();
			$table->integer('pmh_items')->nullable();
			$table->integer('pos_items')->nullable();
			$table->integer('bes_items')->nullable();
			$table->integer('etc_items')->nullable();
			$table->integer('noh_items')->nullable();
			$table->string('pos_size_kbn', 50)->nullable();
			$table->string('pos_type_kbn', 50)->nullable();
			$table->string('bes_type_kbn', 50)->nullable();
			$table->string('etc_type', 50)->nullable();
			$table->string('noh_kbn', 50)->nullable();
			$table->date('noh_ymd')->nullable();
			$table->date('uke_ymd')->nullable();
			$table->date('ryo_ymd')->nullable();
			$table->date('hac_ymd')->nullable();
			$table->date('shoko_ymd')->nullable();
			$table->date('shoko_sof_ymd')->nullable();
			$table->date('shoko_return_ymd')->nullable();
			$table->date('saiko_ymd')->nullable();
			$table->date('saiko_sof_ymd')->nullable();
			$table->date('saiko_return_ymd')->nullable();
			$table->date('ko3_ymd')->nullable();
			$table->date('sekryo_ymd')->nullable();
			$table->date('moji_kosei_ymd')->nullable();
			$table->date('color_kosei_ymd')->nullable();
			$table->date('sof_irai_ymd')->nullable();
			$table->date('fax_nenko_ymd')->nullable();
			$table->date('sof_yotei_ymd')->nullable();
			$table->date('shoko_seki_ymd')->nullable();
			$table->date('saiko_yotei_ymd')->nullable();
			$table->date('sek_yotei_ymd')->nullable();
			$table->string('color_kosei_kbn', 6)->nullable();
			$table->integer('this_year_sales')->nullable();
			$table->integer('this_year_cost')->nullable();
			$table->integer('sanno_cost')->nullable();
			$table->integer('pmh_cost')->nullable();
			$table->integer('post_cost')->nullable();
			$table->integer('bes_cost')->nullable();
			$table->integer('ww_fld01')->nullable();
			$table->integer('mng_cost')->nullable();
			$table->integer('sanno_keisai_cost')->nullable();
			$table->integer('etc_cost1_web')->nullable();
			$table->integer('etc_cost2_web')->nullable();
			$table->integer('sek_knr_kbn')->nullable();
			$table->integer('ww_fld02')->nullable();
			$table->integer('ww_fld03')->nullable();
			$table->integer('tdan_sek')->nullable();
			$table->integer('ww_fld04')->nullable();
			$table->float('ww_fld05', 10, 0)->nullable();
			$table->float('ww_fld06', 10, 0)->nullable();
			$table->float('ww_fld07', 10, 0)->nullable();
			$table->float('ww_fld08', 10, 0)->nullable();
			$table->float('ww_fld09', 10, 0)->nullable();
			$table->integer('ww_fld10')->nullable();
			$table->float('kyu_sho_page', 10, 0)->nullable();
			$table->integer('ww_fld12')->nullable();
			$table->float('ww_fld13', 10, 0)->nullable();
			$table->integer('any_cost')->nullable();
			$table->integer('last_year_sales')->nullable();
			$table->integer('last_year_cost')->nullable();
			$table->integer('all_cost_tdan')->nullable();
			$table->string('bunrui_kbn', 6)->nullable();
			$table->string('sek_ng_kbn', 50)->nullable();
			$table->string('kgo_sek_kbn', 50)->nullable();
			$table->string('data_select_kbn', 6)->nullable();
			$table->string('web_pmh_kbn', 50)->nullable();
			$table->string('sho_sof_kbn', 50)->nullable();
			$table->string('kgo_ren_kbn', 50)->nullable();
			$table->string('kjn_inf_kbn', 50)->nullable();
			$table->string('cansel_policy_kbn', 50)->nullable();
			$table->string('e_learning_kbn', 50)->nullable();
			$table->string('kyufu_kbn', 50)->nullable();
			$table->string('contact_kbn', 50)->nullable();
			$table->string('old_crs_kbn', 50)->nullable();
			$table->string('special_kbn', 500)->nullable();
			$table->string('rental')->nullable();
			$table->string('memos', 2500)->nullable();
			$table->string('web_pmh_url')->nullable();
			$table->string('id', 100)->nullable();
			$table->string('pass', 50)->nullable();
			$table->string('dl_kbn', 50)->nullable();
			$table->string('nik_bp_kbn', 10)->nullable();
			$table->string('web_noh_kbn', 50)->nullable();
			$table->string('ker_cd', 5)->nullable();
			$table->boolean('kyufu_chk')->nullable();
			$table->boolean('cansel_chk')->nullable();
			$table->boolean('dan_adr_chk')->nullable();
			$table->boolean('zai_chk')->nullable();
			$table->boolean('saij_chk')->nullable();
			$table->boolean('e_chk')->nullable();
			$table->boolean('sku_inf_chk')->nullable();
			$table->boolean('one_p_chk')->nullable();
			$table->boolean('juryo_chk')->nullable();
			$table->boolean('juko_chk')->nullable();
			$table->boolean('eig_chk')->nullable();
			$table->boolean('lbl_chk')->nullable();
			$table->boolean('sku_chk')->nullable();
			$table->boolean('nani_chk')->nullable();
			$table->boolean('kmk_chk')->nullable();
			$table->boolean('etc_chk')->nullable();
			$table->string('tdan_kyufu_memo')->nullable();
			$table->string('tdan_zai_memo')->nullable();
			$table->string('tdan_one_p_memo')->nullable();
			$table->string('tdan_etc_memo')->nullable();
			$table->string('ksy_cd', 50)->nullable();
			$table->string('pmh_cycle_kbn', 20)->nullable();
			$table->integer('deli_xx')->nullable();
			$table->date('deli_ymd')->nullable();
			$table->string('deli_type', 6)->nullable();
			$table->string('hyosi_colors', 2)->nullable();
			$table->string('uke_ymd_tnto')->nullable();
			$table->string('ryo_ymd_tnto')->nullable();
			$table->string('hac_ymd_tnto')->nullable();
			$table->string('shoko_ymd_tnto')->nullable();
			$table->string('shoko_sof_ymd_tnto')->nullable();
			$table->string('shoko_return_ymd_tnto')->nullable();
			$table->string('saiko_ymd_tnto')->nullable();
			$table->string('saiko_sof_ymd_tnto')->nullable();
			$table->string('saiko_return_ymd_tnto')->nullable();
			$table->string('ko3_ymd_tnto')->nullable();
			$table->string('sekryo_ymd_tnto')->nullable();
			$table->string('moji_kosei_ymd_tnto')->nullable();
			$table->string('color_kosei_ymd_tnto')->nullable();
			$table->string('sof_irai_ymd_tnto')->nullable();
			$table->string('fax_nenko_ymd_tnto')->nullable();
			$table->string('p_nd', 50)->nullable();
			$table->string('filler2', 50)->nullable();
			$table->string('filler3', 50)->nullable();
			$table->string('filler4', 50)->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->primary(['p_id','p_no'], 't_pmh_sub01_temp_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pmh_sub01_temp');
	}

}
