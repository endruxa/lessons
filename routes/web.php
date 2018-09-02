<?php

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

/*Route::get('/', function () {
    return view('welcome');*/
Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show')->name('post');

Route::get('send', 'MailController@send');
/*Route::get('/users/{id}', function () {
   //return \App\User::findOrFail($id);
    //return DB::table('users')->get();
    $users = \App\User::all();
    return view('user', compact('users'));
});*/

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('');*/