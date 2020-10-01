<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/channels', function()  {
    return view('channels');
});

Route::get('/todos', function()  {
    $data = [
        "title" => "Fun stuff",
        "todos" => ["Watch Netflix", "Listen to music", "Read a book"]
    ];
    return view('todos', $data);
});

Route::get('/users', function()  {
    $user = \DB::table('users')->get();
    dd($user);
});
