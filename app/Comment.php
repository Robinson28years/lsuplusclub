<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id', 'body','user_id','discussion_id'];
    public function getCreatedAtAttribute($date)
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
    public function discussion()
    {
        return $this->belongsTo(Discuss::class,'discussion_id');
    }
}
