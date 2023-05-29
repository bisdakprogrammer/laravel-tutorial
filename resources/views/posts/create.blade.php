

@extends('layouts.app')

@section('content')


    <p>Create post</p>

    <div style="color:green">
        {{session('message')}}
    </div>

    <form action="{{route('posts.store')}}" method="post">

        {{csrf_field()}}

        <label>Title</label> <br />
        <input type="text" name="title" />

        <br />
        <br />

        <label>Description</label> <br />
        <textarea name="description" > </textarea>

        <br />
        <br />

        <button type="submit">Post</button>
    </form>

@endsection
