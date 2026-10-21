<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukSysDat01Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_sys_dat01', function(Blueprint $table)
		{
			$table->string('sofsaki_cd');
			$table->string('client_id');
			$table->string('kensyuname', 1024)->nullable();
			$table->string('key_dantai_cd');
			$table->string('dantai_nm', 1024)->nullable();
			$table->string('u_course_no', 1024)->nullable();
			$table->string('course_cd', 1024);
			$table->string('course_nm', 1024)->nullable();
			$table->integer('jukoryo')->nullable();
			$table->string('j_kamoku_su', 1024)->nullable();
			$table->string('saijuko_kb', 1024);
			$table->string('jokyo_kb', 1024)->nullable();
			$table->string('yushu_kb', 1024)->nullable();
			$table->string('kaiko_ymd');
			$table->string('zaiseki_ymd', 1024)->nullable();
			$table->string('heikinten', 1024)->nullable();
			$table->string('juko_no');
			$table->string('pr_shain_no', 1024)->nullable();
			$table->string('pr_jk_name', 1024)->nullable();
			$table->string('pr_jk_name_k', 1024)->nullable();
			$table->integer('ndo')->nullable();
			$table->string('upl_ymd', 1024)->nullable();
			$table->integer('seq')->nullable();
			$table->primary(['sofsaki_cd','client_id','key_dantai_cd','kaiko_ymd','saijuko_kb','course_cd','juko_no'], 't_juk_sys_dat01_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juk_sys_dat01');
	}

}
