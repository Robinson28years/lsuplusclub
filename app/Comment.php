<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id', 'body','user_id','discussion_id'];
    public function getCreatedAtAttribute($date)
    {
        if (Carbon::now() < Carbon::parse($date)->addDays(10)) {
            return Carbon::parse($date)->diffForHumans();
        }

        return Carbon::parse($date);
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
