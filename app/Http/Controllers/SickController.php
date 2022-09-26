<?php

namespace App\Http\Controllers;

use App\Models\illness;
use App\Models\preview;
use App\Models\Sick;
use App\Models\User;
use Illuminate\Http\Request;

class SickController extends Controller
{

    public function index()
    {
        if(auth()->user()->is_admin){
            $sicks=Sick::all();
        }
        else{
            $sicks=Sick::where('user_id',auth()->user()->id)->get();
        }
        return view('sick.index',[
            'sicks'=>$sicks
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function show($id)
    {
        $preview=preview::where('sick_id',$id)->get();
        $index=Sick::findorFail($id);
        return view('sick.show',[
            'index'=>$index,
            'previews'=>$preview
        ]);
    }

    public function edit($id)
    {
        return view('sick.edit',[
            'data'=>Sick::findorFail($id),
            'doctors'=>User::all(),
            'diseases'=>illness::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name'=>'required',
            'age'=>'required|integer',
            'phone_number'=>'required',

        ]);

        $to_update=Sick::findorFail($id);
        $to_update->full_name= strip_tags($request->input('full_name'));
        $to_update->age= strip_tags($request->input('age'));
        $to_update->phone_number= strip_tags($request->input('phone_number'));
        $to_update->description= strip_tags($request->input('description'));
        $to_update->user_id= strip_tags($request->input('user_id'));
        $to_update->illness_id= strip_tags($request->input('illness_id'));
        $to_update->save();

        return redirect()->route('sick.show',$id);
//        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sick  $sick
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $to_delet=Sick::findorFail($id);
        $to_delet->delete();
        return redirect()->route('sick.index');
    }
}
