<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id', 'body','user_id','discussion_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function discussion()
    {
        return $this->belongsTo(Discuss::class,'discussion_id');
    }

}
