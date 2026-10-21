<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAccessLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_access_log', function(Blueprint $table)
		{
			$table->integer('lid', true);
			$table->string('url')->nullable();
			$table->string('referer')->nullable();
			$table->string('useragent')->nullable();
			$table->dateTime('accessdate')->nullable();
			$table->string('user_ip', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_access_log');
	}

}
