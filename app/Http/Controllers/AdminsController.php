<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{



    public function create()
    {
        return view('create');
    }



    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'subTitle' => 'required',
            'body' => 'required',
            'img' => 'required'
        ]);

        Post::create(request(['title', 'subTitle', 'body', 'img']));

        return redirect('/blog');

    }


    public function showDelete()
    {

        $posts = Post::all();
        return view('delete', compact('posts'));
    }


    public function delete($id)
    {
       	$post = Post::find($id);
       	$post->delete();
        return redirect()->route('home');
    }


    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit', compact('post'));

    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->subTitle = $request->subTitle;
        $post->body = $request->body;
        $post->img = $request->img;
        $post->update();

        return redirect('/');
    }
}
