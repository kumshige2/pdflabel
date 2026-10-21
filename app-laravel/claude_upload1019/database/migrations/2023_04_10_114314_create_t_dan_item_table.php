<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDanItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dan_item', function(Blueprint $table)
		{
			$table->string('dantai_cd', 12);
			$table->string('sof_id', 5);
			$table->integer('busu')->nullable();
			$table->primary(['dantai_cd','sof_id'], 't_dan_item_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_dan_item');
	}

}
