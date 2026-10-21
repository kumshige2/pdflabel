<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Log;



class T_crs_sanq01 extends Model
{
    use HasFactory;
    use Sortable;

    public $incrementing = false; // ← 追加
    protected $primaryKey = 'crscd';
    protected $keyType = 'string';
    protected $table = 't_crs_sanq01s';
    public function T_juko_sanq01()
    {
        return $this->hasMany(T_juko_sanq01::class, 'juk_crs_no', 'crscd');
        //return $this->hasMany(T_juko_sanq01::class, 'crscd', 'juk_crs_no');
    }
}
