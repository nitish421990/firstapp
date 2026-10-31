<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;

class MechanicController extends Controller
{

    public function index()
    {
        $AllData = Mechanic::with("car")->with("owner")->get();

        foreach($AllData as $data){

        echo "Mechanic Name: " . $data->name . "<br>";
        echo "Car Name: " . $data->car->name . "<br>";
        echo "Owner Name: " . $data->owner->name . "<br>";
        echo "<hr>";
        }

        // return $data;
    }
}
