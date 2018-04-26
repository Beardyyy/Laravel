<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AdminsController extends Controller
{



    public function create()
    {
        return view('create');
    }


    /* Creating a new post */

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

    /* Rendering all posts */

    public function showDelete()
    {

        $posts = Post::all();
        return view('delete', compact('posts'));
    }


    /* Deleting chosen post */

    public function delete($id)
    {
       	$post = Post::find($id);
       	$post->delete();
        return redirect()->route('home');
    }


    /* Loging out */

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }


    /* Renderig chosen post */

    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit', compact('post'));

    }


    /* Updating data for specific post */

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



    public function form()
    {
        return view('upload');
    }


    /* Uploading photo */

    public function storeImg(Request $request)
    {
        $img = $request->file('file');
        $imgName = $img->getClientOriginalName();
        $path = public_path('/img');
        $img->move($path, $imgName);
        return redirect('/blog');

    }
}
