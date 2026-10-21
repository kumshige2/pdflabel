<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Log;


class T_dan_sanq01 extends Model
{
    use HasFactory;
    use Sortable;

    public $incrementing = false; // ← 追加
    protected $primaryKey = 'dantai_cd';
    protected $keyType = 'string';
    protected $table = 't_dan_sanq01s';
    public function T_crs_sanq01()
    {
        return $this->hasMany(T_crs_sanq01::class, 'dantai_cd', 'dantai_cd');
    }
}
