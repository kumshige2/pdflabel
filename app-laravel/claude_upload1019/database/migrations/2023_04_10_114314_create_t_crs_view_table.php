<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCrsViewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_crs_view', function(Blueprint $table)
		{
			$table->string('types')->nullable();
			$table->string('subtytle')->nullable();
			$table->integer('seq')->nullable();
			$table->string('crs_cd', 7)->primary('t_crs_view_pkey');
			$table->string('renewal')->nullable();
			$table->string('crsnm')->nullable();
			$table->string('saij', 100)->nullable();
			$table->string('juk_term')->nullable();
			$table->string('zai_term')->nullable();
			$table->integer('ex_fee')->nullable();
			$table->integer('fee')->nullable();
			$table->integer('pages')->nullable();
			$table->string('rep_type')->nullable();
			$table->string('crsnm_flg')->nullable();
			$table->string('zai_flg', 7)->nullable();
			$table->string('good_job')->nullable();
			$table->string('kaiymd_limit')->nullable();
			$table->string('noob', 7)->nullable();
			$table->string('beginner', 7)->nullable();
			$table->string('normal', 7)->nullable();
			$table->string('expert', 7)->nullable();
			$table->string('crs_point')->nullable();
			$table->string('dantai')->nullable();
			$table->string('kyufu', 7)->nullable();
			$table->string('url')->nullable();
			$table->integer('crsno_last')->nullable();
			$table->string('zai_limit')->nullable();
			$table->string('memo')->nullable();
			$table->string('ndo', 7)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_crs_view');
	}

}
