<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studio;

class StudioController extends Controller
{
    public function index()
    {   
        $dump = Studio::where([['lat', '=', 'NULL']])->get();
        $studio = Studio::distinct()->get(['lat','lng','nama']);
        return view('profile',['studio'=>$studio,'dump'=>$dump]);
    }
}
