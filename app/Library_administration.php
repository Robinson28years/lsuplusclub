<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library_administration extends Model
{
    protected $table = 'library_administration';
    protected $primaryKey='book_id';
    public $timestamps=false;
    protected $guarded = [];
}
