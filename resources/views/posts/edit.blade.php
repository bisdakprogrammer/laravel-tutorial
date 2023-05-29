

@extends('layouts.app')

@section('content')
    <p>This is the edit body {{ $id }}</p>


    <form action="{{route('posts.update', $post->id)}}" method="post">

        {{csrf_field()}}
        {{method_field('PATCH')}}

        <label>Title</label> <br />
        <input type="text" name="title" value="{{$post->title}}" />

        <br />
        <br />

        <label>Description</label> <br />
        <textarea name="description" >{{$post->description}}</textarea>

        <br />
        <br />

        <button type="submit">Update</button>
    </form>

@endsection


