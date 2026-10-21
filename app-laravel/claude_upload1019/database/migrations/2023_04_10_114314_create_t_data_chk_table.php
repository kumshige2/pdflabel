<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDataChkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_data_chk', function(Blueprint $table)
		{
			$table->string('kgo_cd', 50);
			$table->string('p_id', 10);
			$table->string('p_nd', 5);
			$table->string('chk_nm')->nullable();
			$table->string('cre_ymd', 50)->nullable();
			$table->primary(['kgo_cd','p_id','p_nd'], 't_data_chk_pkey1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_data_chk');
	}

}
