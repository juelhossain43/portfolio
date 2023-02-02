<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $portfolios= Portfolio::all();
        return view('pages.services.list',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'icon'=>'required|string',
            'title'=>'required|string',
            'description'=>'required'
        ]);
        $service= new Service;
        $service->icon=$request->icon;
        $service->title=$request->title;
        $service->description=$request->description;

        $service->save();
        flash()->addSuccess('New Service Create Successfully');

        return redirect()->route('pages.services.create');
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
        $service=Service::find($id);
        return view('pages.services.edit',compact('service'));
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
        $this->validate($request,[
            'icon'=>'required|string',
            'title'=>'required|string',
            'description'=>'required'
        ]);
        $service= Service::findOrFail($id);
        $service->icon=$request->icon;
        $service->title=$request->title;
        $service->description=$request->description;

        $service->save();
        flash()->addSuccess('Service Update Successfully');

        return redirect()->route('pages.services.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $service= Service::findOrFail($id);
        $service->delete();

        flash()->addDeleted('Service Delete Successfully');

        return redirect()->route('pages.services.list');
    }
}
