<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukKeiKbnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_kei_kbn', function(Blueprint $table)
		{
			$table->string('juk_kei_id', 5)->primary('t_juk_kei_kbn_pkey');
			$table->string('juk_kei_nm')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juk_kei_kbn');
	}

}
