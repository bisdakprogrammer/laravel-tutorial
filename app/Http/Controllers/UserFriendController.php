<?php

namespace App\Http\Controllers;

use App\Models\UserFriend;
use Illuminate\Http\Request;

class UserFriendController extends Controller
{
    public function store(Request $request) {

       $exists = UserFriend::where([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
        ])->orWhere([
            'sender_id' => $request->receiver_id,
            'receiver_id' => auth()->id(),
        ])->exists();


       if($exists) {
           return redirect()->back()->with([
               'message' => 'You are already in friends circle'
           ]);
       }


        $userFriend = new UserFriend();

        $userFriend->sender_id = auth()->id();
        $userFriend->receiver_id = $request->receiver_id;
        $userFriend->save();

        return redirect()->back()->with([
            'message' => 'Friend request has been sent'
        ]);
    }
}
