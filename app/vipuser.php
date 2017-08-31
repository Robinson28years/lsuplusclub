<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vipuser extends Model
{
    protected $table = 'vipuser';
    protected $fillable = ['schoolid','class','phone','email'];
}
