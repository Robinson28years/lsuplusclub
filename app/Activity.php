<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = ['publisher_id', 'title', 'img', 'summary', 'body'];

    public function publisher()
    {
        return $this->belongsTo('App\User', 'publisher_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_activity', 'activity_id', 'user_id');
    }
}
