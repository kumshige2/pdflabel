<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDanWkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dan_wk', function(Blueprint $table)
		{
			$table->string('dantai_cd', 11)->primary('t_dan_wk_pkey');
			$table->string('dantai_cd_sg', 20)->nullable();
			$table->string('dname')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_dan_wk');
	}

}
