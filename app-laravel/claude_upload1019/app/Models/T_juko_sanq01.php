<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

/**
 * 絞り込み・キーワード検索
 * @param \Illuminate\Database\Eloquent\Builder
 * @param array
 * @return \Illuminate\Database\Eloquent\Builder
 */

class T_juko_sanq01 extends Model
{
    use HasFactory;
    use Sortable;
    public $sortable = [
        'id', 'shori_kbn', 'kaiymd', 'syainno', 'name_j',  'syzkcd', 'juk_crs_no', 'judge_sanq_key', 'sek_f',  'cancel_kbn', 'send_ymd'
    ];
    //

    // テーブルの関連付け
    public $incrementing = false; // ← 追加

    protected $keyType = 'string'; // ← 追加
    protected $table = 't_juko_sanq01s';
    public function t_sei()
    {
        //return $this->belongsto(T_sei::class, 'sek_f', 'key');
        return $this->belongsto('App/T_sei', 'sek_f', 'key');
    }

    public function t_syain_sanq01()
    {

        return $this->belongsto('App/T_syain_sanq01', 'syainno', 'syainno');
    }
}
