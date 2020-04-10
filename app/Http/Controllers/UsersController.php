<?php

namespace App\Http\Controllers;

use App\Users;

class UsersController extends Controller
{
    public function index(){
        $users = Users::with()->get();

        return view('users.users', ['users' => $users]);
    }
}
