<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Task;




Route::get('/tasks',function() {
    
      
        
        return view('tasks', ['tasks' => Task::all()]);
    
    });


Route::get('/tasks/{id}',function($id) {

    
    
    $task = Task::find($id);

    return view('task' , ['task' => $task]);

});

Route::get('/', function () {
    return view('about');
});

Route::get('/contact', function () {

    $tasks=Task::all();
    dd($tasks);

});