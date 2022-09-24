<?php

namespace App\Http\Controllers;

use App\Models\illness;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class IllnessController extends Controller
{
    public function index()
    {

        return view('Illnesses.index',['illness'=>illness::all()]);
//        return illness::all();
    }


    public function create()
    {
        return view('Illnesses.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        illness::create($request->all());

        return redirect()->route('illnesses.index');

    }


    public function show(illness $illness)
    {
        //
    }


    public function edit($id)
    {
        return view('Illnesses.edit',['illness'=>illness::find($id)]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $aa = illness::findOrFail($id);
        $aa->name=$request->input('name');
        $aa->save();

        return redirect()->route('illnesses.index');
//        return $id;
    }


    public function destroy($id)
    {
        $to_delete=illness::findorFail($id);
        $to_delete->delete();
        return redirect()->route('illnesses.index');
    }
}
