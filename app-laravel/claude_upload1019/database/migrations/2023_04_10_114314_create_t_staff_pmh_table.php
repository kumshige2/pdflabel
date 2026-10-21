<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTStaffPmhTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_staff_pmh', function(Blueprint $table)
		{
			$table->string('term_id', 20)->primary('t_staff_pmh_pkey');
			$table->string('ip_adr', 20)->nullable();
			$table->string('ad_cd', 7)->nullable();
			$table->string('ad_nm', 75)->nullable();
			$table->string('bsy_cd2', 7)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_staff_pmh');
	}

}
