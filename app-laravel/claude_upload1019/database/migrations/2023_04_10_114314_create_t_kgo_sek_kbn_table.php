<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKgoSekKbnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_kgo_sek_kbn', function(Blueprint $table)
		{
			$table->string('kgo_sek_kbn', 1)->primary('t_kgo_sek_kbn_pkey');
			$table->string('kgo_sek', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_kgo_sek_kbn');
	}

}
