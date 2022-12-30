<?php

namespace App\Http\Controllers;

use App\Models\Task;
 use Illuminate\Http\Request;
 use DB;

class TaskController extends Controller
{
    //

    public function select(){
        $data = DB::table('tasks')->orderBy('id','asc')->paginate(5);
        // $data = task::all()->orderBy('id', 'asc')->get();
        return view ('index', compact("data"));
    }

    public function add(){
        return view('addTask');
    }

    public function AddTask(Request $request){
        $task = new Task();
        $task->task = $request->task;
        $task->save();
        return redirect('index');

    }

    public function deleteTask($id){
        $task = Task::find($id); 
        $task->delete();
        return redirect('index');
    }

    
    public function updatetask($id){
        $task = new Task();
        $updatetask = $task::where('id', $id)->get();
        return view('updatetask', compact('updatetask'));
    }

    public function actionupdate (Request $request,$id){
        $task = Task::where('id',$id)->first();
        $task->task = $request->task;
        $task->save();
        return redirect('index');
    
    }


    public function filtrer(Request $request){
        $data = DB::table('tasks')->select()
        ->where('created_at','>=', $request->datedebut)
        ->where('created_at','<=', $request->datefin)
        ->get();
        return view('index', compact("data"));;
    }

}


