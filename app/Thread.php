<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    // 各カラムにデータの挿入を許可する
    protected $fillable = [
        'threads_id', 'title','res_count', 'created_at', 'updated_at', 'deletesd_at', 'cates_name',
    ];

    public function getRouteKeyName()
    {
        return 'threads_id';
    }
}
