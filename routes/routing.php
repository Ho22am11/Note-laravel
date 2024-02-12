<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\fornt\UserController;



// route parameters


Route::get('/requre/{$id}', function () {
    return view('welcome');
});


Route::get('/non-requre/{$id?}', function () {
    return view('welcome');
});


// namespace and route

Route::namespace('fornt')->group(function(){
    // for route work on controller exsit in fornt
    Route::get('users' , [UserController::class ,'showname']);
});


// perfix route
//you url like this http://127.0.0.1:8000/user/x
Route::prefix('user')->namespace('fornt')->group(function(){
    Route::get('/' , [UserController::class ,'showname']);
    Route::get('show' , [UserController::class ,'showname']);
    Route::get('store' , [UserController::class ,'store']);
    Route::get('edit' , [UserController::class ,'edit']);
});


// or for best
Route::group([ 'prefix' => 'user' , 'namespace' => 'fornt'], function(){
     
    // all route
});





