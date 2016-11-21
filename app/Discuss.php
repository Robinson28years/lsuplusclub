<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discuss extends Model
{
    protected $table = 'discuss';
    protected $fillable = ['id','title', 'body','user_id','last_user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'discussion_id');
    }
}
