<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCrsSanqTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_crs_sanq', function (Blueprint $table) {
			$table->string('crscd')->primary('t_crs_sanq_pkey');
			$table->string('haiflg')->nullable();
			$table->string('crsno')->nullable();
			$table->string('crsnj')->nullable();
			$table->string('dan_crscd')->nullable();
			$table->string('juryo')->nullable();
			$table->string('jukmm')->nullable();
			$table->string('zaimm')->nullable();
			$table->string('kmk_su')->nullable();
			$table->string('taisho')->nullable();
			$table->string('dantai_cd')->nullable();
			$table->string('tok_dantai_cd')->nullable();
			$table->string('kyo_km')->nullable();
			$table->string('kaitei_yotei')->nullable();
			$table->string('address')->nullable();
			$table->string('saj_flg')->nullable();
			$table->string('sai_juryo')->nullable();
			$table->string('sai_zaimm')->nullable();
			$table->string('sai_memo')->nullable();
			$table->string('hsn_crsno')->nullable();
			$table->string('caution_flg')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_crs_sanq');
	}
}
