<?php

namespace App\Http\Controllers;

use App\Models\illness;
use App\Models\Sick;
use App\Models\User;
use Illuminate\Http\Request;

class general extends Controller
{
    public function create()
    {
        $doctors=User::all();
        $diseases=illness::all();
        return view('sick.create',[
            'doctors'=>$doctors,
            'diseases'=>$diseases
        ]);

    }


    public function store(Request $request)
    {
        $request->validate([
            'full_name'=>'required',
            'age'=>'required|integer',
            'phone_number'=>'required',

        ]);

        $add=new Sick();
        $add->full_name= strip_tags($request->input('full_name'));
        $add->age= strip_tags($request->input('age'));
        $add->phone_number= strip_tags($request->input('phone_number'));
        if(auth()->user()){
            $add->illness_id= strip_tags($request->input('illness_id'));
        }else{
            $add->illness_id=1;
        }
        if(auth()->user()){
            $add->user_id= strip_tags($request->input('user_id'));
        }else{
            $add->user_id=2;
        }
        $add->description= '00';
        $add->save();

        return view('sick.ok');
//        return $request;
    }
}
