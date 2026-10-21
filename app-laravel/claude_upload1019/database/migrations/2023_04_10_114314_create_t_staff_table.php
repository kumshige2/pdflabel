<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_staff', function(Blueprint $table)
		{
			$table->char('staff_cd', 10)->primary('t_staff_pkey');
			$table->char('staff_kbn', 1)->nullable();
			$table->char('staff_nm_k', 50)->nullable();
			$table->char('staff_nm_j', 50)->nullable();
			$table->char('staff_section', 7)->nullable();
			$table->char('staff_email', 50)->nullable();
			$table->char('ext_phone', 10)->nullable();
			$table->char('user_id', 10)->nullable();
			$table->char('pass', 8)->nullable();
			$table->char('memo')->nullable();
			$table->boolean('adm_flg')->nullable();
			$table->char('upd_date', 10)->nullable();
			$table->char('inp_date', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_staff');
	}

}
