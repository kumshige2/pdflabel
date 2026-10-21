<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPmhTypeKbnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_pmh_type_kbn', function(Blueprint $table)
		{
			$table->string('pmh_type', 2)->primary('t_pmh_type_kbn_pkey');
			$table->string('pmh_type_nm', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_pmh_type_kbn');
	}

}
