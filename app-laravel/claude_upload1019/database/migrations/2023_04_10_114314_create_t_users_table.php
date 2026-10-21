<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_users', function(Blueprint $table)
		{
			$table->string('user_id', 10)->primary('t_users_pkey');
			$table->string('username', 50)->nullable();
			$table->string('username_k', 50)->nullable();
			$table->string('password', 250)->nullable();
			$table->string('picture')->nullable();
			$table->string('staff_kbn', 1)->nullable();
			$table->string('username_x', 50)->nullable();
			$table->boolean('ml_kbn')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->string('xxx_kbn', 5)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_users');
	}

}
