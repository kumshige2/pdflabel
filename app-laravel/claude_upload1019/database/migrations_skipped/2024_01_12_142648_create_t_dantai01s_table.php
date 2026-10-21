<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDantai02sTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_dantai01s', function(Blueprint $table)
		{
			$table->string('dantai_cd')->nullable();
			$table->string('dname')->nullable();
			$table->string('dname_k')->nullable();
			$table->string('dantai_cd_sg')->nullable();
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_dantai01s');
	}

}
