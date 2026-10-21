<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_ad', function(Blueprint $table)
		{
			$table->string('ad_cd', 7)->primary('t_ad_pkey');
			$table->string('ad_nm', 75)->nullable();
			$table->string('ad_nm_k', 75)->nullable();
			$table->integer('flg')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_ad');
	}

}
