<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checktime extends Model
{
	protected $table = 'checktime';
    protected $fillable = ['name','class', 'id','schoolid','checktime'];
}
