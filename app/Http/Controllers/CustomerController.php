<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;

class CustomerController extends Controller
{
    public function index(){

      $customers=Customer::with("orders")->with("latestOrder")->get();
      return $customers;

    }
}
