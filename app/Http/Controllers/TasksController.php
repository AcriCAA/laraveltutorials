<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task; 

class TasksController extends Controller
{
   public function index(){


   	//db call to get all the rows in the tasks table using Eloquent model
$tasks = Task::all(); 

// return $tasks;


//refers to the route folder and then the blade file name before .blade.php , compact creates the necessary array for the $tasks variable
return view('tasks.index', compact('tasks'));

   }



public function show(Task $task){ // by putting Task $task in here and matching it to the wildcard {$task in routes} (Route::get('/tasks/{task}', 'TasksController@show');), Laravel is automatically running Task::find($id) or whatever wildcard 


	//db call to find a row by id, returns the entire record as object
// $task = DB::table('tasks')->find($id); 


// this is no longer needed because of the Task $task model binding above
// $task = Task::find($id); 


// return $tasks;

//dd= helper function for dump and die
// dd($tasks);


//refers to the route folder and then the blade file name before .blade.php , compact creates the necessary array for the $tasks variable
return view('tasks.show', compact('task'));

}

}
