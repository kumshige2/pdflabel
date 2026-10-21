<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Facades\Log;


class T_kanren_sanq01 extends Model
{
    use HasFactory;
    use Sortable;
    public $sortable = [
        'krn_kgocd',
        'krn_kgo_nm'
    ];
    public $incrementing = false; // ← 追加
    protected $primaryKey = 'krn_kgocd';
    protected $keyType = 'string';
    protected $table = 't_kanren_sanq01s';
    public function T_juko_sanq01()
    {
        return $this->hasMany(T_juko_sanq01::class, 'krn_kgocd', 'krn_kgocd');
        //return $this->hasMany('App/T_juko_sanq01', 'syainno', 'syainno');
    }
}
