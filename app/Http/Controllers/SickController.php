<?php

namespace App\Http\Controllers;

use App\Models\illness;
use App\Models\preview;
use App\Models\Sick;
use App\Models\User;
use App\Notifications\newpreview;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SickController extends Controller
{

    public function index(Request $request)
    {

        $users=User::find(auth()->user()->id);
        $illnesses=illness::all();
        $doctors=User::all();
//        foreach ($users->unreadNotifications as $notification){
//            $notification->markAsRead();
//        }
if(auth()->user()->is_admin){
    if($request->filter==0){
        if($request->filter_doctor==0){
            $sicks=Sick::all();
        }else{
            $sicks=Sick::where('user_id',$request->filter_doctor)->get();
        }
    }else{
        if($request->filter_doctor==0){
            $sicks=Sick::where('illness_id',$request->filter)->get();
        }else{
            $sicks=Sick::where('illness_id',$request->filter)->where('user_id',$request->filter_doctor)->get();
        }
    }
}else{
    if($request->filter==0){
        $sicks=Sick::where('user_id',auth()->user()->id)->get();
    }else{
        $sicks=Sick::where('illness_id',$request->filter)->where('user_id',auth()->user()->id)->get();
    }
}
        
        return view('sick.index',[
            'sicks'=>$sicks,
            'illnesses'=>$illnesses,
            'doctors'=>$doctors,
        ]);
//        return $request->felter;
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
//        $getID=DB::table('notification')->where('data->id',$id)->pluck('id');
//        DB::table('notification')->where('id',$getID)->update(['read_at'=>now()]);
        return view('sick.show',[
            'index'=>$index,
            'previews'=>$preview
        ]);
//        return $index->id;
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

        $users=User::find($to_update->user_id);
        $user_create=auth()->user()->name;
        \Illuminate\Support\Facades\Notification::send($users,new newpreview($to_update->id,$user_create,$to_update->full_name));

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
