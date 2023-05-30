
@extends('layouts.app')

@section('content')

    <h4>People</h4>

    <div style="color:green">
        {{session('message')}}
    </div>



    <ul>
        @foreach($users as $user)
            <li>
                <b> {{$user->name}} </b>
                <em> Joined: {{$user->created_at}} </em>

                <form action="{{route('users-friend.store')}}" method="post">
                    @csrf

                    <input type="hidden" name="receiver_id" value="{{$user->id}}" />
                    <button class="btn btn-default" style="border:1px solid grey" >Add Friend</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{$users->links()}}
@endsection
