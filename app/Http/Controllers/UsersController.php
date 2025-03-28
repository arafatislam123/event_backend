<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getUsers()
    {
        // get all user 
        $users = User::all();
        return response()->json($users);
    }
    public function createUser(Request $request)
    {
        // create single user
        $request->validate([
            
            'role' => 'required'
        ]);

     
    }
}
