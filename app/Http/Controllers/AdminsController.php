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



    /* Creating a new post */


    /*
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
    */

    public function store(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required|string',
            'subTitle' => 'required|string',
            'body' => 'required|string',
            'file' => 'image'
        ]);

        $post->title = $request->title;
        $post->subTitle = $request->subTitle;
        $post->body = $request->body;
        $img = $request->file('file');
        $img->move(public_path('/img'), $img->getClientOriginalName());
        $post->img = "img/" . $img->getClientOriginalName();
        $post->save();

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
       	unlink(public_path('/') . $post->img);
       	$post->delete();
        return redirect('/delete');
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


}
