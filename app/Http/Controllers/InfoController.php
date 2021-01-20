<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class InfoController extends Controller
{
    public function index(){
        $infos = Info::all();
        return view('index')->with('infos',$infos);
    }
    public function adddata(){

        return view('addData');
    }

    public function store(Request $request){
        // Check Validation

        $this->validate($request,[
            'registration_id' => 'required | integer',
            'name' => 'required | string',
            'department_name' => 'required | string',
            'info' => 'nullable | string',
        ]);

        //store Data
        $infos = new Info();
        $infos->registration_id = $request->registration_id;
		$infos->name = $request->name;
        $infos->department = $request->department_name;
        $infos->info = $request->info;
        $infos->save();
        return redirect('/');

    }

    public function form(){

        return view('form');
    }

    public function test(){

        dd('Successfull');
    }
}
