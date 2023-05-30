<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function people(Request $request) {
        $users = new User();

        $users = $users->whereNot('id', auth()->id())->paginate(10);

        return view('users.people',[
            'users' => $users
        ]);
    }
}
