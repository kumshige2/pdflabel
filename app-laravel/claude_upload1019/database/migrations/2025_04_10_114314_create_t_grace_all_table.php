<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGraceAllTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_grace_all', function(Blueprint $table)
		{
			$table->string('jukono')->primary('t_grace_all01_pkey');
			$table->string('jukonj')->nullable();
			$table->string('jukonk')->nullable();
			$table->string('syinno')->nullable();
			$table->string('dantai')->nullable();
			$table->string('crscd')->nullable();
			$table->string('crsnm')->nullable();
			$table->string('ucrsno')->nullable();
			$table->string('kaiymd')->nullable();
			$table->string('zaiymd')->nullable();
			$table->string('yutoymd')->nullable();
			$table->string('sjkb')->nullable();
			$table->string('yutokb')->nullable();
			$table->string('sjymd')->nullable();
			$table->string('saijkb')->nullable();
			$table->string('kyufkb')->nullable();
			$table->string('juryo')->nullable();
			$table->string('syzkno')->nullable();
			$table->string('syzknm')->nullable();
			$table->string('datacd')->nullable();
			$table->string('yobi01')->nullable();
			$table->string('yobi02')->nullable();
			$table->string('kmsu')->nullable();
			$table->string('skmsu')->nullable();
			$table->string('heikin')->nullable();
			$table->string('ukymd01')->nullable();
			$table->string('tensu01')->nullable();
			$table->string('kmskb01')->nullable();
			$table->string('ukymd02')->nullable();
			$table->string('tensu02')->nullable();
			$table->string('kmskb02')->nullable();
			$table->string('ukymd03')->nullable();
			$table->string('tensu03')->nullable();
			$table->string('kmskb03')->nullable();
			$table->string('ukymd04')->nullable();
			$table->string('tensu04')->nullable();
			$table->string('kmskb04')->nullable();
			$table->string('ukymd05')->nullable();
			$table->string('tensu05')->nullable();
			$table->string('kmskb05')->nullable();
			$table->string('ukymd06')->nullable();
			$table->string('tensu06')->nullable();
			$table->string('kmskb06')->nullable();
			$table->string('ukymd07')->nullable();
			$table->string('tensu07')->nullable();
			$table->string('kmskb07')->nullable();
			$table->string('ukymd08')->nullable();
			$table->string('tensu08')->nullable();
			$table->string('kmskb08')->nullable();
			$table->string('ukymd09')->nullable();
			$table->string('tensu09')->nullable();
			$table->string('kmskb09')->nullable();
			$table->string('ukymd10')->nullable();
			$table->string('tensu10')->nullable();
			$table->string('kmskb10')->nullable();
			$table->string('ukymd11')->nullable();
			$table->string('tensu11')->nullable();
			$table->string('kmskb11')->nullable();
			$table->string('ukymd12')->nullable();
			$table->string('tensu12')->nullable();
			$table->string('kmskb12')->nullable();
			$table->string('ukymd13')->nullable();
			$table->string('tensu13')->nullable();
			$table->string('kmskb13')->nullable();
			$table->string('ukymd14')->nullable();
			$table->string('tensu14')->nullable();
			$table->string('kmskb14')->nullable();
			$table->string('ukymd15')->nullable();
			$table->string('tensu15')->nullable();
			$table->string('kmskb15')->nullable();
			$table->string('ukymd16')->nullable();
			$table->string('tensu16')->nullable();
			$table->string('kmskb16')->nullable();
			$table->string('ukymd17')->nullable();
			$table->string('tensu17')->nullable();
			$table->string('kmskb17')->nullable();
			$table->string('ukymd18')->nullable();
			$table->string('tensu18')->nullable();
			$table->string('kmskb18')->nullable();
			$table->string('ukymd19')->nullable();
			$table->string('tensu19')->nullable();
			$table->string('kmskb19')->nullable();
			$table->string('ukymd20')->nullable();
			$table->string('tensu20')->nullable();
			$table->string('kmskb20')->nullable();
			$table->string('dantai_nm')->nullable();
			$table->string('kknrno')->nullable();
			$table->string('biko1')->nullable();
			$table->string('biko2')->nullable();
			$table->string('biko3')->nullable();
			$table->string('yobi11')->nullable();
			$table->string('yobi12')->nullable();
			$table->string('yobi13')->nullable();
			$table->string('yobi14')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_grace_all');
	}

}
