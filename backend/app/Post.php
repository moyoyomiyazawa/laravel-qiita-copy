<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // ここで指定したカラムはデータの追加や更新ができるようになる
    protected $fillable = [
        'user_id',
        'title',
        'tag1',
        'tag2',
        'tag3',
        'body',
    ];
}
