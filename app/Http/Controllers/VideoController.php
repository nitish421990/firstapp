<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
     public function create(){
      $video = Video::find(3);

      $video->tags()->sync([3,5]);
    }
}
