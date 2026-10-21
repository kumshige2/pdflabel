<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_sei extends Model
{
    use HasFactory;
    public $incrementing = false; // ← 追加
    protected $table = 't_seis';
    protected $primaryKey = 'key';
    protected $keyType = 'string'; // ← 追加
    protected $fillable = ['sei'];
    public static $rules = array(
        'key' => 'required',
        'sei' => 'required'
    );
    public function T_juko_sanq01()
    {
        return $this->hasMany(T_juko_sanq01::class, 'sek_f', 'key');
    }
}
