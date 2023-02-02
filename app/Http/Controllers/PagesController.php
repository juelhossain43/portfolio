<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $main= Main::first();
        $services=Service::all();
        return view('pages.index',compact('main','services'));

    }
    public function dashboard(){
        return view('pages.dashboard');

    }
}
