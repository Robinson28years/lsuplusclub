<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'discuss';
    protected $fillable = ['id','title', 'body','categories','user_id','last_user_id'];
    public function getCreatedAtAttribute($date)
    {
        if (Carbon::now() < Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date)->diffForHumans();
        }
        return $date;
    }
    public function getUpdatedAtAttribute($date)
    {
        if (Carbon::now() < Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date)->diffForHumans();
        }
        return $date;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function last_user()
    {
        return $this->belongsTo(User::class,'last_user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'discussion_id');
    }
    public function show($id)
    {
        $article = $this->findOrFail($id);
        $article->user = User::find($article->user_id);
        $article->last_user = User::find($article->last_user_id);
        foreach ($article->comments as $comment) {
            $comment->user = User::find($comment->user_id);
//            $comment->last_user = User::find($comment->last_user_id);
        }
        return collect($article,$article->comments);
    }
}
