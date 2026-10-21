<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTHasMeisaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_has_meisai', function(Blueprint $table)
		{
			$table->string('p_id', 12);
			$table->integer('p_no_seq');
			$table->string('dantai_cd', 11);
			$table->string('sof_id', 2);
			$table->integer('syk_suryo')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->integer('meisai_seq')->nullable();
			$table->primary(['p_id','p_no_seq','dantai_cd','sof_id'], 't_has_meisai_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_has_meisai');
	}

}
