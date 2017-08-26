<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = ['name', 'owner_id','borrower_id','address','return_time','description','state','isbn'];

    public function owner()
    {
        return $this->belongsTo('App\User','owner_id');
    }

    public function borrower()
    {
        return $this->belongsTo(User::class,'borrower_id');
    }
}
