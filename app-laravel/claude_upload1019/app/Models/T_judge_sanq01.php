<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class T_judge_sanq01 extends Model
{
    use HasFactory;
    use Sortable;
    public $incrementing = false; // ← 追加
    protected $table = 't_judge_sanq01s';
    protected $primaryKey = 'judge_sanq_key';
    public function T_judge_sanq01()
    {
        return $this->hasmany(T_juko_sanq01::class, 'judge_sanq_key', 'judge_sanq_key');
    }
}
