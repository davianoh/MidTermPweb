<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studio;
class StudioController extends Controller
{
    public function profile()
    {   
        $dump = Studio::where([['lat', '=', 'NULL']])->get();
        $lapangan = Studio::distinct()->get(['lat','lng','nama']);
        return view('profile',['lapangan'=>$lapangan,'dump'=>$dump]);
    }
    public function index()
    {   
        return view('home');
    }
}
