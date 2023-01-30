<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class MainPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main=Main::first();
        return view('pages.main',compact('main'));
    }



    public function update(Request $request)
    {

        $this->validate($request,[
            'title'=>'required|string',
            'sub_title'=>'required|string'
        ]);
        $main=Main::first();
        $main->title=$request->title;
        $main->sub_title=$request->sub_title;

        if ($request->file('bg_img')){
            $img_file=$request->file('bg_img');
            $img_file->storeAs('public/img/','bg_img.'. $img_file->getClientOriginalExtension());
            $main->bg_img='storage/img/bg_img.'.$img_file->getClientOriginalExtension();

        }
        if ($request->file('resume')){
            $pdf_file=$request->file('resume');
            $pdf_file->storeAs('public/pdf/','resume.'. $pdf_file->getClientOriginalExtension());
            $main->resume='storage/pdf/resume.'.$pdf_file->getClientOriginalExtension();

        }

        $main->save();
        flash()->addSuccess('Upadate Successfully');

        return redirect()->route('pages.main');
        //return 'abd';


    }
}
