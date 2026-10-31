<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function CreateProfile()
    {
        $user = User::find(2);

        $profile = new Profile();
        $profile->phone = 9632587410;
        $profile->address = "delhi";
        $user->Profile()->save($profile);
    }

    public function showProfilesData()
    {
        $profile = Profile::withWhereHas("user",function($query){
            $query->where("name","Rahul Kumar");

        })->get();
        return $profile;
    }
}
