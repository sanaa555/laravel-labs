<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        $users= User::all();

    // $posts=DB::table('posts')->get();
        return view("welcome",["users"=>$users]);
    }

}
