<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Role;

class SportsmenController extends Controller
{
    public function index(){
        return view('sportsmen.index',[
            'users'=>Sportsmen->all()->sortBy('name'),
        ]);
    }
    public function create(){
        return view('sportsmen.create');
    }
    public function edit($sport){
        return view('sportsmen.edit',[
            'sportsman'=>$sport,
        ]);
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
