<?php

namespace App\Http\Controllers\frontend;

use App\models\Applicant;
use App\models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\AbstractController;

use App\Http\Controllers\Controller;

class CareerController extends AbstractController
{
    public function __construct(Applicant $model)
    {
        parent::__construct($model);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang=\Request::segment(1);
        $jobs=Job::paginate(5);
        return view('frontend.'.$lang.'.career',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->addOrUpdate(null  , $request->all());
        return redirect()->back();
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
        //
    }
    public function view($id)
    {
        $lang=\Request::segment(1);
        $job=Job::find($id);
        return view('frontend.'.$lang.'.careers_page',compact('job'));

    }

}