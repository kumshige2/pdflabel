<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWebPmhKbnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_web_pmh_kbn', function(Blueprint $table)
		{
			$table->string('web_pmh_kbn', 1)->primary('t_web_pmh_kbn_pkey');
			$table->string('web_pmh', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_web_pmh_kbn');
	}

}
