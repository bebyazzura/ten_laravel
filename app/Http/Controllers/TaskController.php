<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    private $taskList = [
        'first' => 'Name',
        'second' => 'NIS',
        'third' => 'address',
    ];

    public function index(Request $request){
        
        if ($request->search){
            $tasks = Task::where('task', 'LIKE', "%$request->search%")
            ->paginate();

            return view('task.index',[
                'data' => $tasks
            ]);
        }

        $tasks =  Task::paginate(4);
        return view('task.index',[
            'data' => $tasks
    ]);

    }

    public function show($id){

        $tasks = Task::find($id);
        return ($tasks);
    }
    
    public function store(TaskRequest $request){

        // $request->validate([
             
        // ]);

        Task::create([
            'task' => $request->task,
            'user' => $request->user
        ]);

        return redirect('/task');
    }

    public function update(TaskRequest $request, $id){

        $tasks = Task::find($id);

        $tasks->update([
            'task' => $request->task,
            'user' => $request->user
        ]);
       return redirect('/task');
    }

    public function destroy($id){
       
        $tasks = Task::find($id);
        $tasks->delete();

        return redirect('/task');
    }

    public function create(){
        return view('task.create');
    }

    public function edit($id){
        $tasks = Task::find($id);
        return view('task.edit', compact('tasks'));
    }
}
