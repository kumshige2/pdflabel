<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJukSysUid00Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_juk_sys_uid00', function(Blueprint $table)
		{
			$table->string('uid')->primary('t_juk_sys_uid00_pkey');
			$table->string('name1')->nullable();
			$table->string('ids')->nullable();
			$table->string('mail_adr')->nullable();
			$table->string('home_page')->nullable();
			$table->string('avator')->nullable();
			$table->dateTime('cre_ymd')->nullable();
			$table->string('syzno')->nullable();
			$table->string('adrx')->nullable();
			$table->string('signs')->nullable();
			$table->string('filler1')->nullable();
			$table->string('actkey')->nullable();
			$table->string('aim')->nullable();
			$table->string('yim')->nullable();
			$table->string('windows_id')->nullable();
			$table->string('pass')->nullable();
			$table->string('post_item')->nullable();
			$table->string('filler2')->nullable();
			$table->string('rank')->nullable();
			$table->string('levels')->nullable();
			$table->string('theme')->nullable();
			$table->string('timezones')->nullable();
			$table->string('last_login_ymd')->nullable();
			$table->string('comment_mode')->nullable();
			$table->string('comment_sort')->nullable();
			$table->string('alarm')->nullable();
			$table->string('alarm_ymd')->nullable();
			$table->string('svc_id')->nullable();
			$table->string('alarm_memo')->nullable();
			$table->string('hobby')->nullable();
			$table->string('inf_mail')->nullable();
			$table->dateTime('upd_ymd')->nullable();
			$table->string('user_kbn')->nullable();
			$table->string('client_id')->nullable();
			$table->string('dan_cd')->nullable();
			$table->string('kgo_nm_jsf')->nullable();
			$table->string('kgo_nm_k')->nullable();
			$table->string('jgo_nm')->nullable();
			$table->string('jgo_nm_k')->nullable();
			$table->string('yubin')->nullable();
			$table->string('adr')->nullable();
			$table->string('name2')->nullable();
			$table->string('name_k')->nullable();
			$table->string('bsy_nm')->nullable();
			$table->string('positions')->nullable();
			$table->string('tel')->nullable();
			$table->string('fax')->nullable();
			$table->string('pass_ymd')->nullable();
			$table->string('pass_limit_ymd')->nullable();
			$table->string('old_pass')->nullable();
			$table->string('kgo_a_cd')->nullable();
			$table->string('kgo_nm')->nullable();
			$table->string('dup_kbn')->nullable();
			$table->string('tnto')->nullable();
			$table->string('fld01')->nullable();
			$table->string('kaiko_memo', 1000)->nullable();
			$table->string('std')->nullable();
			$table->string('fld02')->nullable();
			$table->string('fld03')->nullable();
			$table->string('pro_ymd')->nullable();
			$table->string('pnd_kbn')->nullable();
			$table->date('trm_ymd')->nullable();
			$table->string('trm_kbn')->nullable();
			$table->string('memos', 9000)->nullable();
			$table->string('access_id')->nullable();
			$table->string('fld05')->nullable();
			$table->string('fld06')->nullable();
			$table->string('fld07')->nullable();
			$table->string('fld08')->nullable();
			$table->string('fld09')->nullable();
			$table->string('fld10')->nullable();
			$table->integer('seq')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_juk_sys_uid00');
	}

}
