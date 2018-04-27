<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class Posts extends Controller
{



    public function index()
    {
        return view('index');
    }



    public function showAbout()
    {
        return view('about');
    }



    public function showBlog()
    {
        $posts = Post::latest()->get();
        return view('blog', compact('posts'));
    }


    public function showBlogId(Post $post)
    {

        return view('blogId', compact('post'));
    }



    public function showContact()
    {
        return view('contact');
    }

}
