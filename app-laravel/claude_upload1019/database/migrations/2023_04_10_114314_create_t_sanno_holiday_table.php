<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSannoHolidayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_sanno_holiday', function(Blueprint $table)
		{
			$table->char('keys', 2)->primary('t_sanno_holiday_pkey');
			$table->date('dates')->nullable();
			$table->char('memos', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_sanno_holiday');
	}

}
