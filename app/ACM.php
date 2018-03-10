<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ACM extends Model
{
    protected $table = 'acm2018';
    protected $fillable = ['id','name','studentid', 'college','grades','phone'];
}
