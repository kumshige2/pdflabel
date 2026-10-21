<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukoSanq01sWk1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juko_sanq01s_wk1', function(Blueprint $table)
		{
			$table->string('dantai_cd')->nullable();
			$table->string('dname')->nullable();
			$table->string('seqno_g4')->nullable();
			$table->string('name_k')->nullable();
			$table->string('name_j')->nullable();
			$table->string('syainno_g0')->nullable();
			$table->string('syzkcd_g1')->nullable();
			$table->string('syzknm')->nullable();
			$table->string('yubin')->nullable();
			$table->string('addr1')->nullable();
			$table->string('addr2')->nullable();
			$table->string('addr3')->nullable();
			$table->string('tel')->nullable();
			$table->string('tel2')->nullable();
			$table->string('email')->nullable();
			$table->string('juk_crs_no_g2')->nullable();
			$table->string('crsnj')->nullable();
			$table->string('juryo')->nullable();
			$table->string('kyo_krn')->nullable();
			$table->string('select_kmk')->nullable();
			$table->string('comments')->nullable();
			$table->string('tori_siten')->nullable();
			$table->string('tori_tnto')->nullable();
			$table->string('tnto_addr')->nullable();
			$table->string('tnto_tel')->nullable();
			$table->string('tnto_fax')->nullable();
			$table->string('tnto_email')->nullable();
			$table->string('sek_f')->nullable();
			$table->string('sek_tnto')->nullable();
			$table->string('syu_sof')->nullable();
			$table->string('sai')->nullable();
			$table->string('sai_jukno')->nullable();
			$table->string('judge_sanq_key', 2)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juko_sanq01s_wk1');
	}

}
