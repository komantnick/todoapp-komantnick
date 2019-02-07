<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class TasksController extends Controller
{
    public function index()
    {
        return Tasks::all();
    }
 
    public function show($id)
    {
        return Tasks::find($id);
    }

    public function store(Request $request)
    {
        //     $task=new Tasks;
//     $task->name = $request->name;
//     $task->save();
        // print_r($request);
        // exit;
        return Tasks::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $task = Tasks::findOrFail($id);
        $task->update($request->all());

        return $task;
    }

    public function delete(Request $request, $id)
    {
        $task = Tasks::findOrFail($id);
        $task->delete();

        return 204;
    }
}
