<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Log;
//use Illuminate\Support\Facades\Log;

class T_syain_sanq01 extends Model
{
    use HasFactory;
    use Sortable;
    public $sortable = [
        'syainno', 'syain_nm_j', 'syain_nm_k', 'koy_kbn', 'koy_nm', 'tai_ymd', 'syz_kgocd', 'syk_kgonm', 'syzkcd', 'syzknm', 'domcd', 'cyuzai_kbn', 'birthday'
    ];

    public $incrementing = false; // ← 追加
    protected $primaryKey = 'syainno';
    protected $keyType = 'string';
    protected $table = 't_syain_sanq01s';


    public function T_juko_sanq01()
    {
        return $this->hasMany(T_juko_sanq01::class, 'syainno', 'syainno');
        //return $this->hasMany('App/T_juko_sanq01', 'syainno', 'syainno');
    }
    public function scopeSyainEqual($query, $key_syainno)
    {
        return $query->where('syainno', $key_syainno);
        //return $this->hasMany('App/T_juko_sanq01', 'syainno', 'syainno');
    }
    public function scopeBirthEqual($query, $key_birth)
    {

        return $query->where(array_slice(['birthday'], 5), $key_birth);
        //return $query->whereraw(" SUBSTR(birthday, 5, 5)=?", $key_birth);
    }
    public function scopeNameEqual($query, $key_name)
    {
        // $nm = str_replace(str_replace($key_name,'  ', ''),'　','');
        //return $query->where(str_replace(array('  ', '　'), '', ['syain_nm_j']), $key_name);
        //return $query->whereRaw(" replace(syain_nm_j, '　', '')= ? ", [$key_name]);
        //$key_name =  mb_convert_kana($key_name_xx, 'r');
        //
        return $query->whereRaw(" replace(replace(syain_nm_j, '　', ''),' ','')= ? ", [$key_name]);
    }
}
