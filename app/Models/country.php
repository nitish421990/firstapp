<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{

public function users(){

return $this->hasMany(user::class);
}

public function posts(){

 return $this->hasManyThrough(Post::class,User::class);
}
}
