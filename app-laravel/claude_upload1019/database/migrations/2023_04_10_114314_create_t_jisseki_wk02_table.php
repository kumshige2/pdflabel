<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJissekiWk02Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_jisseki_wk02', function(Blueprint $table)
		{
			$table->string('keijo_ym', 6);
			$table->string('bu_cd', 5);
			$table->string('bsy_cd', 5);
			$table->string('bsy_nm', 100)->nullable();
			$table->integer('a01_sum')->nullable();
			$table->integer('a02_sum')->nullable();
			$table->float('a03_sum', 10, 0)->nullable();
			$table->integer('a01_4093')->nullable();
			$table->integer('a02_4093')->nullable();
			$table->float('a03_4093', 10, 0)->nullable();
			$table->integer('a01_4096')->nullable();
			$table->integer('a02_4096')->nullable();
			$table->float('a03_4096', 10, 0)->nullable();
			$table->integer('a01_4114')->nullable();
			$table->integer('a02_4114')->nullable();
			$table->float('a03_4114', 10, 0)->nullable();
			$table->integer('a01_4120')->nullable();
			$table->integer('a02_4120')->nullable();
			$table->float('a03_4120', 10, 0)->nullable();
			$table->integer('a01_4116')->nullable();
			$table->integer('a02_4116')->nullable();
			$table->float('a03_4116', 10, 0)->nullable();
			$table->integer('a01_kos01')->nullable();
			$table->integer('a02_kos01')->nullable();
			$table->float('a03_kos01', 10, 0)->nullable();
			$table->integer('a01_4111')->nullable();
			$table->integer('a02_4111')->nullable();
			$table->float('a03_4111', 10, 0)->nullable();
			$table->integer('a01_zat01')->nullable();
			$table->integer('a02_zat01')->nullable();
			$table->float('a03_zat01', 10, 0)->nullable();
			$table->primary(['keijo_ym','bu_cd','bsy_cd'], 't_jisseki_wk02_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_jisseki_wk02');
	}

}
