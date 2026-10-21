<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateT32JukoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_32_juko', function(Blueprint $table)
		{
			$table->string('id', 10);
			$table->string('kgo_nm')->nullable();
			$table->string('syzk_cd')->nullable();
			$table->string('syzk_nm')->nullable();
			$table->integer('fee')->nullable();
			$table->string('kgo_nm_seiq')->nullable();
			$table->string('kgo_cd_seiq')->nullable();
			$table->string('kgo_nm_mng')->nullable();
			$table->string('syainno');
			$table->string('crs_cd_mng');
			$table->string('jukonk')->nullable();
			$table->string('jukonj')->nullable();
			$table->string('kyz_sof_kbn')->nullable();
			$table->string('yubin')->nullable();
			$table->string('ken')->nullable();
			$table->string('adr')->nullable();
			$table->string('tel')->nullable();
			$table->string('mail_adr')->nullable();
			$table->string('e_mail_adr')->nullable();
			$table->string('crs_nm')->nullable();
			$table->string('crs_nm_mng')->nullable();
			$table->string('dan_cd_mng')->nullable();
			$table->string('dan_nm_mng')->nullable();
			$table->string('dan_cd_sei')->nullable();
			$table->string('dan_nm_sei')->nullable();
			$table->string('kaiko');
			$table->string('saij')->nullable();
			$table->string('flg_kyuf')->nullable();
			$table->string('pamph_id')->nullable();
			$table->string('pamph_ndo')->nullable();
			$table->string('ksy_cd')->nullable();
			$table->string('crs_cd')->nullable();
			$table->string('non_mng_flg')->nullable();
			$table->string('memos')->nullable();
			$table->string('rec_id')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->string('cancel_kbn')->nullable();
			$table->dateTime('cancel_ymd')->nullable();
			$table->string('sai_jukno')->nullable();
			$table->dateTime('send_ymd')->nullable();
			$table->string('kykrno')->nullable();
			$table->dateTime('upl_ymd')->nullable();
			$table->string('options')->nullable();
			$table->string('filler1')->nullable();
			$table->string('filler2')->nullable();
			$table->string('filler3')->nullable();
			$table->string('filler4')->nullable();
			$table->string('filler5')->nullable();
			$table->integer('seq')->nullable();
			$table->primary(['kaiko','crs_cd_mng','syainno'], 't_ent_juko_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_32_juko');
	}

}
