<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAdadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_adad', function(Blueprint $table)
		{
			$table->string('user_id', 10)->primary('t_adad_pkey');
			$table->string('ad_nm', 75)->nullable();
			$table->string('ad_nm_k', 75)->nullable();
			$table->string('bsy_cd', 10)->nullable();
			$table->string('bsy_cdw', 10)->nullable();
			$table->integer('ad_srt_key')->nullable();
			$table->string('employee_id', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_adad');
	}

}
