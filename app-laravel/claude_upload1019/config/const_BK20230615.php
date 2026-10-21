<?php

/**
 * 設定ファイル
 */
return [
  'DBTYPE' =>  'mysql',
  'DBUSER' =>  'kumkum_shi',
  'DBSERVER' =>  'localhost',
  'DBPASSWORD' =>  'REDACTED_DB_PASSWORD',
  'DBNAME' =>  'pamphlet',
  'DBTYPE_PQ' =>  'postgresql',
  // 'DBSERVER_PQ_X1' =>  '172.16.58.66',
  'DBSERVER_PQ_X1' =>  '172.16.58.224',
  'DBSERVER_PQ' =>  '172.16.58.224',

  'DBUSER_PQ' =>  'postgres',
  'DBPASSWORD_PQ' =>  'REDACTED_DB_PASSWORD',
  'DBNAME_PQ' =>  'pamphlet',
  'DBNAME_TEST_PQ' =>  'snno3_test',
  'DBNAME_PQ_SQ' =>  'sanq',
  'DBNAME_TEST_PQ_SQ' =>  'sanq_test',
  'DBPORT_PQ' =>  5432,
  'DSN_PQ_X1' => 'pgsql:dbname=pamphlet host=172.16.58.224 port=5432',
  'DSN_TEST_PQ_X1' => 'pgsql:dbname=snno3_test host=172.16.58.224 port=5432',
  'DSN_PQ' => 'pgsql:dbname=pamphlet host=172.16.58.224 port=5432',
  'DSN_TEST_PQ' => 'pgsql:dbname=snno3_test host=172.16.58.224 port=5432',
  'GEO_API01' => 'REDACTED_GEO_API_KEY',

  // ENCODING  暗号化ソルト値
  'SECURITY_SALT' =>  'xxxxx',
  'CRYPTTYPE' =>  'sha256',
  'DB_ENCODING' =>  'utf8mb4',

  // Twitterアクセスで必要な値
  'TW_CONSUMER_KEY' =>  'Twitterアプリ登録時の「Consumer Key」', // ここを編集
  'TW_CONSUMER_SECRET' =>  'Twitterアプリ登録時の「Consumer Secret」', // ここを編集
  'TW_GETREQUESTTOKEN_URL' =>  'http://api.twitter.com/oauth/request_token',
  'TW_AUTHORIZE_URL' =>  'http://twitter.com/oauth/authorize',
  'TW_GETACCESSTOKEN_URL' =>  'http://twitter.com/oauth/access_token',
  'TW_REDIRECT_URL' =>  'http://127.0.0.1/samples/chap7/Address/index.php',
  'TW_REQUEST_TOKEN' =>  'tw_request_token',
  'TW_REQUEST_TOKEN_SECRET' =>  'tw_request_token_secret',
  'TW_ACCESS_TOKEN' =>  'tw_access_token',
  'TW_ACCESS_TOKEN_SECRET' =>  'tw_access_token_secret',
  'TW_OAUTH_VERIFIER' =>  'oauth_verifier',

  // Facebookアクセスで必要な値
  'FB_APP_ID' =>  'Facebookアプリ登録時の「App ID」', // ここを編集
  'FB_APP_SECRET' =>  'Facebookアプリ登録時の「App Secret」', // ここを編集

  // ディレクトリパス
  'LIBPATH' =>  './userlib/',
  'MODULEPATH' =>  './pagemodule/',
  'TEMPLATESPATH' =>  './template/',
  'COMPILEPATH' =>  './template/compile/',
  'EXCEL_PMH_DATA01' =>  'out/pmh_data',

  // 戻り値判定
  'RESFLAG' =>  0,
  'RESDATA' =>  1,

  // $_SESSIONのキー
  // 'USER_ID' =>  'user_id',

  // モジュール名
  'DEFAULT_MODULE' =>  'addlist',
  'ADDDETAIL' =>  'adddetail',
  'LOGIN' =>  'login',
  'LOGINTIME' =>  'LOGINTIME',
  'USERSET' =>  'user_setting',
  'ADDSET' =>  'address_setting',
  'ADDSEARCH' =>  'search',
  'RESET' =>  'reset',
  'EXCEL01' =>  'excel_out01',
  'GANT_PMH1' =>  'gant_pmh01',
  'ORD_SCHE01' =>  'order_sche01',
  'DASHBOARD' =>  'dashboard01',
  'DATATABLE' =>  'datatable01',
  'CHARTJS' =>  'chartjs01',
  'SYAINCSL160_01' => "out/tachi_syain_csl" . date('Ymd') . ".txt",
  'SYAINCSL160_02' => "out/tachi_syain_csl_test" . date('Ymd') . ".txt",
  'SYAINJUK160_01' => "out/tachi_syain_juk" . date('Ymd') . ".txt",
  'SYAINCSL234_01' => "out/suntory_syain_csl" . date('Ymd') . ".txt",
  'SYAINCSL234_02' => "out/suntory_syain_csl_test" . date('Ymd') . ".txt",
  'SYAINJUK234_01' => "out/suntory_syain_juk" . date('Ymd') . ".txt",

  // Data 仕様書
  'GUIDE_TEMP01' =>  'template/Data_guide_temp02.html',

  // オプションのキー
  'ID' =>  'id',
  'MODULE' =>  'module',
  'ACCESSID' =>  'access_id',
  'CLIENTID' =>  'client_id',
  'CLIENTNM' =>  'kgo_nm',
  'SYAINDUM' =>  't_syain_sun_dummy',
  // client_id
  'SUNTORY_ID' =>  '234',
  'TOPPAN_ID' =>  '32',
  'MIZUHO_ID' =>  '37',
  'IDEMITSU_ID' =>  '197',
  'SUNTORY_SYAIN_LAYOUT' => 'アクセスＩＤ,社員番号,誕生月日,部署コード,部署名,受験資格（現資格）,社員マスタ自由項目２,社員マスタ自由項目３,社員マスタ自由項目４,社員マスタ自由項目５,管理対象外区分,会社コード',
  'SUNTORY_SYAIN_LAYOUT_ITEM' => 12,
  'SUNTORY_Q00_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE a.access_id is NUll or a.access_id = '' or a.access_id <> 'suntory2' ",
  'SUNTORY_Q01_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE a.syainno is NUll or a.syainno ='' or a.syainno ='000000'",
  'SUNTORY_Q01_01_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE a.syainno !~*'^[0-9a-zA-Z]*$'",
  'SUNTORY_Q01_02_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE length(a.syainno) <> 6 ",
  'SUNTORY_Q01_04_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE a.syainno IN (SELECT syainno FROM t_syain_sun_wk01 GROUP BY syainno HAVING count(syainno) > 1)",
  'SUNTORY_Q02_01_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE  a.birth_md !~*'^(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01])$'",
  'SUNTORY_Q02_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE a.birth_md is NUll or a.birth_md = ''",
  //
  'SUNTORY_Q05_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE a.grade is NUll or a.grade = '' ",
  'SUNTORY_Q05_01_SQL' => "select a.* from t_syain_sun_wk01 as a left join t_syain_sun_lic01 as b on a.grade = b.license     where b.license is null ",
  'SUNTORY_Q06_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE  a.bsy_nm is NULL or a.bsy_nm =''",
  'SUNTORY_Q11_SQL' => "SELECT a.* FROM t_syain_sun_wk01 as a WHERE a.company_id  is NUll or a.company_id =''",
  'SUNTORY_Q11_01_SQL' =>  "SELECT a.* FROM t_syain_sun_wk01 as a WHERE  a.company_id <> '1' and a.company_id <> '2'",
  //
  'SUNTORY_L00_01_SQL' => "select * from t_syain_sun_lic01 where client_id  <> '234' ",
  'SUNTORY_L01_SQL' => "select * from t_syain_sun_lic01 where license is null or license ='' ",
  'SUNTORY_L02_SQL' => "select * from t_syain_sun_lic01 where license_cnv is null or license_cnv  ='' ",
  'SUNTORY_L01_01_SQL' => "select  *  from t_syain_sun_lic01 where license  !~* '[^\r\n\t\x20-\x7f]+'",
  'SUNTORY_L02_01_SQL' => "select  *  from t_syain_sun_lic01 where license_cnv  !~* '[^\r\n\t\x20-\x7f]+'",
  'SANQ_V11' => '',
  'SANQ_Q001_SQL' => "SELECT
  v11.ID,
  v11.shori_kbn,
  v11.syain_syainno,
  v11.syain_syain_nm_j,
  v11.name_j,
  v11.syain_syzkcd,
  v11.syain_syzknm,
  v11.syk_kgocd,
  v11.syk_kgonm,
  v11.sek_f,
  v11.sei,
  v11.krn_kgocd,
  v11.krn_kgonm,
  v11.juk_crs_no,
  v11.crsnj,
  v11.juryo,
  v11.judge_sanq_key,
  v11.judge_sanq_nm,
  v11.sai,
  v11.tai_ymd,
  v11.sai_jukno,
v11.aaa,   
v11.cancel_kbn,
  v11.tai_ymd,   
  v11.birthday
FROM
  v_juko_sanq01s_11 as v11 
WHERE
  v11.sai=True AND v11.sai_flg Like '%不可%'",
  'SANQ_Q020_SQL' => "SELECT
v11.ID,
v11.shori_kbn,
v11.syain_syainno,
v11.syain_syain_nm_j,
v11.name_j,
v11.syain_syzkcd,
v11.syain_syzknm,
v11.syk_kgocd,
v11.syk_kgonm,
v11.sek_f,
v11.sei,
v11.krn_kgocd,
v11.krn_kgonm,
v11.crscd,
v11.juk_crs_no,
v11.crsnj,
v11.juryo,
v11.judge_sanq_key,
v11.judge_sanq_nm,
v11.sai,
v11.sai_jukno,
v11.aaa,
v11.cancel_kbn,
v11.tai_ymd,
v11.birthday,
v11.syain_birthday
FROM
v_juko_sanq01s_11 as v11
WHERE
v11.crsnj Is Null",
  'SANQ_Q030_SQL' => "SELECT
v11.ID,
v11.shori_kbn,
v11.syain_syainno,
v11.syain_syain_nm_j,
v11.name_j,
v11.syain_syzkcd,
v11.syain_syzknm,
v11.syk_kgocd,
v11.syk_kgonm,
v11.sek_f,
v11.sei,
v11.krn_kgocd,
v11.krn_kgonm,
v11.crscd,
v11.juk_crs_no,
v11.crsnj,
v11.juryo,
v11.judge_sanq_key,
v11.judge_sanq_nm,
v11.sai,
v11.sai_jukno,
v11.aaa,
v11.cancel_kbn,
v11.tai_ymd,
v11.birthday,
v11.syain_birthday
FROM
v_juko_sanq01s_11 as v11
WHERE
v11.crsnj Is Null",
  'SANQ_Q040_SQL' => "SELECT
    v11.ID,
    v11.shori_kbn,
    v11.syain_syainno,
    v11.syain_syain_nm_j,
    v11.name_j,
    v11.syain_syzkcd,
    v11.syain_syzknm,
    v11.syk_kgocd,
    v11.syk_kgonm,
    v11.sek_f,
    v11.sei,
    v11.krn_kgocd,
    v11.krn_kgonm,
    v11.crscd,
    v11.juk_crs_no,
    v11.crsnj,
    v11.juryo,
    v11.judge_sanq_key,
    v11.judge_sanq_nm,
    v11.sai,
    v11.sai_jukno,
    v11.aaa,
    v11.cancel_kbn,
    v11.tai_ymd,
    v11.birthday
FROM     v_juko_sanq01s_11 as v11 
WHERE
    v11.syain_syainno Is Null AND v11.juk_syzkcd=''",
  'SANQ_Q050_SQL' => "SELECT
    v11.ID,
    v11.shori_kbn,
    v11.syain_syainno,
    v11.syain_syain_nm_j,
    v11.name_j,
    v11.syain_syzkcd,
    v11.syain_syzknm,
    v11.syk_kgocd,
    v11.syk_kgonm,
    v11.sek_f,
    v11.sei,
    v11.krn_kgocd,
    v11.krn_kgonm,
    v11.crscd,
    v11.juk_crs_no,
    v11.crsnj,
    v11.juryo,
    v11.judge_sanq_key,
    v11.judge_sanq_nm,
    v11.sai,
    v11.sai_jukno,
    v11.aaa,
    v11.cancel_kbn,
    v11.tai_ymd,
    v11.birthday
FROM     v_juko_sanq01s_11 as v11 
WHERE
    v11.shori_kbn='0'",
  'SANQ_Q060_SQL' => "SELECT
  v10.ID,
  v10.shori_kbn,
  v10.syain_syainno,
  v10.syain_syain_nm_j,
  v10.name_j,
  v10.syain_syzkcd,
  v10.syain_syzknm,
  v10.syk_kgocd,
  v10.syk_kgonm,
  v10.sek_f,
  v10.sei,
  v10.krn_kgocd,
  v10.krn_kgonm,
  v10.crscd,
  v10.juk_crs_no,
  v10.crsnj,
  v10.juryo,
  v10.judge_sanq_key,
  v10.judge_sanq_nm,
  v10.sai,
  v10.sai_jukno,
  v10.aaa,
  v10.cancel_kbn,
  v10.tai_ymd,
  v10.birthday,
  v10.updated_at 
FROM     v_juko_sanq01s_10 as v10 
WHERE v10.cancel_kbn=1",
  'SANQ_Q070_SQL' => "SELECT
v11.ID,
v11.shori_kbn,
v11.syain_syainno,
v11.syain_syain_nm_j,
v11.name_j,
v11.syain_syzkcd,
v11.syain_syzknm,
v11.syk_kgocd,
v11.syk_kgonm,
v11.sek_f,
v11.sei,
v11.krn_kgocd,
v11.krn_kgonm,
v11.crscd,
v11.juk_crs_no,
v11.crsnj,
v11.juryo,
v11.judge_sanq_key,
v11.judge_sanq_nm,
v11.sai,
v11.sai_jukno,
v11.aaa,
v11.cancel_kbn,
v11.tai_ymd,
v11.birthday
FROM
v_juko_sanq01s_11 as v11
WHERE
(v11.syain_syainno Is Not Null AND v11.judge_sanq_key='11') OR
(v11.syain_syainno Is Not Null AND v11.judge_sanq_key='12')",
  'SANQ_Q080_SQL' => "SELECT
v11.ID,
v11.shori_kbn,
v11.syain_syainno,
v11.syain_syain_nm_j,
v11.name_j,
v11.syain_syzkcd,
v11.syain_syzknm,
v11.syk_kgocd,
v11.syk_kgonm,
v11.sek_f,
v11.sei,
v11.krn_kgocd,
v11.krn_kgonm,
v11.crscd,
v11.juk_crs_no,
v11.crsnj,
v11.juryo,
v11.judge_sanq_key,
v11.judge_sanq_nm,
v11.sai,
v11.sai_jukno,
v11.aaa,
v11.cancel_kbn,
v11.tai_ymd,
v11.birthday
FROM
v_juko_sanq01s_11 as v11
WHERE
v11.sek_f= '4'",
  'SANQ_Q090_SQL' => "SELECT
 v11.ID,
 v11.shori_kbn,
 v11.syain_syainno,
 v11.syain_syain_nm_j,
 v11.name_j,
 v11.syain_syzkcd,
 v11.syain_syzknm,
 v11.syk_kgocd,
 v11.syk_kgonm,
 v11.sek_f,
 v11.sei,
 v11.krn_kgocd,
 v11.krn_kgonm,
 v11.crscd,
 v11.juk_crs_no,
 v11.crsnj,
 v11.juryo,
 v11.judge_sanq_key,
 v11.judge_sanq_nm,
 v11.sai,
 v11.sai_jukno,
 v11.aaa,
 v11.cancel_kbn,
 v11.tai_ymd,
 v11.birthday,
 substr(v11.syain_birthday,6,2) || Right(v11.syain_birthday,2) AS syain_birth
 FROM
 v_juko_sanq01s_11 as v11
 WHERE
 (substr(v11.syain_birthday,6,2) || right(v11.syain_birthday,2)<>v11.birthday AND Length(v11.syain_syzkcd)=12)
or
(substr(v11.syain_birthday,6,2) || right(v11.syain_birthday,2)<>v11.birthday AND Length(v11.syain_syzkcd)=8)",
  'SANQ_Q041_SQL' => "SELECT
 v11.ID,
 v11.shori_kbn,
 v11.syain_syainno,
 v11.syain_syain_nm_j,
 v11.name_j,
 v11.syain_syzkcd,
 v11.syain_syzknm,
 v11.syk_kgocd,
 v11.syk_kgonm,
 v11.sek_f,
 v11.sei,
 v11.krn_kgocd,
 v11.krn_kgonm,
 v11.crscd,
 v11.juk_crs_no,
 v11.crsnj,
 v11.juryo,
 v11.judge_sanq_key,
 v11.judge_sanq_nm,
 v11.sai,
 v11.sai_jukno,
 v11.aaa,
 v11.cancel_kbn,
 v11.tai_ymd,
 v11.birthday
 FROM
 v_juko_sanq01s_11 as v11
 WHERE
 replace(replace(v11.syain_syain_nm_j,'　',''),' ','') <>replace(replace(v11.name_j,'　',''),' ','') and 
v11.cancel_kbn=0 AND
    v11.syain_syainno Is Not Null AND
    v11.birthday Is Not Null",
  'SANQ_Q100_SQL' => "SELECT
 v11.ID,
 v11.shori_kbn,
 v11.syain_syainno,
 v11.syain_syain_nm_j,
 v11.name_j,
 v11.syain_syzkcd,
 v11.syain_syzknm,
 v11.syk_kgocd,
 v11.syk_kgonm,
 v11.sek_f,
 v11.sei,
 v11.krn_kgocd,
 v11.krn_kgonm,
 v11.crscd,
 v11.juk_crs_no,
 v11.crsnj,
 v11.juryo,
 v11.judge_sanq_key,
 v11.judge_sanq_nm,
 v11.sai,
 v11.sai_jukno,
 v11.aaa,
 v11.cancel_kbn,
 v11.tai_ymd,
 v11.birthday
 from v_juko_sanq01s_11 as v11 left join t_juko_sanq01s as j on v11.id =j.id 
where j.addr1 is null",
  'SANQ_Q500_SQL' => "SELECT
  v11.ID,
  v11.shori_kbn,
  v11.syain_syainno,
  v11.syain_syain_nm_j,
  v11.name_j,
  v11.syain_syzkcd,
  v11.syain_syzknm,
  v11.syk_kgocd,
  v11.syk_kgonm,
  v11.sek_f,
  v11.sei,
  v11.krn_kgocd,
  v11.krn_kgonm,
  v11.crscd,
  v11.juk_crs_no,
  v11.crsnj,
  v11.juryo,
  v11.judge_sanq_key,
  v11.judge_sanq_nm,
  v11.sai,
  v11.sai_jukno,
  v11.aaa,
  v11.cancel_kbn,
  v11.tai_ymd,
  v11.birthday
FROM
  v_juko_sanq01s_11  as v11   inner  JOIN (SELECT
    syainno,
    name_j,
    birthday,
    kaiymd,
    juk_crs_no ,
    count(juk_crs_no) as ss
FROM
    t_juko_sanq01s
GROUP BY
  syainno,    
name_j,
    birthday,
    kaiymd,
    juk_crs_no
HAVING
    count(juk_crs_no)  > 1 and syainno is not  null and  syainno <> '')   as dd ON v11.syain_syainno = dd.syainno and v11.name_j = dd.name_j and v11.birthday = dd.birthday 
                                          and v11.kaiymd = dd.kaiymd and v11.juk_crs_no = dd.juk_crs_no",
  'SANQ_Q501_SQL' => "SELECT
v11.ID,
v11.shori_kbn,
v11.syain_syainno,
v11.syain_syain_nm_j,
v11.name_j,
v11.syain_syzkcd,
v11.syain_syzknm,
v11.syk_kgocd,
v11.syk_kgonm,
v11.sek_f,
v11.sei,
v11.krn_kgocd,
v11.krn_kgonm,
v11.crscd,
v11.juk_crs_no,
v11.crsnj,
v11.juryo,
v11.judge_sanq_key,
v11.judge_sanq_nm,
v11.sai,
v11.sai_jukno,
v11.aaa,
v11.cancel_kbn,
v11.tai_ymd,
v11.birthday
FROM
v_juko_sanq01s_11  as v11   inner  JOIN (SELECT
                                            name_j,
                                            birthday,
                                            kaiymd,
                                            juk_crs_no ,
                                            count(juk_crs_no) as ss
                                        FROM
                                            t_juko_sanq01s
                                        GROUP BY
                                            name_j,
                                            birthday,
                                            kaiymd,
                                            juk_crs_no
                                        HAVING
                                            count(juk_crs_no)  > 1
                                        )   as dd ON v11.name_j = dd.name_j and v11.birthday = dd.birthday 
                                        and v11.kaiymd = dd.kaiymd and v11.juk_crs_no = dd.juk_crs_no",
  'SANQ_Q510_SQL' => "SELECT
v11.ID,
v11.shori_kbn,
v11.syain_syainno,
v11.syain_syain_nm_j,
v11.name_j,
v11.syain_syzkcd,
v11.syain_syzknm,
v11.syk_kgocd,
v11.syk_kgonm,
v11.sek_f,
v11.sei,
v11.krn_kgocd,
v11.krn_kgonm,
v11.crscd,
v11.juk_crs_no,
v11.crsnj,
v11.juryo,
v11.judge_sanq_key,
v11.judge_sanq_nm,
v11.sai,
v11.sai_jukno,
v11.aaa,
v11.cancel_kbn,
v11.tai_ymd,
v11.birthday,
s.cyuzai_kbn
from v_juko_sanq01s_11 as v11 
left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno 
WHERE v11.cyuzai_kbn='2'
ORDER BY v11.cyuzai_kbn DESC , v11.ID",
  'SANQ_Q520_SQL' => "SELECT
 v11.ID,
 v11.shori_kbn,
 v11.syain_syainno,
 v11.syain_syain_nm_j,
 v11.name_j,
 v11.syain_syzkcd,
 v11.syain_syzknm,
 v11.syk_kgocd,
 v11.syk_kgonm,
 v11.sek_f,
 v11.sei,
 v11.krn_kgocd,
 v11.krn_kgonm,
 v11.crscd,
 v11.juk_crs_no,
 v11.crsnj,
 v11.juryo,
 v11.judge_sanq_key,
 v11.judge_sanq_nm,
 v11.sai,
 v11.sai_jukno,
 v11.aaa,
 v11.cancel_kbn,
 v11.tai_ymd,
 v11.birthday,
 s.cyuzai_kbn
 from v_juko_sanq01s_11 as v11 
 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno 
 WHERE v11.sai=true
 ORDER BY v11.id",
  'SANQ_Q530_SQL' => "SELECT
  v11.ID,
  v11.shori_kbn,
  v11.syain_syainno,
  v11.syain_syain_nm_j,
  v11.name_j,
  v11.syain_syzkcd,
  v11.syain_syzknm,
  v11.syk_kgocd,
  v11.syk_kgonm,
  v11.sek_f,
  v11.sei,
  v11.krn_kgocd,
  v11.krn_kgonm,
  v11.crscd,
  v11.juk_crs_no,
  v11.crsnj,
  v11.juryo,
  v11.judge_sanq_key,
  v11.judge_sanq_nm,
  v11.sai,
  v11.sai_jukno,
  v11.aaa,
  v11.cancel_kbn,
  v11.tai_ymd,
  v11.birthday,
  s.cyuzai_kbn
  from v_juko_sanq01s_11 as v11 
  left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno 
  WHERE (v11.syk_kgocd Between '0300' And '0399') OR (v11.cyuzai_kbn='2')
  ORDER BY v11.id",
  'SANQ_Q540_SQL' => "SELECT
  v11.ID,
  v11.shori_kbn,
  v11.syain_syainno,
  v11.syain_syain_nm_j,
  v11.name_j,
  v11.syain_syzkcd,
  v11.syain_syzknm,
  v11.syk_kgocd,
  v11.syk_kgonm,
  v11.sek_f,
  v11.sei,
  v11.krn_kgocd,
  v11.krn_kgonm,
  v11.crscd,
  v11.juk_crs_no,
  v11.crsnj,
  v11.juryo,
  v11.judge_sanq_key,
  v11.judge_sanq_nm,
  v11.sai,
  v11.sai_jukno,
  v11.aaa,
  v11.cancel_kbn,
  v11.tai_ymd,
  v11.birthday,
  s.cyuzai_kbn
  from v_juko_sanq01s_11 as v11 
  left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno 
  WHERE v11.syain_syainno is not null and v11.syain_syainno <> ''
  ORDER BY v11.id",
  'SANQ_Q541_SQL' => "SELECT
v11.ID,
v11.shori_kbn,
v11.syain_syainno,
v11.syain_syain_nm_j,
v11.name_j,
v11.syain_syzkcd,
v11.syain_syzknm,
v11.syk_kgocd,
v11.syk_kgonm,
v11.sek_f,
v11.sei,
v11.krn_kgocd,
v11.krn_kgonm,
v11.crscd,
v11.juk_crs_no,
v11.crsnj,
v11.juryo,
v11.judge_sanq_key,
v11.judge_sanq_nm,
v11.sai,
v11.sai_jukno,
v11.aaa,
v11.cancel_kbn,
v11.tai_ymd,
v11.birthday,
s.cyuzai_kbn
from v_juko_sanq01s_11 as v11 
left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno 
WHERE v11.tai_ymd is not null or v11.tai_ymd <> ''
ORDER BY v11.id",
  'SANQ_Q542_SQL' => "SELECT
 v11.ID,
 v11.shori_kbn,
 v11.syain_syainno,
 v11.syain_syain_nm_j,
 v11.name_j,
 v11.syain_syzkcd,
 v11.syain_syzknm,
 v11.syk_kgocd,
 v11.syk_kgonm,
 v11.sek_f,
 v11.sei,
 v11.krn_kgocd,
 v11.krn_kgonm,
 v11.crscd,
 v11.juk_crs_no,
 v11.crsnj,
 v11.juryo,
 v11.judge_sanq_key,
 v11.judge_sanq_nm,
 v11.sai,
 v11.sai_jukno,
 v11.aaa,
 v11.cancel_kbn,
 v11.tai_ymd,
 v11.birthday,
 s.cyuzai_kbn,
 s.nyusya_ymd,
 s.saiyo_kbn
 from v_juko_sanq01s_11 as v11 
 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno 
 WHERE s.nyusya_ymd=? ||'/04/01' AND s.saiyo_kbn='1'
 ORDER BY v11.id",
  'SANQ_Q543_SQL' => "SELECT
  v11.ID,
  v11.shori_kbn,
  v11.syain_syainno,
  v11.syain_syain_nm_j,
  v11.name_j,
  v11.syain_syzkcd,
  v11.syain_syzknm,
  v11.syk_kgocd,
  v11.syk_kgonm,
  v11.sek_f,
  v11.sei,
  v11.krn_kgocd,
  v11.krn_kgonm,
  v11.crscd,
  v11.juk_crs_no,
  v11.crsnj,
  v11.juryo,
  v11.judge_sanq_key,
  v11.judge_sanq_nm,
  v11.sai,
  v11.sai_jukno,
  v11.aaa,
  v11.cancel_kbn,
  v11.tai_ymd,
  v11.birthday  
  from v_juko_sanq01s_11 as v11 
  left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno 
  WHERE v11.judge_sanq_key='3'
  ORDER BY v11.id",
  'SANQ_Q570_SQL' => "SELECT
  v11.ID,
  v11.shori_kbn,
  v11.syain_syainno,
  v11.syain_syain_nm_j,
  v11.name_j,
  v11.syain_syzkcd,
  v11.syain_syzknm,
  v11.syk_kgocd,
  v11.syk_kgonm,
  v11.sek_f,
  v11.sei,
  v11.krn_kgocd,
  v11.krn_kgonm,
  v11.crscd,
  v11.juk_crs_no,
  v11.crsnj,
  v11.juryo,
  v11.judge_sanq_key,
  v11.judge_sanq_nm,
  v11.sai,
  v11.sai_jukno,
  v11.aaa,
  v11.cancel_kbn,
  v11.tai_ymd,
  v11.birthday  
  from v_juko_sanq01s_11 as v11 
  left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno 
  WHERE v11.juk_syzkcd='9999'
  ORDER BY v11.id",


  // $_POSTのキー
  //
  //
  'SUNTORY_D00_SQL' => "select * from t_syain_sun_dummy_wk01 where access_id  <> 'suntory2' ",
  'SUNTORY_D01_SQL' => "SELECT * FROM t_syain_sun_dummy_wk01 WHERE ( syainno not between '1zzzz1' and '1ZZZZ9' and syainno not between '1zzz01' and '1ZZZ99') and 
  ( syainno not between '2zzzz1' and '2ZZZZ9' and syainno not between '2zzz01' and  '2ZZZ99') ",
  'SUNTORY_D02_SQL' => "select * from t_syain_sun_dummy_wk01 where birth_md <> '0101' ",
  'SUNTORY_D03_SQL' => "select  *  from t_syain_sun_dummy_wk01 where bsy_nm  !~* '[^\r\n\t\x20-\x7f]+'",
  'SUNTORY_D11_SQL' => "SELECT a.* FROM t_syain_sun_dummy_wk01 as a WHERE a.company_id  is NUll or a.company_id =''",
  'SUNTORY_D11_01_SQL' =>  "SELECT a.* FROM t_syain_sun_dummy_wk01 as a WHERE  a.company_id <> '1' and a.company_id <> '2'",
  'DEL_E_ACD_DAT01_WK01' => 'delete from t_e_acd_juk01_wk01',
  //'SUNTORY_L03_01_SQL' => "select  *  from t_syain_sun_dummy_wk01 where license_cnv  !~* '[^\r\n\t\x20-\x7f]+'",
  // $_POSTのキー
  'P_USERID' =>  'uname',
  'P_USERPASS' =>  'upass',
  'P_USERSET' =>  'user_set',
  'P_ADDDETAIL' =>  'detail',
  'P_ADDID' =>  'p_id',
  'P_ADDNEW' =>  'new',
  'P_ADDSEARCH' =>  'search',
  'P_ADDEDIT' =>  'edit',
  'P_ADDDELETE' =>  'del',
  'P_CLEAR' =>  'clr',
  'P_LOGOUT' => 'logout',
  'P_RESET' => 'reset',
  'P_SEND' => 'send',
  'P_EXCEL' => 'excel',
  'P_SELECT' => 'pmh_select',
  'P_ORD_SCHE' => 'order_sche',
  'P_GANT_PMH01' => 'gant_pmh01',
  'P_ORDER_SHEET00' => 'order_sht00',
  'P_ORDER_SHEET01' => 'order_sht01',
  'P_PAMPH_INF01' => 'pamph_inf01',
  'P_DASHBOARD' => 'dashboard',
  'P_DATATABLE' => 'datatable',
  'P_CHARTJS' => 'chartjs',
  'USER_ID' => 'user_id',
  'PICTURE' => 'picture',
  'USERNAME_X' => 'username_x',
  'STAFF_TYPE' => 'staff_type',
  'P_DW01' => 'download01',
  'P_KUMA00' => 'kum_check00',
  'P_ADDLIST' => 'addlist_stylish_port04.html',
  'P_JACO' => '3002797',
  'P_MD5' => 'md5',
  // layout_detail_view fleld 表示数
  'FLDS' =>  20,
  //
  // メッセージ定数
  'LOGINERR' =>  "正しいユーザIDとパスワードを入力してください !",
  'USERIDEMPTY' =>  "ユーザIDが空白です",
  'USERIDERR' =>  "ユーザIDが不正です",
  'PASSEMPTY' =>  "パスワードが空白です",
  'PASSSIMEMPTY' =>  "現在のパスワードが空白です",
  'PASSNEWEMPTY' =>  "新規パスワードが空白です",
  'PASSCONFEMPTY' =>  "パスワードの確認が空白です",
  'TWACCESSERR' =>  "Twitterと未連携です",
  'TWERR' =>  "Twitter情報を取得できません",
  'FBERR' =>  "Facebook情報を取得できません",
  'FBNOTFOUND' =>  " is Not found",
  'GMAPERR' =>  "無効な住所です",
  'NAMEEMPTY' =>  "名前が空白です!",
  'KSYEMPTY' =>  "研修№は必須項目です!",
  'KGONMEMPTY' => "団体が選択されていなしようです!",

  //
  'KAIKOEMPTY' => "開講月が未入力です!",
  'ACCESSIDEMPTY' => "Access-idが未入力です!",
  'SYAINNOEMPTY' => "社員Noが未入力です!",
  'CLIENTIDEMPTY' => "Client-IDが未入力です!",
  'COMPANYIDEMPTY' => "Company_IDが未入力です!",
  'CLIENTNMEMPTY' => "Client_NMが未入力です!",
  'INSATUEMPTY' => "印刷業者が未入力です!",
  'KNJDANEMPTY' => "幹事団体が未入力です!",
  'ADNMEMPTY' => "AD名が未入力です!",
  'ADCDEMPTY' => "ＡＤコードが未入力です!",
  'BSYNMEMPTY' => "部署が未入力です!",
  'BSYCDEMPTY' => "部署コードが未入力です!",
  'PNMEMPTY' => "パンフ名が未入力です!",
  'PMHTYPEEMPTY' => "パンフタイプが未入力です!",
  'ADNUMERR' => "ＡＤコードは英数字のみ入力可です!",
  'BSYNUMERR' => "ＢＳＹコードは英数字のみ入力可です!",
  'APPYMDEMPTY' => "申込締切日が未入力のようです!",
  'DELIYMDEMPTY' => "納品日が未入力のようです!",
  'REPYMDEMPTY' => "リポート提出期限日が未入力のようです!",
  'KEYEMPTY' => "KEY項目が未入力のようです!",
  //
  'READNAMEEMPTY' =>  "ふりがなが空白です",
  'ACCESSIDREGEX' =>  "AccessIDは半角英数字で入力してください",
  'TELREGEX' =>  "電話番号は半角数字で入力してください",
  'SYAINNOREGEX' =>  "社員番号号は半角英数字で入力してください",
  'COMPANYIDREGEX' =>  "company-idは半角数字で入力してください",
  'CLIENTIDREGEX' =>  "client_idは半角数字で入力してください",
  'BIRTHMDREGEX' =>  "Birth_mdは半角数字で入力してください",
  'PIDREGEX' =>  "Pamphlet-IDを確認ください",
  //
  'ACCESSIDLENG' =>  "AccessId ID桁数を確認してください",
  'ACCESSIDERR' =>  "データが該当企業とは違うようです！",
  'SYAINNOLENG' =>  "syainnoの桁数を確認してください",
  'COMPANYIDLENG' =>  "Company-ID 1桁です！",
  'CLIENTIDLENG' =>  "Client_id桁数を確認してください",
  //
  'TELSUBREGEX' =>  "電話番号（サブ）は半角数字で入力してください",
  'POSTREGEX' =>  "郵便番号は半角数字で入力してください",
  'MAILREGEX' =>  "メールアドレスは半角英数字で入力してください",
  'MAILSUBREGEX' =>  "メールアドレス（サブ）は半角英数字で入力してください",
  'TWAREGEX' =>  "Twitterアカウントは半角英数字で入力してください",
  'FBAREGEX' =>  "Facebookアカウントは半角英数字で入力してください",
  'PASSREGEX' =>  "新規パスワードは半角英数字で入力してください",
  'NAMEMAX' =>  "名前が長すぎます",
  'READNAMEMAX' =>  "ふりがなが長すぎます",
  'TELMAX' =>  "電話番号が長すぎます",
  'TELSUBMAX' =>  "電話番号（サブ）が長すぎます",
  'MAILMAX' =>  "メールアドレスが長すぎます",
  'MAILSUBMAX' =>  "メールアドレス（サブ）が長すぎます",
  'POSTMAX' =>  "郵便番号が長すぎます",
  'TWAMAX' =>  "Twitterアカウントが長すぎます",
  'FBAMAX' =>  "Facebookアカウントが長すぎます",
  'NAMELENGTH' =>  "名前は4文字以上、16文字以内で設定してください",
  'PASSLENGTH' =>  "パスワードは半角英数7文字以上、50文字以内で設定してください",
  'PASSNEWCOMPARE' =>  "新規パスワードが確認と一致しません!",
  'PASSSIMCOMPARE' =>  "既存のパスワードが一致しません!",
  'USERCOMPARE' =>  "ユーザ名が一致しません",
  'ADDINSERTOK' =>  "データの新規作成が完了しました!",
  'ADDINSERTNG' =>  "データの新規作成ができませんでした!",
  'ADDUPDATEOK' =>  "データの更新が完了しました!",
  'ADDUPDATENG' =>  "データの更新ができませんでした!",
  'USERUPDATEOK' =>  "ユーザ設定の更新が完了しました!",
  'USERUPDATENG' =>  "ユーザ設定の更新に失敗しました!",
  'CNTZERO' => "対象件数0件でした!",
  'DELERR' =>  "データ削除ができませんでした",
  'DELOK' =>  "データ削除ができました！",
  'NUMERR' =>  "整数以外が入力されたようです！",
  'PMHTYPE' =>  "パンフ区分と幹事団体の組み合わせを確認ください！",
  'DANTYPE' =>  "印刷会社と幹事団体の組み合わせを確認ください！",
  'WEBTYPE' =>  "パンフ区分とWEBTYPE区分の組み合わせを確認ください！",
  'ODRSHTPRINTNG' =>  "発注票の印刷に失敗しました",
  'PMHSELECT0' =>  "抽出件数 0 件のようです！検索条件を確認してください！",
  'PMHSELECT99' =>  "抽出件数 500 件以上のようです！処理はこのまま実できます！",
  'KAIKOFRTO' => "開講月の大小関係を確認してください!",
  'FLDNOSELECT' => "Field が選択されていないようです！",
  'POSTNG' => "Post => Get Data Exception!!",
  'ERRCNT0' =>  'エラーがまだあるようです',
  'UPDNG' =>  "更新に失敗しました",
  'EXT_E_ACD_DAT01_WK01' => "SELECT * FROM information_schema.tables WHERE table_name = 't_e_acd_juk01_wk01'",
  'EXT_JUK_ENTRY_WK01' => "SELECT * FROM information_schema.tables WHERE table_name = 't_juk_entry_wk01'",
  'EXT_E_ACD_DAT01_WK02' => "SELECT * FROM information_schema.tables WHERE table_name = 't_e_acd_juk01_wk02'",
  'EXT_JUK_ENTRY_WK02' => "SELECT * FROM information_schema.tables WHERE table_name = 't_juk_entry_wk02'",
  'EXT_SYAIN_SUN_LIC01_WK01' => "SELECT * FROM information_schema.tables WHERE table_name = 't_syain_sun_lic01_wk01'",
  'INS_JUKO_3Q_WK01' => "INSERT INTO t_web_3q_entry_imp (
    id,
    shori_kbn,
    send_ymd,
    name_k,
    name_j,
    syainno,
    syzkcd,
    yubin,
    addr1,
    addr2,
    addr3,
    tel,
    tel2,
    juk_crs_no,
    birthday,
    ndo,
    select_kmk,
    seal_no,
    sek_f,
    memos,
    comments,
    sai,
    sai_jukno,
    e_mail,
    kaiymd,
    cancel_kbn,
    cancel_ymd,
    judge_sanq_key,
    sek_f_updymd
    )
    SELECT
        ?||'W' || substr(fld064,3,6),
        '0',
        NULL,
        fld017 || '  '  || fld018,
        fld015 || '  '  || fld016,
        fld030,
        case 
          when substr(fld022,1,4) = '0000' then NULL
               else  substr(fld022,1,4) end,
        fld045,
        fld047,
        fld048,
        fld049,
        fld050,
        NULL,
        fld003,
        fld021,
        ?,
        NULL,
        NULL,
        '0',
        NULL,
        NULL,
        case 
           when fld011 ='新規受講' then FALSE 
           else TRUE 
           end,
        case 
         when fld011 ='再受講' then  fld052 
           else NUll 
       end,
        fld051,
        fld001,
        0,
        NULL,
        NULL,
        NULL
    FROM
        t_juk_entry_wk01",
  'INS_JUKO_SANQ01S' => 'INSERT INTO t_juko_sanq01s select a.*  from  t_web_3q_entry_imp as a left join t_juko_sanq01s as b on b.id = a.id where b.id is null',
  'DRP_E_ACD_DAT01_WK01' => 'drop table t_e_acd_juk01_wk01',
  'DRP_JUK_ENTRY_WK01' => 'drop table t_juk_entry_wk01',
  'DRP_JUK_ENTRY_WK02' => 'drop table t_juk_entry_wk02',
  'DEL_SYAIN_SUN_LIC01_WK01' => 'delete from t_syain_sun_lic01_wk01',
  'GRPSUM01_160' => "select  client_id => sts => sum(cnts) from t_syain_chk01 group by client_id => sts having client_id =? order by sts",
  'CNT01_160' => "select count(*) from t_syain_sun where access_id=? and syainno <> 'ZZZZZ'",
  'CNT01_XX1' => "select count(*) from t_juk_sys_dat01",
  'UPD_PNO_COM01' => "update  t_pno_com set p_no_seq=:p_no_seq WHERE t_pno_com.p_id = :p_id ",
  'UPD_PNO_COM08' => "update  t_pno_com set fld08=:fld08 WHERE t_pno_com.p_id = :p_id ",
  'UPD_PNO_COM04' => "update  t_pno_com set fld04=:fld04 WHERE t_pno_com.p_id = :p_id ",
  'DEL_TBL01' => "delete from t_tbl_sub01 WHERE t_tbl_sub01.tbl_id = :tbl_id and t_tbl_sub01.tbl_seq =:tbl_seq and t_tbl_sub01.tbl_kbn =:tbl_kbn ",
  'SELECTSYAINCSL160' => "SELECT access_id => syainno => birth_md => null as dummy => null as dummy => null as dummy => null as dummy => null as dummy => null as dummy => null as dummy => null as dummy => company_id FROM t_syain_sun WHERE access_id =:access_id  ORDER BY syainno",
  'SELECTSYAINJUK160' => "SELECT null as dummy => null as dummy => syainno => license => bsy_nm => null as dummy => null as dummy => null as dummy => null as dummy => null as dummy => null as dummy => null as dummy FROM t_syain_sun WHERE access_id =? and syainno <> 'ZZZZZ' ORDER BY syainno",
  'DEL_SYAIN_160_01' => "delete from t_syain_sun  WHERE client_id =:client_id",
  'DEL_SYAIN_160_02' => "delete from t_syain_sun as a WHERE a.access_id =:access_id",
  'DEL_SYAIN_xxx' => "delete from t_syain_sun_dummy as a WHERE a.access_id =:access_id and a.syainno =:syainno",
  'DEL_SYAIN_CNV01' => "delete from t_syain_sun_cnv01 as a WHERE a.client_id =:client_id and a.seq =:seq",
  'DEL_SYAIN_ALL_234' => "delete from t_syain_sun as a WHERE a.access_id = :access_id and a.syainno <> 'ZZZZZ'",
  'INS_SYAIN_234_01' => "insert into t_syain_sun_wk03 select * from t_syain_sun where access_id =:access_id ",
  'Q_HAC_PRINT_NEW01' => "select a.*, f.insatu_kgo_nm, h.dname, b.card_type," .
    "e.web_pmh, d.kgo_sek, c.sek_ng, g.pmh_type_nm, cast(a.sanno_cost as int)+ cast(a.mng_cost as int) as sanno_keisai_costt," .
    "cast(a.this_year_cost as int) - cast(a.sanno_cost as int) - cast(a.mng_cost as int) as tdan_sekk " .
    "FROM v_pmh11_test as a LEFT JOIN t_card_type as b ON a.card_type_kbn = b.card_type_kbn " .
    "LEFT JOIN t_sek_ng_kbn as c ON a.sek_ng_kbn = c.sek_ng_kbn " .
    "LEFT JOIN t_kgo_sek_kbn as d ON a.kgo_sek_kbn = d.kgo_sek_kbn " .
    "LEFT JOIN t_web_pmh_kbn as e ON a.web_pmh_kbn = e.web_pmh_kbn " .
    "LEFT JOIN t_insatu_kgo as f ON a.insatu_kgo_cd = f.insatu_kgo_cd " .
    "LEFT JOIN t_pmh_type_kbn as g ON a.pmh_type = g.pmh_type " .
    "LEFT JOIN T_dan as h ON a.dantai_cd_knj = h.dantai_cd " .
    "where  a.tks_type_kbn = '000'  and  a.dantai_cd_sek = '00000000' ",
  "CRE_E_ACD_DAT01_WK01" => 'CREATE TABLE t_e_acd_juk01_wk01 (user_id  varchar(255),パスワード  varchar(255),名前 varchar(255),'
    . 'カナ varchar(255),メールアドレス varchar(255),組織コード varchar(255),所属長 varchar(255),入社年月日 varchar(255),年代コード varchar(255),'
    . '性別コード varchar(255),職種コード varchar(255),職位コード varchar(255),業種コード varchar(255),ロールコード varchar(255),備考 varchar(255),'
    . '社員番号 varchar(255),所属コード varchar(255),ユーザーコースコード varchar(255),所属名 varchar(255),共通管理番号 varchar(255),受講料 int4,'
    . '成績送付先コード varchar(255),受講番号 varchar(255),期間from varchar(255),期間to varchar(255),獲得ポイント数 varchar(255),'
    . '修了基準ポイント数 varchar(255),受講状況 varchar(255),修了除籍年月日 varchar(255),前回期間from varchar(255),前回期間to varchar(255),'
    . '前回獲得ポイント数 varchar(255),前回修了基準ポイント数 varchar(255),前回受講状況 varchar(255),前回修了除籍年月日 varchar(255),'
    . 'ログイン期限 varchar(255),有効無効 varchar(255),アクセス許可IPアドレス varchar(255),保有ポイント varchar(255),登録方法 varchar(255),'
    . '研修_期間from varchar(255),研修_期間to varchar(255),企業_企業名 varchar(255),研修_研修名 varchar(255),研修_受講形態区分 varchar(255),'
    . '募集_所属担当者 varchar(255),募集_成績報告先１ varchar(255),募集_成績報告先２ varchar(255),募集_成績報告先３ varchar(255),'
    . '募集_成績報告先４ varchar(255),募集_成績報告先５ varchar(255),  CONSTRAINT t_e_acd_juk01_wk01_pkey PRIMARY KEY  (user_id) )',
  "CRE_SYAIN_SUN_LIC01_WK01" => 'CREATE TABLE t_syain_sun_lic01_wk01 (license_id      serial,
license           varchar(255),
license_cnv    varchar(255),
client_id      varchar(255),
upd_ymd timestamp,
cre_ymd timestamp, 
CONSTRAINT t_syain_sun_lic01_pkey PRIMARY KEY (license_id)',
  'Q_SANQ_JUKO01' => "SELECT a.ID,a.shori_kbn,to_date(a.send_ymd,'yyyy-mm-dd') as send_ymd,a.name_k,a.name_j,a.syainno AS juk_syainno," .
    'a.syzkcd AS juk_syzkcd,a.yubin,' .
    'a.addr1,a.addr2,a.addr3,a.tel AS juk_tel,a.tel2,a.juk_crs_no,a.select_kmk,a.seal_no,a.sek_f,a.memos,a.comments,' .
    'a.sai,a.sai_jukno,a.sai_juko_renraku,a.e_mail,a.kaiymd,a.ndo,a.cancel_kbn,a.cancel_ymd,a.judge_sanq_key,' .
    "a.sek_f_updymd,a.birthday, to_char(a.upd_ymd,'yyyy-mm-dd') as upd_ymd, to_char(a.cre_ymd,'yyyy-mm-dd') as cre_ymd," .
    'c.domcd,c.tai_ymd,c.syainno AS syain_syainno,' .
    'c.syain_nm_k AS syain_syain_nm_k,c.syain_nm_j AS syain_syain_nm_j,c.syzkcd AS syain_syzkcd,c.syzknm AS syain_syzknm,' .
    'c.syk_kgocd,c.syk_kgonm,c.koy_kbn,c.koy_nm,d.krn_kgocd,d.krn_kgonm,c.cyuzai_kbn,c.cyuzai_nm,' .
    'c.birthday AS syain_birthday,b.crscd,b.dan_crscd,b.crsnj,' .
    'b.juryo,b.sai_juryo, ' .
    'b.dantai_cd,b.tok_dantai_cd,b.kyo_krn,b.saj_flg,substr(a.seal_no,1,5) AS seal_3,' .
    " case a.judge_sanq_key when '11' then  d.krn_kgonm when '12' then  d.krn_kgonm else c.syzknm end  AS aaa," .
    ' e.sei,f.judge_sanq_nm,g.dname,' .
    'd.yubin as krn_yubin,d.addr1 as krn_addr1,d.tel as krn_tel,d.fax as krn_fax, ' .
    "case a.shori_kbn when '0' then '送付準備中' when '1' then '送付済'  else '' end as shori_kbn_nm" .
    ' FROM T_juko_sanq as a ' .
    ' LEFT JOIN T_crs_sanq as b ON a.juk_crs_no = b.crscd ' .
    ' LEFT JOIN T_syain_sanq as c ON a.syainno = c.syainno ' .
    ' LEFT JOIN T_sanq_kanren as d  ON a.syzkcd = d.krn_kgocd ' .
    ' LEFT JOIN T_sei as e  ON a.sek_f = e.key ' .
    ' LEFT JOIN T_judge_sanq as f ON a.judge_sanq_key = f.judge_sanq_key ' .
    ' LEFT JOIN T_dan as g ON b.dantai_cd = g.dantai_cd_sg ' .
    ' WHERE a.id = ? ' .
    ' ORDER BY a.name_k,a.syainno',
];
