<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $user = User::create(["username" => $request->username, "email" => $request->email]);
        return $user;
    }

    public function show(User $user)
    {
        return User::findOrFail($user->_id);
    }
}
