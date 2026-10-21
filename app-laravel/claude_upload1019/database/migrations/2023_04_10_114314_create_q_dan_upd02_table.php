<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQDanUpd02Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('q_dan_upd02', function(Blueprint $table)
		{
			$table->string('p_id', 5);
			$table->string('p_nd');
			$table->string('dantai_cd_knj')->nullable();
			$table->string('dantai_cd')->nullable();
			$table->primary(['p_id','p_nd'], 'q_dan_upd02_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('q_dan_upd02');
	}

}
