<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        // return "User ID:" .$id;
        $users = [
            1 => "Song Rotha",
            2 => "Dara",
            3 => "Sok",
        ];
        if(array_key_exists($id, $users)){
            return view('users.profile',['user' => $users[$id]]);
        } else {
            return 'User ID not Found';
        }
    }
}
