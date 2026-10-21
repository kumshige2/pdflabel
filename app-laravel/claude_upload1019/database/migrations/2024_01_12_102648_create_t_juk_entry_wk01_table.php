<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukEntryWk01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_entry_wk01', function(Blueprint $table)
		{
			$table->string('fld000')->nullable();
			$table->string('fld001')->nullable();
			$table->string('fld002')->nullable();
			$table->string('fld003')->nullable();
			$table->string('fld004')->nullable();
			$table->string('fld005')->nullable();
			$table->string('fld006')->nullable();
			$table->string('fld007')->nullable();
			$table->string('fld008')->nullable();
			$table->string('fld009')->nullable();
			$table->string('fld010')->nullable();
			$table->string('fld011')->nullable();
			$table->string('fld012')->nullable();
			$table->string('fld013')->nullable();
			$table->string('fld014')->nullable();
			$table->string('fld015')->nullable();
			$table->string('fld016')->nullable();
			$table->string('fld017')->nullable();
			$table->string('fld018')->nullable();
			$table->string('fld019')->nullable();
			$table->string('fld020')->nullable();
			$table->string('fld021')->nullable();
			$table->string('fld022')->nullable();
			$table->string('fld023')->nullable();
			$table->string('fld024')->nullable();
			$table->string('fld025')->nullable();
			$table->string('fld026')->nullable();
			$table->string('fld027')->nullable();
			$table->string('fld028')->nullable();
			$table->string('fld029')->nullable();
			$table->string('fld030')->nullable();
			$table->string('fld031')->nullable();
			$table->string('fld032')->nullable();
			$table->string('fld033')->nullable();
			$table->string('fld034')->nullable();
			$table->string('fld035')->nullable();
			$table->string('fld036')->nullable();
			$table->string('fld037')->nullable();
			$table->string('fld038')->nullable();
			$table->string('fld039')->nullable();
			$table->string('fld040')->nullable();
			$table->string('fld041')->nullable();
			$table->string('fld042')->nullable();
			$table->string('fld043')->nullable();
			$table->string('fld044')->nullable();
			$table->string('fld045')->nullable();
			$table->string('fld046')->nullable();
			$table->string('fld047')->nullable();
			$table->string('fld048')->nullable();
			$table->string('fld049')->nullable();
			$table->string('fld050')->nullable();
			$table->string('fld051')->nullable();
			$table->string('fld052')->nullable();
			$table->string('fld053')->nullable();
			$table->string('fld054')->nullable();
			$table->string('fld055')->nullable();
			$table->string('fld056')->nullable();
			$table->string('fld057')->nullable();
			$table->string('fld058')->nullable();
			$table->string('fld059')->nullable();
			$table->string('fld060')->nullable();
			$table->string('fld061')->nullable();
			$table->string('fld062')->nullable();
			$table->string('fld063')->nullable();
			$table->string('fld064')->nullable();
			$table->string('fld065')->nullable();
			$table->string('fld066')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juk_entry_wk01');
	}

}
