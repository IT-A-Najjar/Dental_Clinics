<?php

namespace App\Http\Controllers;

use App\Models\illness;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class IllnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        return view('Illnesses.index',['illness'=>illness::all()]);
//        return illness::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Illnesses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        illness::create($request->all());

        return redirect()->route('illnesses.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\illness  $illness
     * @return \Illuminate\Http\Response
     */
    public function show(illness $illness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\illness  $illness
     * @return \Illuminate\Http\Response
     */
    public function edit(illness $illness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\illness  $illness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, illness $illness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\illness  $illness
     * @return \Illuminate\Http\Response
     */
    public function destroy(illness $illness)
    {
        //
    }
}
