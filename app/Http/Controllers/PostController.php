<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create(){
        $title="third some test title ";

        Post::create([
            "title"=>$title,
            "description"=> "third some test title description",
            "user_id"=>3
        ]);



        $post =Post::find(24);
        $post->description="third test";
        $post->saveQuitely();



    }
}
