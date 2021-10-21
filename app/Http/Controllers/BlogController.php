<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function addPost(Request $request){
        $id = Auth::id();

        $title = $request->title;
        $description = $request->description;

        $file = $request->file('pic');
        $fileName = $file->getClientOriginalName();
        $request->file('pic')->storeAs('public/files', $fileName);

//         var_dump($fileName);
        $post = new Post;
        $post->picname = $fileName;

        $post->title = $title;
        $post->description = $description;
        $post->user_id = $id;
        $post->save();

        session()->flash('successMsg', 'پست شما ذخیره شد...');
        return back();
    }

    public function editPost(Request $request)
    {
        $id = $request->post_id;
        $post = Post::where('id',$id)->first();

        return view('edit_post', ['post' => $post]);
    }

    public function updatePost(Request $request)
    {
        $id = $request->post_id;
        $title = $request->title;
        $description = $request->description;

        $post = Post::where('id',$id)->first();

        $post->title = $title;
        $post->description = $description;
        $post->save();

        session()->flash('successMsg', 'با موفقیت بروزرسانی شد...');
        return back();
    }

    public function showPost(Request $request)
    {
        $id = $request->post_id;
        $post = Post::where('id',$id)->first();

        return view('post', ['post' => $post]);
    }

    public function index()
    {
        $posts = Post::all();

        return view('dashboard', ['posts' => $posts]);
    }



}
