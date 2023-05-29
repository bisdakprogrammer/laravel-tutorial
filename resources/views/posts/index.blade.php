
@extends('layouts.app')

@section('content')
    @if(session('message'))
        <p style="color:green; font-weight: bold">{{session('message')}}</p>
    @endif

    <h4>New Posts</h4>

    <ul>
        @foreach($posts as $post)
            <li>
                <b>{{$post->id}}</b>
                <b> {{$post->title}} </b>
                <br>

                <p>   {{$post->description}}  </p>

                <a href="{{route('posts.edit', [$post->id])}}" >
                    Edit
                </a>


                <form action="{{route('posts.destroy', $post->id)}}" method="post" >

                    {{csrf_field()}}
                    {{method_field('DELETE')}}

                    <button type="submit"
                            style="background-color:red; color:white; cursor: pointer">
                        Delete
                    </button>
                </form>
                <br>

                <em>Posted By: {{$post->user->name}} </em>

                <hr>
            </li>
        @endforeach
    </ul>

    <hr>

    <h4>Trashed Posts</h4>

    <ul>
        @foreach($postsTrashed as $pt)
            <li>
                <b>
                    {{$pt->title}}
                </b>
                <p>
                    {{$pt->title}}
                </p>


                <form action="{{route('posts.restore', $pt->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <button type="submit">
                        Restore
                    </button>
                </form>

                <form action="{{route('posts.force-delete', $pt->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}

                    <button type="submit">
                        Force delete
                    </button>
                </form>

            </li>
        @endforeach
    </ul>

@endsection
