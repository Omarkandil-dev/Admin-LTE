<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //
    
    public function select(){
        $data = Promotion::orderBy('id','asc')->paginate(5);
        return view ('promotions.index', compact("data"));
    }

    public function add(){
        return view('addTask');
    }

    public function AddTask(Request $request){
        $task = new Promotion();
        $task->name = $request->name;
        $task->save();
        return redirect('index');

    }

    public function deleteTask($id){
        $task = Promotion::find($id); 
        $task->delete();
        return redirect('index');
    }

    
    public function updatetask($id){
        $task = new Promotion();
        $updatetask = $task::where('id', $id)->get();
        return view('updatetask', compact('updatetask'));
    }

    public function actionupdate (Request $request,$id){
        $task = Promotion::where('id',$id)->first();
        $task->name = $request->name;
        $task->save();
        return redirect('index');
    
    }


    public function filtrer(Request $request){
        // $data = DB::table('tasks')
        // ->where('created_at','>=', $request->datedebut)
        // ->where('created_at','<=', $request->datefin)->orderBy('id','asc')->paginate(5);
        $data =
        Promotion::where('created_at','>=', $request->datedebut)
        ->where('created_at','<=', $request->datefin)->paginate(5);
        // return dd($data);
        return view('index', compact("data"));
    }
}
