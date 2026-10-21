<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSekNgKbnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_sek_ng_kbn', function(Blueprint $table)
		{
			$table->string('sek_ng_kbn', 1)->primary('t_sek_ng_kbn_pkey');
			$table->string('sek_ng', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_sek_ng_kbn');
	}

}
