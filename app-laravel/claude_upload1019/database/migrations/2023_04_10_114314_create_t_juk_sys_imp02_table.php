<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukSysImp02Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_sys_imp02', function(Blueprint $table)
		{
			$table->string('sofsaki_cd')->nullable();
			$table->string('client_id')->nullable();
			$table->string('kensyuname')->nullable();
			$table->string('key_dantai_cd')->nullable();
			$table->string('dantai_nm')->nullable();
			$table->string('u_course_no')->nullable();
			$table->string('course_cd')->nullable();
			$table->string('course_nm')->nullable();
			$table->string('jukoryo')->nullable();
			$table->string('j_kamoku_su')->nullable();
			$table->string('saijuko_kb')->nullable();
			$table->string('jokyo_kb')->nullable();
			$table->string('yushu_kb')->nullable();
			$table->string('kaiko_ymd')->nullable();
			$table->string('zaiseki_ymd')->nullable();
			$table->string('heikinten')->nullable();
			$table->string('juko_no')->nullable();
			$table->string('pr_shain_no')->nullable();
			$table->string('pr_jk_name')->nullable();
			$table->string('pr_jk_name_k')->nullable();
			$table->integer('ndo')->nullable();
			$table->integer('seq', true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juk_sys_imp02');
	}

}
