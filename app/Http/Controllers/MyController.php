<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class MyController extends Controller
{
    public function index()
    {   
        $posts = Post::all();
        $title = 'XZY home page';
        $description = "Lập trình website, blog cơ bản nhất cho người mới bắt đầu,chi tiết từ Z đến A";
        return view('welcome')->with(['title'=>$title,'posts'=> $posts ,'description'=>$description]);
    }
    
    
}
