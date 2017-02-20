<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = 'acm';
    protected $fillable = ['id','name','studentid', 'college','grades','phone'];
}
