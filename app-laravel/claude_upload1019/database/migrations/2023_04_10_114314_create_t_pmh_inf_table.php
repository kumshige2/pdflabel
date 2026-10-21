<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhInfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_inf', function(Blueprint $table)
		{
			$table->string('p_id', 6);
			$table->string('p_nd', 10);
			$table->string('p_nm')->nullable();
			$table->string('ad_cd', 10)->nullable();
			$table->string('ad_nm', 50)->nullable();
			$table->string('bsy_cd', 10)->nullable();
			$table->string('bsy_nm', 50)->nullable();
			$table->string('kgo_cd', 5)->nullable();
			$table->string('kgo_nm')->nullable();
			$table->string('pmf_term_fr', 10)->nullable();
			$table->string('pmf_term_to', 10)->nullable();
			$table->string('pmf_type_cd', 2)->nullable();
			$table->string('knj_dantai_cd', 3)->nullable();
			$table->string('media_kbn', 1)->nullable();
			$table->string('pmf_sek_id', 15)->nullable();
			$table->string('rng_kbn', 1)->nullable();
			$table->string('upd_yus_term', 20)->nullable();
			$table->string('ik_upd_yus_kbn', 10)->nullable();
			$table->string('upd_yus_ymd', 20)->nullable();
			$table->string('upd_yus_zai_term', 20)->nullable();
			$table->string('ik_upd_zai_kbn', 10)->nullable();
			$table->string('upd_zai_ymd', 20)->nullable();
			$table->string('upd_hyo_zai_term', 20)->nullable();
			$table->string('ik_upd_hyo_zai_term', 20)->nullable();
			$table->string('upd_hyo_zai_ymd', 20)->nullable();
			$table->string('ip_tok_ryo_kbn', 10)->nullable();
			$table->string('discount_rate', 10)->nullable();
			$table->string('discount_kin', 10)->nullable();
			$table->string('with_rate', 10)->nullable();
			$table->text('memos')->nullable();
			$table->string('inv_flg', 1)->nullable();
			$table->string('cre_ymd', 20)->nullable();
			$table->string('cre_id', 10)->nullable();
			$table->string('upd_ymd', 20)->nullable();
			$table->string('upd_id', 10)->nullable();
			$table->primary(['p_id','p_nd'], 't_pmh_inf_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pmh_inf');
	}

}
