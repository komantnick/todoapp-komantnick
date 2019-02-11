<?php

use Illuminate\Http\Request;

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


// routes

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/', function () {
//     $tasks= \App\Tasks::OrderBy('created_at','asc')->get();
//     return view('tasks',[
//         'tasks'=>$tasks

//     ]);
// });

// Route::post('/task', function (Request $request) {
//     $validator= Validator::make($request->all(),[
//         'name'=>'required|max:255'
//     ]);
//     if ($validator->fails()){
//         return redirect('/')->withInput()->withErrors($validator);
//     }
//     $task=new \App\Tasks;
//     $task->name = $request->name;
//     $task->save();
//     return redirect('/');
// });

// Route::delete('/task/{{task}}', function (\App\Tasks $task) {
//     $task->delete();
//     return redirect('/');
// });