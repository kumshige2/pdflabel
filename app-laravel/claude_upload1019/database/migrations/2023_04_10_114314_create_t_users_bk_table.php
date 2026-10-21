<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUsersBkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_users_bk', function(Blueprint $table)
		{
			$table->string('user_id', 10)->primary('t_users_bk_pkey');
			$table->string('username', 50)->nullable();
			$table->string('username_k', 50)->nullable();
			$table->string('password', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_users_bk');
	}

}
