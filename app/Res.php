<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Res extends Model
{
    //
    protected $fillable = [
        'res_id', 'threads_id', 'body', 'name', 'create_at',
    ];

}
