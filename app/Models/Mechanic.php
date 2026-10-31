<?php

namespace App\Models;
use App\Models\Owner;
use App\Models\car;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    public function owner(){
        return $this->hasOneThrough(Owner::class, car::class);
    }

    public function car(){
        return $this->hasOne(car::class);
    }

}
