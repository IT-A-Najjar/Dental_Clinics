<?php

namespace App\Http\Controllers;

use App\Models\illness;
use App\Models\Sick;
use App\Models\User;
use App\Notifications\newpreview;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

//use Illuminate\Notifications\Notification;

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
            'full_name' => 'required',
            'age' => 'required|integer',
            'phone_number' => 'required',

        ]);

        $add = new Sick();
        $add->full_name = strip_tags($request->input('full_name'));
        $add->age = strip_tags($request->input('age'));
        $add->phone_number = strip_tags($request->input('phone_number'));
        if (auth()->user()) {
            $add->illness_id = strip_tags($request->input('illness_id'));
        } else {
            $add->illness_id = 1;
        }
        if (auth()->user()) {
            $add->user_id = strip_tags($request->input('user_id'));
        } else {
            $add->user_id = 28;
        }
        $add->description = '00';
        $add->save();


        if (auth()->user()) {
            if (auth()->user()->is_admin) {
                $users = User::find($add->user_id);
            } else {
                $users = User::where('is_admin', 1)->get();
            }

            $user_create = auth()->user()->name;
        } else {
            $users = 1;
            $user_create = "مريض حديد";
        }

//        Notification::send($users, new newpreview($add->id, $user_create, $add->full_name));
        if (auth()->user()) {
            $request->session()->flash('ok','تم تاكيد حجزك بنجاح');
            return redirect()->route('sick.index');
        }
        $request->session()->flash('ok','تم تاكيد حجزك بنجاح');
        return view('welcome',[
            'preview'=>\App\Models\preview::all(),
            'doctor'=>\App\Models\User::all(),
            'sick'=>Sick::all(),
        ]);
    }}
