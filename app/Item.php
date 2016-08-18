<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = 'item';
    protected $fillable = ['title','timeover', 'id','timestar','content','user','isvip','hide','end'];
}
