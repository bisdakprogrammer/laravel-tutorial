
@extends('layouts.app')

@section('content')
    <h4>Feeds</h4>

    <ul>
        @foreach($posts as $post)
            <li>
                <b> {{$post->title}} </b>

                <p>   {{$post->description}}  </p>

                <em>Posted By: {{$post->user->name}} </em>
            </li>
        @endforeach
    </ul>


    {{$posts->links()}}


@endsection
