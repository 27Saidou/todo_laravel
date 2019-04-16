<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;
use Session;
use Auth;

class TodoController extends Controller
{
    //retouner la vue todo
    public function index(){
        $todos = Auth::user()->todos()->orderBy('created_at','desc')->paginate(5);
        return view('todo')->with('todos',$todos);
    }
    //creation de notre methode save
    public function save(Request $request){
        $this->validate($request,[
            'name'=>'required|min:5'
        ]);
        $todo=new Todo;
        $todo->name=$request->name;
        $todo->user_id = Auth::id();
        $todo->save();
        Session:: flash('success','Todo ajoutés avec success');
        return redirect()->back();
    }
    //creation de la methode de mise a jour
    public function edit($id){
        $todo=Todo::find($id);
        return view('edit')->with('todo',$todo);
    }
    //creation de notre methode update
    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|min:5'
        ]);
        $todo=Todo::find($id);
        $todo->name=$request->name;
        $todo->update();
        Session::flash('success','Todo modifier avec success');
        return redirect()->route('todos');
    }
    //creation de la methode de suppression
    public function delete($id){
        $todo= Todo::find($id);
        $todo->delete();
        Session::flash('success','Todo supprimer avec success');
        return redirect()->back();
    }
}
