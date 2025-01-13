<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    
    public function index(){
        $tasks = Task::where('is_important', false)
                     ->where('is_completed', false)
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);

        return view('/tasks/index', ['tasks' => $tasks]);
    }

    public function create(){

        return view('/tasks/create');
    }

    public function update(){
        
    }

    public function store(){
        
    }

    public function destory(){
        
    }

    
    public function ongoingTask(){

        $ongoing_task = Task::where('task_status', 'ongoing')
                      ->where('is_completed', false)
                      ->get();

        return view('/tasks/ongoing', ["ongoingTasks" => $ongoing_task]);
    }

    
    public function completedTask(){

        $completed_task = Task::where('is_completed', true)->get();

        return view('/tasks/completed', ['completedTasks' => $completed_task]);
    }

    public function updateCompletedTask(Task $task){

        $task->update([
            'is_completed' => true
        ]);

        return redirect()->back();
    }


    public function importantTask(){

        $important_task = Task::where('is_important', true)
                        ->where('is_completed', false)
                        ->get();

        return view('/tasks/important',["importantTasks" => $important_task]);
    }

    public function updateImportantTask(Task $task){
        
        $task->update([
            'is_important' => true
        ]);

        return redirect(route('tasks.index'));
    }
}
