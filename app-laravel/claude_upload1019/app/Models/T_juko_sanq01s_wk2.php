<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_juko_sanq01s_wk2 extends Model
{
    use HasFactory;
    public $incrementing = false; // ← 追加

    protected $keyType = 'string'; // ← 追加
    protected $table = 't_juko_sanq01s_wk2';
}
