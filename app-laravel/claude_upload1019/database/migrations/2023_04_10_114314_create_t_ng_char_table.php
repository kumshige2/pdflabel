<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTNgCharTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_ng_char', function(Blueprint $table)
		{
			$table->integer('auto_id', true);
			$table->string('rep_bef')->nullable();
			$table->string('rep_aft')->nullable();
			$table->string('memos', 550)->nullable();
			$table->dateTime('cre_ymd')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_ng_char');
	}

}
