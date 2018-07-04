<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends AbstractController
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $users = $this->model->all();
       return View('backend.user.index' , compact('users'));
    }


    public function add(){

        $add = "add";

        return view('backend.user.add' , compact('add'));

    }

    public function create(UserRequest $request){
        $request['password'] = bcrypt($request['password']);
        
        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('UserIndex');
    }

    public function edit($id){

        $user = $this->model->find($id);
        return view('backend.user.edit', compact('user'));
    }

    public function update($id, UserRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('UserIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('UserIndex');
    }
    public function restpassword($id){
        $password = bcrypt(123456);
        $user = User::find($id);
        $user->update(['password' => $password]);
        return redirect()->route('UserIndex');
    }
}