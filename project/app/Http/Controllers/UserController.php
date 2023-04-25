<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('users.users',['users'=>User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_user(Request $request)
    {
//        $user=new User();
        // if($request->img){
        //     $image = $request->file('img')->getClientOriginalName();
        //     $path = $request->file('img')->storeAs('doctor',$image,'aa');
        // }else{
        //     $path='doctor/doctor.png';
        // }
        if($request->img==1){
            $path='doctor/male.png';
        }else{
            $path='doctor/female.png';
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin'=>$request->is_admin,
        ]);
        $user->photo=$path;
        $user->save();
        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('users.edit',[
            'data'=>User::findorFail($id),
        ]);
    }


    public function update(Request $request, $id)
    {
        $user_update=User::findorFail($id);
        // $image_update = $request->file('img')->getClientOriginalName();
        // $path_update = $request->file('img')->storeAs('doctor',$image_update,'aa');
        if($request->img==1){
            $path_update='doctor/male.png';
        }else{
            $path_update='doctor/female.png';
        }
        $user_update->name= strip_tags($request->input('name'));
        $user_update->email= strip_tags($request->input('email'));
        $user_update->password= strip_tags(Hash::make($request->input('password')));
        $user_update->is_admin=strip_tags($request->input('is_admin'));
        $user_update->photo=$path_update;
        $user_update->save();
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $to_delet=User::findorFail($id);
        $to_delet->delete();
        return redirect()->route('users');
    }
}
