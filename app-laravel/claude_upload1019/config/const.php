<?php
const SANQ_SELECT_V10 = 'SELECT
V10.ID,
V10.shori_kbn,
V10.syain_syainno,
V10.syain_syain_nm_j,
v10.kaiymd,
V10.name_K,
V10.name_j,
V10.syain_syzkcd,
V10.syain_syzknm,
V10.syk_kgocd,
V10.syk_kgonm,
V10.sek_f,
V10.sei,
v10.syk_kgocd,
v10.syk_kgonm,
V10.juk_crs_no,
v10.crscd,
V10.crsnj,
V10.juryo,
V10.judge_sanq_key,
V10.judge_sanq_nm,
V10.sai,
V10.tai_ymd,
V10.sai_jukno,
V10.aaa,
V10.cancel_kbn,
V10.tai_ymd,
v10.dantai_cd,
v10.dname,
V10.syain_birthday,
v10.krn_yubin,
v10.krn_addr1,
v10.krn_tel,
v10.krn_fax,
v10.krn_bu,
v10.krn_tanto,
v10.sai_juryo,
v10.updated_at as upd_ymd,
v10.created_at as cre_ymd,
v10.koy_kbn,
v10.koy_nm,
v10.cyuzai_kbn,
v10.cyuzai_nm,
v10.sek_f_updymd,
v10.cancel_ymd,
v10.send_ymd,
v10.yubin,
v10.addr1,
v10.addr2,
v10.addr3,
v10.e_mail,
v10.juk_tel,
v10.tel2,
v10.birthday,
v10.memos,
v10.krn_kgocd,
v10.krn_kgonm
';
const SANQ_SELECT_V11 = 'SELECT
v11.ID,
v11.shori_kbn,
v11.syain_syainno,
v11.syain_syain_nm_j,
v11.kaiymd,
V11.name_K,
v11.name_j,
v11.syain_syzkcd,
v11.syain_syzknm,
v11.syk_kgocd,
v11.syk_kgonm,
v11.sek_f,
v11.sei,
v11.syk_kgocd,
v11.syk_kgonm,
v11.juk_crs_no,
v11.crscd,
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
v11.dantai_cd,
v11.dname,
v11.syain_birthday,
v11.krn_yubin,
v11.krn_addr1,
v11.krn_tel,
v11.krn_fax,
v11.krn_bu,
v11.krn_tanto,
v11.sai_juryo,
v11.updated_at as upd_ymd,
v11.created_at as cre_ymd,
v11.koy_kbn,
v11.koy_nm,
v11.cyuzai_kbn,
v11.cyuzai_nm,
v11.sek_f_updymd,
v11.cancel_ymd,
v11.send_ymd,
v11.yubin,
v11.addr1,
v11.addr2,
v11.addr3,
v11.e_mail,
v11.juk_tel,
v11.tel2,
v11.birthday,
v11.memos,
v11.krn_kgocd,
v11.krn_kgonm
';
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
    // 'DBSERVER_PQ_X1' =>  '172.16.58.73',
    'DBSERVER_PQ_X1' =>  '172.16.58.108',
    'DBSERVER_PQ' =>  '172.16.58.108',

    'DBUSER_PQ' =>  'postgres',
    'DBPASSWORD_PQ' =>  'REDACTED_DB_PASSWORD',
    'DBNAME_PQ' =>  'pamphlet',
    'DBNAME_TEST_PQ' =>  'snno3_test',
    'DBNAME_PQ_SQ' =>  'sanq',
    'DBNAME_TEST_PQ_SQ' =>  'sanq_test',
    'DBPORT_PQ' =>  5432,
    'DSN_PQ_X1' => 'pgsql:dbname=pamphlet host=172.16.58.108 port=5432',
    'DSN_TEST_PQ_X1' => 'pgsql:dbname=snno3_test host=172.16.58.108 port=5432',
    'DSN_PQ' => 'pgsql:dbname=pamphlet host=172.16.58.108 port=5432',
    'DSN_TEST_PQ' => 'pgsql:dbname=snno3_test host=172.16.58.108 port=5432',
    'GEO_API01' => 'REDACTED_GEO_API_KEY',
    'MAILGUN_API_KEY' => 'REDACTED_MAILGUN_API_KEY',
    //Python
    'PYTHON_ROUTE01' => 'c:/Users/kumashiro_shigetaka/AppData/Local/anaconda3/python.exe ',
    'XCOPY_FR01'  => '//ntsv142/DBS0015',
    'XCOPY_TO01'  => 'C:/xampp/htdocs/composer/test/adminlte2q_73/public/storage',
    'SANQ_JUKO_DWN01'  => 'C:/xampp/htdocs/composer/test/adminlte2q_73/storage/app/files/download/zip',
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
    'SANQ_ID' =>  '59687',
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
    'SANQ_Q000_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 order by id",
    'SANQ_Q001_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 WHERE v11.sai=True AND v11.saj_flg Like '%不可%'",
    'SANQ_Q020_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 WHERE v11.crsnj Is Null",
    'SANQ_Q030_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 WHERE v11.sek_f='x'",
    'SANQ_Q040_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 WHERE  ( v11.syain_syainno Is Null AND  v11.juk_syzkcd is NULL ) or
                                                                                ( v11.syain_syainno Is Null AND     v11.juk_syzkcd='' )  or
                                                                                ( v11.syain_syainno  =''  AND  v11.juk_syzkcd is NULL ) or
                                                                                ( v11.syain_syainno  =''  AND  v11.juk_syzkcd='' ) order by name_j",
    'SANQ_Q050_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 WHERE v11.shori_kbn='0'",
    'SANQ_Q060_SQL' => SANQ_SELECT_V10 . " FROM v_juko_sanq01s_10 as v10 WHERE v10.cancel_kbn=1",
    'SANQ_Q070_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 WHERE (v11.syain_syainno Is Not Null AND v11.judge_sanq_key='11') OR (v11.syain_syainno Is Not Null AND v11.judge_sanq_key='12')",
    'SANQ_Q080_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 WHERE v11.sek_f= '4'",
    'SANQ_Q090_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 " .
        "WHERE (substr(v11.syain_birthday,6,2) || right(v11.syain_birthday,2)<>v11.birthday AND Length(v11.syain_syzkcd)=12) or " .
        "(substr(v11.syain_birthday,6,2) || right(v11.syain_birthday,2)<>v11.birthday AND Length(v11.syain_syzkcd)=8)",
    'SANQ_Q041_SQL' => SANQ_SELECT_V11 . " FROM v_juko_sanq01s_11 as v11 WHERE replace(replace(v11.syain_syain_nm_j,'　',''),' ','') <>replace(replace(v11.name_j,'　',''),' ','') and " .
        "v11.cancel_kbn=0 AND v11.syain_syainno Is Not Null AND v11.birthday Is Not Null",
    'SANQ_Q100_SQL' => SANQ_SELECT_V11 . " from v_juko_sanq01s_11 as v11 left join t_juko_sanq01s as j on v11.id =j.id where j.addr1 is null",
    'SANQ_Q201_SQL' => "SELECT *  FROM v_juko_sanq01s_11 WHERE shori_kbn = '0' AND cancel_kbn =0 AND judge_sanq_key = ? ",
    'SANQ_Q200_SQL' => "SELECT *  FROM v_juko_sanq01s_11 WHERE judge_sanq_key = ? ",
    'SANQ_Q202_SQL' => "select dantai_cd as 団体コード,dname as 団体,seqno_g4 as SEQNo_G4,name_k as カナ氏名,name_j as 漢字氏名,syainno_g0 as 社員番号_G0," .
        "syzkcd_g1 as 所属CD_G1,syzknm as 所属名,yubin as 〒,addr1 as 市区町村,addr2 as 番地,addr3 as 会社名マンション名,tel as TEL,tel2 as 受講者連絡先," .
        "email as 電子メールアドレス,juk_crs_no_g2 as コースNO_G2,crsnj as コース名,juryo as 受講料,kyo_krn as 教育訓練,select_kmk as 選択科目,comments as 注意コメント," .
        "tori_siten as 取纏め部支店,tori_tnto as 取纏め担当者,tnto_addr as 担当者様住所,tnto_tel as 担当者様TEL,tnto_fax as 担当者様FAX," .
        "tnto_email as 担当者様E_mail,sek_f as 請求,sek_tnto as 請求担当者,syu_sof as 修了証書送付先,sai as 再受講Ｆ,sai_jukno FROM t_juko_sanq01s_wk1 as v11 " .
        "WHERE v11.judge_sanq_key = ? and v11.dantai_cd = ? ",
    'SANQ_Q500_SQL' => "select *  FROM v_juko_sanq01s_11
    WHERE
	(coalesce(syain_syainno,'abc'),name_j, kaiymd, juk_crs_no) in(
		SELECT
			coalesce(syain_syainno,'abc'),name_j,kaiymd,juk_crs_no FROM v_juko_sanq01s_11 as dd
		WHERE
            coalesce(syain_syainno,'abc') =coalesce(dd.syain_syainno,'abc')  and
            name_j= dd.name_j and
			kaiymd = dd.kaiymd and
			juk_crs_no  = dd.juk_crs_no
        GROUP BY
			syain_syainno,name_j,kaiymd,juk_crs_no,cancel_kbn
		HAVING
			count(*) > 1   )
    ORDER BY
    syain_syainno,name_j,kaiymd,juk_crs_no",
    'SANQ_Q500_SQLbk' => "select *  FROM v_juko_sanq01s_11
    WHERE
	(syain_syainno,name_j, kaiymd, juk_crs_no) in(
		SELECT
			syain_syainno,name_j,kaiymd,juk_crs_no FROM v_juko_sanq01s_11 as dd
		WHERE
            syain_syainno =dd.syain_syainno  and
            name_j= dd.name_j and
			kaiymd = dd.kaiymd and
			juk_crs_no  = dd.juk_crs_no
        GROUP BY
			syain_syainno,name_j,kaiymd,juk_crs_no,cancel_kbn
		HAVING
			count(*) > 1  and syain_syainno is not null and  syain_syainno <> '' and cancel_kbn =0 )
    ORDER BY
    syain_syainno,name_j,kaiymd,juk_crs_no",
    'SANQ_Q501_SQL' => " select * FROM v_juko_sanq01s_11
     WHERE
    (name_j, kaiymd, juk_crs_no) in(
        SELECT name_j, kaiymd,juk_crs_no
        FROM v_juko_sanq01s_11 as dd
            WHERE   name_j= dd.name_j AND
                    kaiymd = dd.kaiymd  and
                    juk_crs_no  = dd.juk_crs_no
            GROUP BY
                    name_j,
                    kaiymd,
                    juk_crs_no
            HAVING
                    count(*) > 1 )
    ORDER BY name_j,kaiymd,juk_crs_no ",
    'SANQ_Q510_SQL' => SANQ_SELECT_V11 . ",s.cyuzai_kbn from v_juko_sanq01s_11 as v11 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno " .
        "WHERE v11.cyuzai_kbn='2' ORDER BY v11.cyuzai_kbn DESC , v11.ID",
    'SANQ_Q520_SQL' => SANQ_SELECT_V11 . ",s.cyuzai_kbn from v_juko_sanq01s_11 as v11 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno " .
        "WHERE v11.sai=true ORDER BY v11.id",
    'SANQ_Q530_SQL' => SANQ_SELECT_V11 . ",s.cyuzai_kbn from v_juko_sanq01s_11 as v11 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno " .
        "WHERE (v11.syk_kgocd Between '0300' And '0399') OR (v11.cyuzai_kbn='2') ORDER BY v11.id",
    'SANQ_Q540_SQL' => SANQ_SELECT_V11 . ",s.cyuzai_kbn from v_juko_sanq01s_11 as v11 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno " .
        "WHERE v11.syain_syainno is not null and v11.syain_syainno <> '' ORDER BY v11.id",
    'SANQ_Q541_SQLbk' => SANQ_SELECT_V11 . ",s.cyuzai_kbn from v_juko_sanq01s_11 as v11 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno " .
        "WHERE v11.tai_ymd is not null or v11.tai_ymd <> '' ORDER BY v11.id",
    'SANQ_Q541_SQL' => SANQ_SELECT_V11 . ",s.cyuzai_kbn from v_juko_sanq01s_11 as v11 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno " .
        "WHERE v11.judge_sanq_key ='04' ORDER BY v11.id",
    'SANQ_Q542_SQL' => SANQ_SELECT_V11 . ",s.cyuzai_kbn,s.nyusya_ymd,s.saiyo_kbn from v_juko_sanq01s_11 as v11 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno " .
        "WHERE s.nyusya_ymd=? ||'/04/01' AND s.saiyo_kbn='1' ORDER BY v11.id",
    'SANQ_Q543_SQL' => SANQ_SELECT_V11 . " from v_juko_sanq01s_11 as v11 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno WHERE v11.judge_sanq_key='03' ORDER BY v11.id",
    'SANQ_Q570_SQL' => SANQ_SELECT_V11 . " from v_juko_sanq01s_11 as v11 left join t_syain_sanq01s as s on s.syainno = v11.syain_syainno WHERE v11.juk_syzkcd='9999' ORDER BY v11.id",
    'SANQ_V010_SQL' => SANQ_SELECT_V10 . ", (CASE V10.shori_kbn when '0' THEN '送付準備中' WHEN '1' THEN '送付済'  ELSE '' END) AS shori_kbn_nm from v_juko_sanq01s_10 AS V10 where V10.id = :id order by V10.id",
    'SANQ_SEI01_SQL' => 'select * from t_sei_sanq01s',
    'SANQ_KAIKO01_SQL' => 'select * from t_KAIKO',
    'SANQ_CANS01_SQL' => 'SELECT * FROM t_can01s',
    'SANQ_JUD01_SQL' => 'SELECT * FROM t_judge_sanq',
    'SANQ_CRS01_SQL' => 'SELECT a.*,b.dname,c.dname,left(a.crscd,2) as ndo FROM t_crs_sanq01s AS a join t_dantai01s AS b ON a.dantai_cd = b.dantai_cd_sg join t_dantai01s as c on a.tok_dantai_cd=c.dantai_cd_sg order by ndo desc,a.crscd asc',
    'SANQ_CRS02_SQL' => 'SELECT a.*,b.dname as dname_m,c.dname as dname_s,left (a.crscd, 2) as ndo FROM t_crs_sanq01s AS a 
    join t_dantai01s AS b ON a.dantai_cd = b.dantai_cd_sg
    join t_dantai01s as c on a.tok_dantai_cd = c.dantai_cd_sg
        where a.crscd =:crscd order by ndo desc,a.crscd asc',
    'SANQ_CRS03_SQL' => 'SELECT a.* FROM t_crs_sanq01s AS a where a.crscd =:crscd order by a.crscd asc',
    'SANQ_KANS01_SQL' => 'SELECT a.krn_kgocd,a.krn_kgonm,a.yubin AS krn_yubin,a.addr1 AS krn_addr1,a.tel AS krn_tel,a.fax AS krn_fax,a.bu AS krn_bu,a.tanto AS krn_tanto,a.e_mail AS krn_e_mail FROM t_kanren_sanq01s AS a ORDER BY a.krn_kgocd',
    'SANQ_KANS02_SQL' => 'SELECT a.krn_kgocd,a.krn_kgonm,a.yubin,a.addr1,a.tel,a.fax,a.bu,a.tanto,a.e_mail FROM t_kanren_sanq01s AS a where a.krn_kgocd = :krn_kgocd ORDER BY a.krn_kgocd',
    'SANQ_OUTHEN01_SQL' => 'SELECT o.*,j.judge_sanq_nm FROM t_out_hen_sanq01s AS o left join t_judge_sanq as j on o.judge_sanq_key = j.judge_sanq_key  where o.judge_sanq_key = :judge_sanq_key and o.types =:types and o.kaiko =:kaiko',
    'SANQ_OUTHEN02_SQL' => 'SELECT o.*,j.judge_sanq_nm FROM t_out_hen_sanq01s AS o left join t_judge_sanq as j on o.judge_sanq_key = j.judge_sanq_key  where o.id = :id',
    'SANQ_SYAIN01_SQL' => 'SELECT * FROM T_syain_sanq01S',
    'SANQ_SEI02_SQL' => 'SELECT s.* FROM t_sei_sanq01s AS s where s.key = :key',
    'SANQ_JUDGE01_SQL' => 'SELECT * FROM T_judge_sanq01s as j where j.judge_sanq_key =:judge_sanq_key',
    'SANQ_DAN01_SQL' => 'SELECT s.* FROM t_dan_sanq01s AS s where s.dantai_cd =:dantai_cd',
    'SANQ_SEIQ01_SQL' => 'select kaiymd,dantai_cd,dname,sek_f,sei,count(id) as cnt, sum(juryo) as fee from v_juko_sanq01s_10 '
        . 'group by kaiymd,dantai_cd,dname,sek_f,sei having kaiymd >= ? order by kaiymd,dantai_cd,sek_f ',
    'SANQ_BONUS02_SQL' => "SELECT
    c.dantai_cd,
    d.dname,
    s.syainno,
    s.syain_nm_j,
    s.syzkcd,
    s.syzknm,
    c.crscd,
    c.crsnj,
    c.juryo,
    s.cyuzai_kbn,
    s.syk_kgocd,
    j.id
    FROM
        t_juko_sanq01s  as j left  join t_crs_sanq01s as c on j.juk_crs_no = c.crscd  LEFT JOIN T_dantai01s  as d ON c .dantai_cd = d.dantai_cd_sg  LEFT JOIN T_syain_sanq01s  as  s ON j.syainno = s.syainno
    WHERE
        j.ndo = ? and j.shori_kbn= '1' and j.cancel_kbn =0 and  j.sek_f= ?
    ORDER BY
        d.dantai_cd,
        j.juk_crs_no,
        j.syainno ;",
    'SANQ_BONUS03_SQL' => "SELECT
     c.dantai_cd,
     d.dname,
     s.syainno,
     s.syain_nm_j,
     s.syzkcd,
     s.syzknm,
     c.crscd,
     c.crsnj,
     c.juryo,
     s.cyuzai_kbn,
     s.syk_kgocd,
     j.id
     FROM
         t_juko_sanq01s  as j left  join t_crs_sanq01s as c on j.juk_crs_no = c.crscd  LEFT JOIN T_dantai01s  as d ON c .dantai_cd = d.dantai_cd_sg  LEFT JOIN T_syain_sanq01s  as  s ON j.syainno = s.syainno
     WHERE
         j.ndo = ? and j.shori_kbn= '1' and j.cancel_kbn =0 and  j.sek_f= ? and j.judge_sanq_key = ?
     ORDER BY
         d.dantai_cd,
         j.juk_crs_no,
         j.syainno ;",
    'SANQ_BONUS04_SQL' => "SELECT
        c.dantai_cd,
        d.dname,
        s.syainno,
        s.syain_nm_j,
        s.syzkcd,
        s.syzknm,
        c.crscd,
        c.crsnj,
        c.juryo,
        s.cyuzai_kbn,
        s.syk_kgocd,
        j.id
        FROM
            t_juko_sanq01s  as j left  join t_crs_sanq01s as c on j.juk_crs_no = c.crscd  LEFT JOIN T_dantai01s  as d ON c .dantai_cd = d.dantai_cd_sg  LEFT JOIN T_syain_sanq01s  as  s ON j.syainno = s.syainno
        WHERE
            j.ndo = ? and j.shori_kbn= '1' and j.cancel_kbn =0 and  j.sek_f= ? and j.judge_sanq_key <> ? and  j.judge_sanq_key <> ?
        ORDER BY
            d.dantai_cd,
            j.juk_crs_no,
            j.syainno ;",
    //L
    //請求種別ALL
    'SANQ_BONUS43_SQL' => "SELECT
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        count(j.id),
     j.sai,
        CASE  WHEN j.sai =false then  sum(cast(c.juryo as integer))
            ELSE  sum(cast(c.sai_juryo as integer))
        END   as kin
    FROM
        t_juko_sanq01s  as j left join t_crs_sanq01s  as c  on c.crscd = j.juk_crs_no
            left join t_dantai01s as d on c.dantai_cd = d.dantai_cd_sg
           left join t_seis as s on s.key = j.sek_f
           left join t_judge_sanq as jd  on jd.judge_sanq_key  = j.judge_sanq_key
    GROUP BY
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.shori_kbn,
        j.cancel_kbn,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        j.sai
    HAVING
        (j.shori_kbn ='1' and
        j.cancel_kbn =0 ) or
         (j.shori_kbn ='1' and
        j.cancel_kbn =0 )
    ORDER BY
        j.ndo,
        c.dantai_cd,
        j.judge_sanq_key",
    'SANQ_BONUS43A_SQL' => "SELECT
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        count(j.id),
     j.sai,
        CASE  WHEN j.sai =false then  sum(cast(c.juryo as integer))
            ELSE  sum(cast(c.sai_juryo as integer))
        END   as kin
    FROM
        t_juko_sanq01s  as j left join t_crs_sanq01s  as c  on c.crscd = j.juk_crs_no
            left join t_dantai01s as d on c.dantai_cd = d.dantai_cd_sg
           left join t_seis as s on s.key = j.sek_f
           left join t_judge_sanq as jd  on jd.judge_sanq_key  = j.judge_sanq_key
    GROUP BY
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.shori_kbn,
        j.cancel_kbn,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        j.sai
    HAVING
        (j.shori_kbn = :shori_kbn and
        j.cancel_kbn = :cancel_kbn and 
		j.judge_sanq_key = :judge_sanq_key01 and
        j.sek_f = :sek_f and 
		j.ndo = :ndo) or
		 (j.shori_kbn = :shori_kbn and
        j.cancel_kbn = :cancel_kbn and 
		j.judge_sanq_key = :judge_sanq_key11 and
        j.sek_f = :sek_f and 
		j.ndo = :ndo) 
    ORDER BY
        j.ndo,
        c.dantai_cd,
        j.judge_sanq_key",
    'SANQ_BONUS43B_SQL' => "SELECT
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        j.id,
		j.name_j,
		j.sai,
		c.juryo 
    FROM
        t_juko_sanq01s  as j left join t_crs_sanq01s  as c  on c.crscd = j.juk_crs_no
            left join t_dantai01s as d on c.dantai_cd = d.dantai_cd_sg
           left join t_seis as s on s.key = j.sek_f
           left join t_judge_sanq as jd  on jd.judge_sanq_key  = j.judge_sanq_key
   where
        (j.shori_kbn = :shori_kbn and
        j.cancel_kbn = :cancel_kbn and 
		j.judge_sanq_key = :judge_sanq_key01 and
        j.sek_f = :sek_f and 
		j.ndo = :ndo) or
		 (j.shori_kbn = :shori_kbn and
        j.cancel_kbn = :cancel_kbn and 
		j.judge_sanq_key = :judge_sanq_key11 and
        j.sek_f = :sek_f and 
		j.ndo = :ndo) 
    ORDER BY
        j.ndo,
        c.dantai_cd,
        j.judge_sanq_key",

    'SANQ_BONUS44_SQL' => "SELECT
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        count(j.id),
     j.sai,
        CASE  WHEN j.sai =false then  sum(cast(c.juryo as integer))
            ELSE  sum(cast(c.sai_juryo as integer))
        END   as kin
    FROM
        t_juko_sanq01s  as j left join t_crs_sanq01s  as c  on c.crscd = j.juk_crs_no
            left join t_dantai01s as d on c.dantai_cd = d.dantai_cd_sg
           left join t_seis as s on s.key = j.sek_f
           left join t_judge_sanq as jd  on jd.judge_sanq_key  = j.judge_sanq_key
    GROUP BY
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.shori_kbn,
        j.cancel_kbn,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        j.sai
    HAVING
        (j.shori_kbn ='1' and
        j.cancel_kbn =0 AND
        j.sek_f= ?) or
         (j.shori_kbn ='1' and
        j.cancel_kbn =0 AND
        j.sek_f= ?)
    ORDER BY
        j.ndo,
        c.dantai_cd,
        j.judge_sanq_key",
    //--------------------------------------------
    //請求種別：人事部請求　
    //--------------------------------------------
    'SANQ_BONUS44_01_SQL' => "SELECT
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        count(j.id),
     j.sai,
        CASE  WHEN j.sai =false then  sum(cast(c.juryo as integer))
            ELSE  sum(cast(c.sai_juryo as integer))
        END   as kin
    FROM
        t_juko_sanq01s  as j left join t_crs_sanq01s  as c  on c.crscd = j.juk_crs_no
            left join t_dantai01s as d on c.dantai_cd = d.dantai_cd_sg
           left join t_seis as s on s.key = j.sek_f
           left join t_judge_sanq as jd  on jd.judge_sanq_key  = j.judge_sanq_key
    GROUP BY
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.shori_kbn,
        j.cancel_kbn,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        j.sai
    HAVING
       (j.shori_kbn = :shori_kbn and j.cancel_kbn = :cancel_kbn and j.sek_f = :sek_f5 and j.ndo = :ndo) or
       (j.shori_kbn = :shori_kbn and j.cancel_kbn = :cancel_kbn and j.sek_f = :sek_f51 and j.ndo = :ndo) or 
       (j.shori_kbn = :shori_kbn and j.cancel_kbn = :cancel_kbn and j.sek_f = :sek_f6 and j.ndo = :ndo)
    ORDER BY
        j.ndo,
        c.dantai_cd,
        j.judge_sanq_key
   ",
    //--------------------------------------------
    //請求種別：人事部請求　meisai
    //--------------------------------------------
    'SANQ_BONUS44_02_SQL' => "SELECT
        j.ndo,
        c.dantai_cd,
        d.dname,
        j.judge_sanq_key,
        jd.judge_sanq_nm,
        j.sek_f,
        s.sei,
        j.id,
		j.name_j,
		j.sai,
		c.juryo 
    FROM
        t_juko_sanq01s  as j left join t_crs_sanq01s  as c  on c.crscd = j.juk_crs_no
           left join t_dantai01s as d on c.dantai_cd = d.dantai_cd_sg
           left join t_seis as s on s.key = j.sek_f
           left join t_judge_sanq as jd  on jd.judge_sanq_key  = j.judge_sanq_key   
    where 
      (j.ndo = :ndo  and j.shori_kbn= :shori_kbn AND j.sek_f= :sek_f5 and j.cancel_kbn =:cancel_kbn) or
      (j.ndo = :ndo  and j.shori_kbn= :shori_kbn AND j.sek_f= :sek_f51 and j.cancel_kbn =:cancel_kbn) or
      (j.ndo = :ndo  and j.shori_kbn= :shori_kbn AND j.sek_f= :sek_f6 and j.cancel_kbn =:cancel_kbn)    
   order by j.id 
   ",
    'SANQ_BONUS45_SQL' => "SELECT 
    jk.ndo,dn.dantai_cd, dn.dantai_nm, Count(jk.ID) AS 人数, Sum(cs.juryo) AS 受講料 
    FROM T_juko_sanq01s as jk 
        LEFT JOIN T_crs_sanq01s as cs ON jk.juk_crs_no = cs.crscd
        LEFT JOIN T_syain_sanq01s  as sy on jk.syainno = sy.syainno
        LEFT JOIN T_kanren_sanq01s as kn ON jk.syzkcd = kn.krn_kgocd
        left JOIN T_dan_sanq01s as dn ON cs.dantai_cd  = dn.dantai_cd 
        LEFT JOIN T_judge_sanq as jd ON jd.judge_sanq_key = jk.judge_sanq_key 
    where 
        (jk.ndo >= :ndo  and jk.shori_kbn= :shori_kbn AND jk.sek_f= :sek_f and jk.cancel_kbn =:cancel_kbn) or
        (jk.ndo >= :ndo  and jk.shori_kbn= :shori_kbn AND jk.sek_f= :sek_f2 and jk.cancel_kbn =:cancel_kbn)
    GROUP BY jk.ndo,dn.dantai_cd
	order by jk.ndo,dn.dantai_cd 
    ",
    //賞与引き去り国内
    'SANQ_BONUS45_01_SQL' => "SELECT
    dd.ndo,
    dd.dantai_cd,
    dd.dname,
    sum(dd.cnt),
    sum(dd.kin)
    FROM
        (SELECT
            j.ndo,
            c.dantai_cd,
            d.dname,
            count(j.id) as cnt,
            CASE  WHEN j.sai =false then  sum(cast(c.juryo as integer))             ELSE  sum(cast(c.sai_juryo as integer))         END   as kin
        FROM
            t_juko_sanq01s  as j left join t_crs_sanq01s  as c  on c.crscd = j.juk_crs_no  left join t_dantai01s as d on c.dantai_cd = d.dantai_cd_sg
        GROUP BY
            j.ndo,
            j.shori_kbn,
            j.cancel_kbn,
            c.dantai_cd,
            d.dname,
            j.sek_f,
            j.sai,j.judge_sanq_key
        HAVING
            (j.shori_kbn ='1' and    j.cancel_kbn =0 AND j.sek_f= ? and  j.judge_sanq_key='01') or
            (j.shori_kbn ='1' and    j.cancel_kbn =0 AND j.sek_f= ? and  j.judge_sanq_key='11')
        ORDER BY
            j.ndo,
            c.dantai_cd
    ) as dd
    group by
    dd.ndo,
    dd.dantai_cd,
    dd.dname
    order by dd.ndo,dd.dantai_cd",
    //賞与引き去り海外
    'SANQ_BONUS45_02_SQL' => "SELECT
    dd.ndo,
    dd.dantai_cd,
    dd.dname,
    sum(dd.cnt),
    sum(dd.kin)
    FROM
        (SELECT
            j.ndo,
            c.dantai_cd,
            d.dname,
            count(j.id) as cnt,
            CASE  WHEN j.sai =false then  sum(cast(c.juryo as integer))             ELSE  sum(cast(c.sai_juryo as integer))         END   as kin
        FROM
            t_juko_sanq01s  as j left join t_crs_sanq01s  as c  on c.crscd = j.juk_crs_no  left join t_dantai01s as d on c.dantai_cd = d.dantai_cd_sg
        GROUP BY
            j.ndo,
            j.shori_kbn,
            j.cancel_kbn,
            c.dantai_cd,
            d.dname,
            j.sek_f,
            j.sai,
           j.judge_sanq_key
        HAVING
            (j.shori_kbn ='1' and    j.cancel_kbn =0 AND j.sek_f= ? and  j.judge_sanq_key='02') or
            (j.shori_kbn ='1' and    j.cancel_kbn =0 AND j.sek_f= ? and  j.judge_sanq_key='02' )
        ORDER BY
            j.ndo,
            c.dantai_cd
    ) as dd
    group by
    dd.ndo,
    dd.dantai_cd,
    dd.dname
    order by dd.ndo,dd.dantai_cd",
    //団体別人数
    'SANQ_BONUS40_SQL' => "sELECT
    dd.ndo,
    dd.dantai_cd,
    dd.dname,
    sum(dd.cnt),
    sum(dd.kin)
    FROM
        (SELECT
            j.ndo,
            c.dantai_cd,
            d.dname,
            count(j.id) as cnt,
            CASE  WHEN j.sai =false then  sum(cast(c.juryo as integer))             ELSE  sum(cast(c.sai_juryo as integer))         END   as kin
        FROM
            t_juko_sanq01s  as j left join t_crs_sanq01s  as c  on c.crscd = j.juk_crs_no  left join t_dantai01s as d on c.dantai_cd = d.dantai_cd_sg
        GROUP BY
            j.ndo,
            j.shori_kbn,
            j.cancel_kbn,
            c.dantai_cd,
            d.dname,
            j.sek_f,
            j.sai
        HAVING
             j.cancel_kbn =0 and j.shori_kbn = '1'
        ORDER BY
            j.ndo,
            c.dantai_cd
    ) as dd
    group by
    dd.ndo,
    dd.dantai_cd,
    dd.dname
    order by dd.ndo,dd.dantai_cd",
    //
    // $_POSTのキー
    //
    'SUNTORY_D00_SQL' => "select * from t_syain_sun_dummy_wk01 where access_id  <> 'suntory2' ",
    'SUNTORY_D01xx_SQL' => "SELECT * FROM t_syain_sun_dummy_wk01 WHERE ( syainno not between '1zzzz1' and '1ZZZZ9' and syainno not between '1zzz01' and '1ZZZ99') and
  ( syainno not between '2zzzz1' and '2ZZZZ9' and syainno not between '2zzz01' and  '2ZZZ99') ",
    'SUNTORY_D01_SQL' => "select count(syainno) from t_syain_sun_dummy group by syainno having count(syainno) > 1",
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
    'EXT_NAM_DIVIDE_WK01' => "SELECT * FROM information_schema.tables WHERE table_name = 't_name_divide_wk01'",
    'EXT_T_JUKO_SANQ01S_WK2' => "SELECT * FROM information_schema.tables WHERE table_name = 't_juko_sanq01s_wk2'",
    'EXT_T_SYAIN_SANQ01S_WK1' => "DROP TABLE IF EXISTS t_syain_sanq01s_wk1;",
    'EXT_T_CRS_SANQ01S_WK1' => "DROP TABLE IF EXISTS t_crs_sanq01s_wk1;",
    'CRE_T_SYAIN_SANQ01S_WK1' => "SELECT * INTO t_syain_sanq01s_wk1 FROM  t_syain_sanq01s;",
    'CRE_T_CRS_SANQ01S_WK1' => "SELECT * INTO t_crs_sanq01s_wk1 FROM  t_crs_sanq01s;",
    'EXT_JUK_ENTRY_WK01' => "SELECT * FROM information_schema.tables WHERE table_name = 't_juk_entry_wk01'",
    'EXT_E_ACD_DAT01_WK02' => "SELECT * FROM information_schema.tables WHERE table_name = 't_e_acd_juk01_wk02'",
    'EXT_JUK_ENTRY_WK02' => "SELECT * FROM information_schema.tables WHERE table_name = 't_juk_entry_wk02'",
    'EXT_SYAIN_SUN_LIC01_WK01' => "SELECT * FROM information_schema.tables WHERE table_name = 't_syain_sun_lic01_wk01'",
    'INS_SYAIN_SANQ01S' => "insert into t_syain_sanq01s select * from t_syain_sanq01s_wk1",
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
        fld033,
        fld050,
        fld003,
        fld021,
        ?,
        NULL,
        NULL,
        '0',
        NULL,
        NULL,
        case
           when fld011 ='新規受講'or fld011 =NULL or fld011 =''  then FALSE
           else TRUE
           end,
        case
         when fld011 like'%再受講%' then  fld052
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
    'INS_JUKO_SANQ01S' => 'INSERT INTO t_juko_sanq01s SELECT a.*  FROM  t_web_3q_entry_imp AS a LEFT JOIN t_juko_sanq01s AS b ON b.id = a.id WHERE b.id IS NULL',
    'INS_CRS_SANQ01S' => 'INSERT INTO t_crs_sanq01s SELECT a.*  FROM  t_crs_sanq01s_wk1 AS a LEFT JOIN t_crs_sanq01s AS b ON b.crscd = a.crscd WHERE b.crscd IS NULL',
    'DRP_E_ACD_DAT01_WK01' => 'drop table t_e_acd_juk01_wk01',
    'DRP_NAM_DIVIDE_WK01' => 'drop table t_name_divide_wk01',
    'DRP_JUK_ENTRY_WK01' => 'drop table t_juk_entry_wk01',
    'DRP_JUK_ENTRY_WK02' => 'drop table t_juk_entry_wk02',
    'DEL_JUK_ENTRY_WK01' => 'delete from t_juk_entry_wk01',
    'DEL_JUK_ENTRY_WK02' => 'delete from t_juk_entry_wk02',
    'DEL_SYAIN_SANQ01S' => 'delete from t_syain_sanq01s',
    'DEL_CRS_SANQ01S' => 'delete from t_crs_sanq01s',
    'DRP_T_JUKO_SANQ01S_WK2' => 'drop table t_juko_sanq01s_wk2',
    //'DRP_NAM_DIVIDE_WK01' => 'drop table t_name_divide_wk01',
    'DRP_T_SYAIN_SANQ01S_WK1' => 'drop table t_syain_sanq01s_wk1',
    'DEL_SYAIN_SUN_LIC01_WK01' => 'delete from t_syain_sun_lic01_wk01',
    'GRPSUM01_160' => "select  client_id => sts => sum(cnts) from t_syain_chk01 group by client_id => sts having client_id =? order by sts",
    'CNT01_160' => "select count(*) from t_syain_sun where access_id=? and syainno <> 'ZZZZZ'",
    'CNT01_XX1' => "select count(*) from t_juk_sys_dat01",
    'UPD_SANQ_JUKO_NAME01' => "UPDATE t_juko_sanq01s SET name_j = s.syain_nm_j,birthday =  substring(s.birthday,6,2) " .
        "|| substring(s.birthday,9,2) from t_syain_sanq01s as s wHERE t_juko_sanq01s.syainno = s.syainno AND " .
        "t_juko_sanq01s.kaiymd >= ? AND  t_juko_sanq01s.kaiymd <= ? ",
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
    "CRE_NAM_DIVIDE_WK01" => 'CREATE TABLE t_name_divide_wk01 (
        nm_bef VARCHAR(255),
        nm_aft VARCHAR(255),
        id  serial
        )',
    "CRE_E_ACD_DAT01_WK01" => 'CREATE TABLE t_e_acd_juk01_wk01 (user_id  VARCHAR(255),パスワード  VARCHAR(255),名前 VARCHAR(255),'
        . 'カナ VARCHAR(255),メールアドレス VARCHAR(255),組織コード VARCHAR(255),所属長 VARCHAR(255),入社年月日 VARCHAR(255),年代コード VARCHAR(255),'
        . '性別コード VARCHAR(255),職種コード VARCHAR(255),職位コード VARCHAR(255),業種コード VARCHAR(255),ロールコード VARCHAR(255),備考 VARCHAR(255),'
        . '社員番号 VARCHAR(255),所属コード VARCHAR(255),ユーザーコースコード VARCHAR(255),所属名 VARCHAR(255),共通管理番号 VARCHAR(255),受講料 int4,'
        . '成績送付先コード VARCHAR(255),受講番号 VARCHAR(255),期間from VARCHAR(255),期間to VARCHAR(255),獲得ポイント数 VARCHAR(255),'
        . '修了基準ポイント数 VARCHAR(255),受講状況 VARCHAR(255),修了除籍年月日 VARCHAR(255),前回期間from VARCHAR(255),前回期間to VARCHAR(255),'
        . '前回獲得ポイント数 VARCHAR(255),前回修了基準ポイント数 VARCHAR(255),前回受講状況 VARCHAR(255),前回修了除籍年月日 VARCHAR(255),'
        . 'ログイン期限 VARCHAR(255),有効無効 VARCHAR(255),アクセス許可IPアドレス VARCHAR(255),保有ポイント VARCHAR(255),登録方法 VARCHAR(255),'
        . '研修_期間from VARCHAR(255),研修_期間to VARCHAR(255),企業_企業名 VARCHAR(255),研修_研修名 VARCHAR(255),研修_受講形態区分 VARCHAR(255),'
        . '募集_所属担当者 VARCHAR(255),募集_成績報告先１ VARCHAR(255),募集_成績報告先２ VARCHAR(255),募集_成績報告先３ VARCHAR(255),'
        . '募集_成績報告先４ VARCHAR(255),募集_成績報告先５ VARCHAR(255),  CONSTRAINT t_e_acd_juk01_wk01_pkey PRIMARY KEY  (user_id) )',
    "CRE_T_JUKO_SANQ01S_WK1" => 'CREATE TABLE T_juko_sanq01s_wk1 (
      dantai_cd VARCHAR(255),
      dname VARCHAR(255),
      seqno_g4 VARCHAR(255),
      name_k VARCHAR(255),
      name_j VARCHAR(255),
      syainno_g0 VARCHAR(255),
      syzkcd_g1 VARCHAR(255),
      syzknm VARCHAR(255),
      yubin VARCHAR(255),
      addr1 VARCHAR(255),
      addr2 VARCHAR(255),
      addr3 VARCHAR(255),
      tel VARCHAR(255),
      tel2 VARCHAR(255),
      email VARCHAR(255),
      juk_crs_no_g2 VARCHAR(255),
      crsnj VARCHAR(255),
      juryo VARCHAR(255),
      kyo_krn VARCHAR(255),
      select_kmk VARCHAR(255),
      comments VARCHAR(255),
      tori_siten VARCHAR(255),
      tori_tnto VARCHAR(255),
      tnto_addr VARCHAR(255),
      tnto_tel VARCHAR(255),
      tnto_fax VARCHAR(255),
      tnto_email VARCHAR(255),
      sek_f VARCHAR(255),
      sek_tnto VARCHAR(255),
      syu_sof VARCHAR(255),
      sai VARCHAR(255),
      sai_jukno VARCHAR(255),
      judge_sanq_key VARCHAR(02) )',
    "CRE_SYAIN_SUN_LIC01_WK01" => 'CREATE TABLE t_syain_sun_lic01_wk01 (license_id      serial,
    license           VARCHAR(255),
    license_cnv    VARCHAR(255),
    client_id      VARCHAR(255),
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
        ' LEFT JOIN t_kanren_sanq as d  ON a.syzkcd = d.krn_kgocd ' .
        ' LEFT JOIN T_sei as e  ON a.sek_f = e.key ' .
        ' LEFT JOIN T_judge_sanq as f ON a.judge_sanq_key = f.judge_sanq_key ' .
        ' LEFT JOIN T_dan as g ON b.dantai_cd = g.dantai_cd_sg ' .
        ' WHERE a.id = ? ' .
        ' ORDER BY a.name_k,a.syainno',
];
