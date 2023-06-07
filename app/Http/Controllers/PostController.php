<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::first();

        $post = $user->posts()->create();

        $post->title = '11111111';
        $post->description = 'teste111';
        $post->save();

        echo "created by " . $post->user->name;


        echo "<br>";

        foreach($user->posts()->get() as $post) {
            echo " posts $post->id and title $post->title <br>";
        }



        echo "post retrieve <br>";


        $post = Post::first();


        echo "created by " . $post->user->name;




    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
