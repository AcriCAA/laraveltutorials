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

// Route::get('/', function () {
//     return view('welcome');
// });


// this is setting the url from urlroot/
Route::get('/tasks', 'TasksController@index');

// this is setting the url from urlroot/
Route::get('/tasks/{task}', 'TasksController@show'); 



// this is setting the url from urlroot/
// Route::get('/tasks/', function(){
// //db call to find a row by id, returns the entire record as object
// // $task = DB::table('tasks')->find($id); 

// $tasks = App\Task::incomplete()->get(); 

// // return $tasks;

// //dd= helper function for dump and die
// // dd($tasks);


// //refers to the route folder and then the blade file name before .blade.php , compact creates the necessary array for the $tasks variable
// return view('tasks.index', compact('tasks'));


// });