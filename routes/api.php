<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/healthcheck',function(){
    return response()->json(['message'=>'API is running']);
});

// get all users
Route::get('/users',[UsersController::class,'getUsers']);
// get single user
Route::get('/user/{id}', [UsersController::class, 'getUser']);
// create user
Route::post('/create-user', [UsersController::class, 'createUser']);
// update user
Route::put('/update-user/{id}', [UsersController::class, 'updateUser']);
// delete user
Route::delete('/delete-user/{id}', [UsersController::class, 'deleteUser']);
