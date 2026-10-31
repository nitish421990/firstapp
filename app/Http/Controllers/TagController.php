<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){

        $tag=Tag::with(["posts:title,description","videos"])->find(3);
        //  return $tag;

        echo "<h1>My All Posts</h1>";
        foreach($tag->posts as $post){
            echo "<h2>$post->title</h2>";
            echo "<p>$post->description</p>";
        }
        echo "<h1>My All Videos</h1>";

        foreach($tag->videos as $video){
            echo "<h2>$video->title</h2>";
            echo "<p>$video->url</p>";
        }
    }
}
