<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    /* 外部テーブルとのリレーションの設定
     * belongsTo() は、連携先テーブルのレコードの外部キーを持っている場合を表す
     */
    public function owner(){
        return $this->belongsTo(Owner::class);
    }
}
