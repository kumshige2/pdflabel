<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suntory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'syainno',
        'license',
        'compamy_id',
    ];
    public function scopeSearch($query, $keyword)
    {
        return $query->where('syainno','like', '%'. $keyword .'%')
                     ->orWhere('license','like', '%'. $keyword .'%')
                     ->orWhere('company_id','like', '%'. $keyword .'%')
                     ->get();
    }
}
