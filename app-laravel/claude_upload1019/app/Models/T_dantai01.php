<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_dantai01 extends Model
{
    use HasFactory;
    public $incrementing = false; // ← 追加
    protected $primaryKey = 'dantai_cd';
    protected $keyType = 'string';
    protected $table = 't_dantai01s';
    public function T_juko_sanq01()
    {
        return $this->hasMany(T_juko_sanq01::class, 'dantai_cd_sg', 'dantai_cd');
        //return $this->hasMany('App/T_juko_sanq01', 'syainno', 'syainno');
    }
}
