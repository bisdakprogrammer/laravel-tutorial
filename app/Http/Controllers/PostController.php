<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Request $request) {

        $auth = auth()->user();

        $posts = Post::where('user_id', $auth->id)
            ->orderBy('id', 'desc')
            ->get();

        $postsTrashed = Post::where('user_id', $auth->id)
            ->onlyTrashed()->get();

        return view('posts.index', [
            'id' => $request->id,
            'posts' => $posts,
            'postsTrashed' => $postsTrashed,
        ]);
    }

    public function create(Request $request) {
        return view('posts.create');
    }

    public function edit(Request $request, Post $post) {
        return view('posts.edit',[
            'id' => $post->id,
            'post' => $post
        ]);
    }

    public function store(Request $request) {
        // dd($request->description);
        // dd($request->title);
        // dd($request->all());

        $post = new Post();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = Auth::id();


        $post->save();


        return redirect()->route('posts.index')->with([
            'message' => 'Post has been saved.'
        ]);
//        return redirect()->back()->with([
//            'message' => 'Post has been saved'
//        ]);
    }

    public function update(Request $request, Post $post) {

        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy(Request $request, Post $post) {
        $post->delete();

        return redirect()->back()->with([
            'message' => 'Post has been deleted.'
        ]);
    }

    public function restore(Request $request, $id) {

        $post = Post::onlyTrashed()->find($id);

        $post->restore();

        return redirect()->back()->with([
            'message' => 'Post has been restored.'
        ]);
    }

    public function forceDelete(Request $request, $id) {
        $post = Post::onlyTrashed()->find($id);

        $post->forceDelete();

        return redirect()->back()->with([
            'message' => 'Post has been completely deleted.'
        ]);
    }

}
