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
use Illuminate\Http\Request;

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

//Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show')->name('post');

/*Route::get('/send', 'MailController@send');
Route::get('/users/{id}', function () {
   //return \App\User::findOrFail($id);
    //return DB::table('users')->get();
    $users = \App\User::all();
    return view('user', compact('users'));
});*/


Route::get('/', function () {
    $tasks = \App\Task::orderBy('created_at', 'desc')->get();
    return view('tasks',
        [
            'tasks' => $tasks
        ]);
});


Route::post('/task', function (Request $request) {

    $validator = Validator::make($request->all(),
        [
            'name' => 'required|min:2|max:255'
        ]);
    if ($validator->fails()) {
        $request->flash();
        return redirect('/')->withInput()->withErrors($validator);
    }
    $task = new \App\Task;
    $task->name = $request->name;
    $task->save();
    return redirect('/');
});


Route::delete('/task/{task}', function (\App\Task $task) {
    $task->delete();
    return redirect('/');
});

