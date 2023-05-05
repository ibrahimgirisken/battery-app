<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getUsers(){
        return view('backend.users.users');
    }
    public function userAdd(){
        return view('backend.users.user-add');
    }
    public function userEdit(){
        return view('backend.users.user-edit');
    }
}
