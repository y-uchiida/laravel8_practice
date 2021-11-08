<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    /* 外部テーブルとのリレーションの設定
     * hasOne() は、連携先テーブルのレコードと1対1でつながる場合を表す
     */
    public function dog() { /* App\Dog モデルから、関連づけのあるレコードをreturnさせる */
        return $this->hasOne(Dog::class); /* hasOne での関連付け... ひとつのレコードだけ取りだす */
    }

    public function dogs(){ /* App\Dog モデルから、関連づけのあるレコードをreturnさせる */
        return $this->hasMany(Dog::class); /* hasMany での関連付け... 複数のdogs レコードを取りだす */
    }
}
