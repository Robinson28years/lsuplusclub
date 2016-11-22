<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QRLogin extends Model
{
	protected $table = 'qrlogin';
    protected $fillable = ['id','userid','randnum','token'];
}
