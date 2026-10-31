<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class User extends Model
{
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // protected static function booted():void{

    //     static::deleted(function($user){
    //         $user->posts()->delete();

    //     });

    //      static::created(function($user){


    //     });

    //      static::updated(function($user){


    //     });


    // }
}
