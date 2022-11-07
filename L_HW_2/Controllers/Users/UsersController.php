<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public  function index(){

       return view('users.index');
    }

    public  function auth(){

        return view('users.auth');
    }
}
