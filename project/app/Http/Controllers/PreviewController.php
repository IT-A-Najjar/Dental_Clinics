<?php

namespace App\Http\Controllers;

use App\Models\illness;
use App\Models\preview;
use App\Models\Sick;
use App\Models\User;
use Illuminate\Http\Request;

class PreviewController extends Controller
{

    public function index(Request $request)
    {
//        $preview=preview::all();
        $illnesses=illness::all();

        /** @var TYPE_NAME $request */
        if($request->filter==0){
            $preview=preview::all();
        }else{
            $preview=preview::where('illness_id',$request->filter)->get();
        }

        return view('preview.index',[
            'preview'=>$preview,
            'illnesses'=>$illnesses,
        ]);
    }


    public function create()
    {
        $data=Sick::where('user_id',auth()->user()->id)->get();
        return view('preview.create',[
            'data'=>$data
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
           'sick_id'=>'required|integer',
            'description'=>'required'
        ]);
        preview::create([
            'sick_id'=> strip_tags($request->input('sick_id')),
            'description'=>strip_tags($request->input('description')),
            'illness_id'=>Sick::find($request->input('sick_id'))->illness->id
        ]);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\preview  $preview
     * @return \Illuminate\Http\Response
     */
    public function show(preview $preview)
    {
        //
    }


    public function edit($id,preview $preview)
    {

        // $data=Sick::where('user_id',auth()->user()->id)->get();
        $data=Sick::find($id);

        return view('preview.create',[
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\preview  $preview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, preview $preview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\preview  $preview
     * @return \Illuminate\Http\Response
     */
    public function destroy(preview $preview)
    {
        //
    }
}
