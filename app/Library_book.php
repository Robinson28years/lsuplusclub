<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library_book extends Model
{
    protected $table = 'library_book';
    protected $primaryKey='book_id';
    public $timestamps=false;
    protected $guarded = [];
}
