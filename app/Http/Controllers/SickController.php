<?php

namespace App\Http\Controllers;

use App\Models\illness;
use App\Models\Sick;
use App\Models\User;
use Illuminate\Http\Request;

class SickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors=User::all();
        $diseases=illness::all();
        return view('sick.create',[
            'doctors'=>$doctors,
            'diseases'=>$diseases
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $add=new Sick();
        $add->full_name= strip_tags($request->input('full_name'));
        $add->age= strip_tags($request->input('age'));
        $add->phone_number= strip_tags($request->input('phone_number'));
        $add->are_you_reviewer= strip_tags($request->input('are_you_reviewer'));
        $add->illness_id= strip_tags($request->input('illness_id'));
        $add->user_id= strip_tags($request->input('user_id'));
        $add->save();

        return redirect()->route('sick.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sick  $sick
     * @return \Illuminate\Http\Response
     */
    public function show(Sick $sick)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sick  $sick
     * @return \Illuminate\Http\Response
     */
    public function edit(Sick $sick)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sick  $sick
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sick $sick)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sick  $sick
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sick $sick)
    {
        //
    }
}
