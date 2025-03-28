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
    public function getUser(Request $request,$id)
    {
        // get single user 
        $users = User::findOrFail($id);
        return response()->json($users);
    }
    public function createUser(Request $request)
    {
        // // create single user
        // $all= $request->all();
        // print '<pre>';
        // print_r ($all);
        // print '<pre>';
        // exit;
        $request->validate([
            
            'role' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user= User::create($request->all());
        return response()->json([
            'message' => 'success','data' => $user
        ]);
          
        

     
    }
    public function updateUser(Request $request,$id)
    {
        // update user
        // print_r($request->id);
        // exit;
        $request->validate([

            'role' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
           
        ]);
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json([
            'message' => 'update success',
            'data' => $user
        ]);
    }
    public function deleteUser($id)
    {
        // delete single user
        User::destroy($id);
       
        return response()->json([
            'message' => 'delete success',
            'data' => ''
        ]);
    }

}
