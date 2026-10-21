<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKokyakuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_kokyaku', function(Blueprint $table)
		{
			$table->string('kgo_a_cd', 10)->nullable();
			$table->string('kgo_nm_j')->nullable();
			$table->string('cnt_employee')->nullable();
			$table->string('types')->nullable();
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
		Schema::drop('t_kokyaku');
	}

}
