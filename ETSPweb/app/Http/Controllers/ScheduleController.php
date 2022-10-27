<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        return view('schedule');
      }
    
      public function getDataTransaksi(Request $request){
          $trans['trans']  = DB::table('transaksi')->get();
          echo json_encode($trans);
          exit;
      }
}
