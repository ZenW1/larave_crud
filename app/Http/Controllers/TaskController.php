<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function index (){

        $task = Task::all();



        return  view('/task',compact('task'));
    }


    public function create(){
        return view('/create');
    }

    public function store(Request $request){

        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $validator = Validator::validate($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $task = new Task();
        $task->title = request('title');
        $task->description = request('description');
        $task->priority = request('priority');
        $task->status = request('status');

        $task->save();



        return redirect('/task')->with('success', 'Task createdsuccessfully');
    }


    public function delete($id){

        $task  = Task::find($id);
        $task->delete();

        if(!$task){
            return redirect('/task')->with('error', 'Task not found');
        }

        return redirect('/task')->with('success', 'Task deleted successfully');
    }

    public function updatee($id){
        $task = Task::find($id)->update(
            [
                'title' => request('title'),
                'description' => request('description'),
                'priority' => request('priority'),
                'status' => request('status'),
            ]
        );

        if(!$task){
            return redirect('/task')->with('error', 'Task not found');
        }

        return redirect('/task')->with('success', 'Task updated successfully');
    }
}
