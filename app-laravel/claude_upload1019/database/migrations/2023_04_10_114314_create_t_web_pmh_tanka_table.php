<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWebPmhTankaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_web_pmh_tanka', function(Blueprint $table)
		{
			$table->string('web_tanka_cd', 3)->primary('t_web_pmh_tanka_pkey');
			$table->integer('web_crs_tanka')->nullable();
			$table->integer('web_page_tanka')->nullable();
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
		Schema::drop('t_web_pmh_tanka');
	}

}
