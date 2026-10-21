<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Log;
//use HasCompositePrimaryKeyTrait; // 追加

class T_out_hen_sanq01 extends Model
{
    use HasFactory;
    use Sortable;
    public $incrementing = false; // ← 追加
    protected $table = 't_out_hen_sanq01s';
}
