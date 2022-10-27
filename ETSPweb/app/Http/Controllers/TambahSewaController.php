<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studio;

class TambahSewaController extends Controller
{
    public function index(Request $request){
        return view('tambahsewa', ['karyawan_nama'=>$request->session()->get('nama')]);
      }
  
      public function dataStudio(){
  
        $DataStudio['data'] = Studio::with('jadwal')->get();
        // $DataStudio['data'] = TambahSewaModel::all();
        return json_encode($DataStudio);
      }
  
      public function tambahSewa(Request $request){
        return view('datasewa', ['req' => $request]);
      }
}
