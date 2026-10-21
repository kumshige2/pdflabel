<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSyainSanqTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_syain_sanq', function (Blueprint $table) {
			$table->string('syainno')->primary('t_syain_sanq_pkey');
			$table->string('syain_nm_j')->nullable();
			$table->string('syain_nm_k')->nullable();
			$table->string('koy_kbn')->nullable();
			$table->string('koy_nm')->nullable();
			$table->string('tesymd')->nullable();
			$table->string('tai_ymd')->nullable();
			$table->string('swacd')->nullable();
			$table->string('swanm')->nullable();
			$table->string('syk_kgocd')->nullable();
			$table->string('syk_kgonm')->nullable();
			$table->string('yakcd')->nullable();
			$table->string('yaknm')->nullable();
			$table->string('syzkcd')->nullable();
			$table->string('syzknm')->nullable();
			$table->string('domcd')->nullable();
			$table->string('domnm')->nullable();
			$table->string('cyuzai_kbn')->nullable();
			$table->string('cyuzai_nm')->nullable();
			$table->string('saiyo_kbn')->nullable();
			$table->string('saiyo_nm')->nullable();
			$table->string('birthday')->nullable();
			$table->string('nyusya_ymd')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_syain_sanq');
	}
}
