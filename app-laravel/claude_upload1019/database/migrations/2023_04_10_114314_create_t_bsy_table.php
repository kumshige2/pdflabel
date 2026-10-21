<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBsyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_bsy', function(Blueprint $table)
		{
			$table->string('bsy_cd', 5)->primary('t_bsy_pkey');
			$table->string('bsy_nm', 50)->nullable();
			$table->string('bsy_cd2', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_bsy');
	}

}
