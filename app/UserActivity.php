<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $table = 'user_activity';
    protected $fillable = ['user_id', 'activity_id','confirm'];
}
