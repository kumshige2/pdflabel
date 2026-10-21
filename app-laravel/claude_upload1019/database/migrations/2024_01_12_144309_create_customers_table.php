<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('client_id');
			$table->string('country')->nullable();
			$table->string('postcode')->nullable();
			$table->string('prefecture')->nullable();
			$table->string('city')->nullable();
			$table->string('ward')->nullable();
			$table->string('streetAddress')->nullable();
			$table->string('secondaryAddress')->nullable();
			$table->string('company')->nullable();
			$table->string('userName')->nullable();
			$table->string('domainName')->nullable();
			$table->string('email')->nullable();
			$table->string('lastName')->nullable();
			$table->string('firstName')->nullable();
			$table->string('lastKanaName')->nullable();
			$table->string('firstKanaName')->nullable();
			$table->string('phoneNumber')->nullable();
			$table->string('realText')->nullable();
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
		Schema::drop('customers');
	}

}
