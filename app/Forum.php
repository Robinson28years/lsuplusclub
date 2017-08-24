<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'discuss';
    protected $fillable = ['id','title', 'body','user_id','last_user_id'];
//    public function getCreatedAtAttribute($date)
//    {
//        if (Carbon::now() < Carbon::parse($date)->addDays(10)) {
//            return Carbon::parse($date)->diffForHumans();
//        }
//        return Carbon::parse($date);
//    }
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
        return collect($article,$article->comments);
    }
}
