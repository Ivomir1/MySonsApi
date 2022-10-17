<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');      
    }

/*
    public function getUserAttribute($value)    
    {
        $users = User::whereIn('id', [1])->get();        
        return $users;
    }
    */
    
}

