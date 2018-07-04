<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersmanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return View('backend.users' , compact('users'));
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
    public function store(Request $request)
    {
       
        $user =  $request->all();
        if(!empty($user['logo'])){$user['logo'] = $this->uploadquestimage($user['logo']);}else{$user['logo'] = "uploads/defualt.jpg";}
         $user['password'] = bcrypt('123456');
         User::create($user);
        return back();
    }
    public function uploadquestimage($file){
        $extention = $file->getClientOriginalExtension();
        $md5       = MD5($file->getClientOriginalName());
        $filename  = date('D-M-Y')."_".$md5.".".$extention;
        $path      = public_path('uploads/');
        
        $file->move($path , $filename);
        
        return 'uploads/'.$filename;
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         User::findOrFail($id)->delete();
         return back();

    }
}
