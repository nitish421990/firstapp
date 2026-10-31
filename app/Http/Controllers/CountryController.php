<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\country;
use App\Models\user;

class CountryController extends Controller
{
    public function index(){

      $data =country::with("users")->with("posts")->get();
      return $data;
    }
}
