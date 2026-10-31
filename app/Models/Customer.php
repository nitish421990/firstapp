<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Order;


class Customer extends Model
{


public function orders(){
    return $this->hasMany(Order::class);
}

  public function latestOrder(){
    return $this->hasOne(Order::class)->latestOfMany();
  }

   public function oldestOrder(){
    return $this->hasOne(Order::class)->oldestOfMany();
  }

   public function largestOrder(){
    return $this->hasOne(Order::class)->ofMany("amount","max");
   }

   public function smallestOrder(){
    return $this->hasOne(Order::class)->ofMany("amount","min");
   }

}
