<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsmenController extends Controller
{
    public function index($id){
        return view('sportsmen.index',[
            'sportsman'=>Sportsmen->find($id),
        ]);
    }
    public function create(){
        return view('sportsmen.create');
    }
    public function store(Request $request){
        $request->validate([
            'age'=>'required',
            'class'=>'max:1',
            'roleid'=>'required',
        ]);
        $sportsman=Sportsmen::create($request->all());
        $sportsman->groups()->attach($request->input('groups'));
        return redirect()->route("sportsman.index");
    }
}
