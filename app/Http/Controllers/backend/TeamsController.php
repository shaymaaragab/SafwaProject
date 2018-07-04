<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\TeamRequest;
use App\models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamsController extends AbstractController
{

    public function __construct(Team $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $teams = $this->model->all();
        return View('backend.team.index' , compact('teams'));
    }


    public function add(){

        return view('backend.team.add');

    }

    public function create(TeamRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('TeamsIndex');
    }

    public function edit($id){

        $team = $this->model->find($id);
        return view('backend.team.edit', compact('team'));
    }

    public function update($id, TeamRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('TeamsIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('TeamsIndex');
    }

}
