<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';

    protected $fillable = [
        'username',
        'pwd'
    ];

    public $timestamps = false;

}
