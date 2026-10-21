<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSayingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_saying', function(Blueprint $table)
		{
			$table->integer('s_id')->primary('t_saying_pkey');
			$table->string('title')->nullable();
			$table->string('links', 1000)->nullable();
			$table->string('deccription', 2000)->nullable();
			$table->string('sources', 500)->nullable();
			$table->string('category', 50)->nullable();
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
		Schema::drop('t_saying');
	}

}
