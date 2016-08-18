<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vipuser extends Model
{
	protected $table = 'vipuser';
    protected $fillable = ['name', 'email', 'password','schoolid','college','class','phone','sphone','isvip','cs1','cs2','cs3','cs4','cs21','cs22','cs23','cs24','cs25','cs26','cs27','cs28','cs31','cs32','cs33','cs34','cs35','cs36','cs37','cs38','cs39','cs310','6','7','8','9','10','11','12','13','14','15','16','17','reviewer'];
}
