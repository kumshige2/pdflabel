<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSyainSunWk02Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_syain_sun_wk02', function(Blueprint $table)
		{
			$table->string('access_id')->nullable();
			$table->string('syainno')->nullable();
			$table->string('birth_md')->nullable();
			$table->string('bsy_cd')->nullable();
			$table->string('bsy_nm')->nullable();
			$table->string('license')->nullable();
			$table->string('filler1')->nullable();
			$table->string('filler2')->nullable();
			$table->string('filler3')->nullable();
			$table->string('filler4')->nullable();
			$table->string('except_flg')->nullable();
			$table->string('company_id')->nullable();
			$table->string('client_id')->nullable();
			$table->string('filler5')->nullable();
			$table->string('filler6')->nullable();
			$table->string('filler7')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_syain_sun_wk02');
	}

}
