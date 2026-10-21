<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Customer extends Model
{
    use HasFactory;
    use Sortable;
    public $sortable = [
        'id', 'client_id', 'country', 'postcode', 'prefecture', 'city', 'ward', 'streetAddress', 'secondaryAddress', 'company', 'userName', 'domainName', 'email',
        'lastName', 'firstName', 'lastKanaName', 'firstKanaName', 'phoneNumber', 'realText'
    ];
    // テーブルの関連付け
    protected $table = 'customers';
    // 更新可能な項目の設定
    protected $fillable = [
        'client_id',
        'country',                         // 国名
        'postcode',                       // 郵便番号
        'prefecture',                   // 都道府県
        'city',                               // 市
        'ward',                               // 区
        'streetAddress',             // 町以下
        'secondaryAddress',       // マンション名
        'company',                         // 会社名
        'userName',                       // ユーザ名
        'domainName',                   // ドメイン名
        'email',                             // メールアドレス
        'lastName',                       // 姓
        'firstName',                     // 名
        'lastKanaName',               // 姓カナ
        'firstKanaName',             // 名カナ
        'phoneNumber',                 // 電話番号
        'realText',
    ];
}
