<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Jobs\TestEmailJob;
use App\Mail\TestEmail;
use App\Product;
use App\User;

class TestEmailJobController extends Controller
{
    public function createEmail(){
        return view('EmailTest.create');
    }

    public function sendEmail(Request $request){
        $product = new Studio();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        $users = User::all();
        foreach($users as $user){
            dispatch(new TestEmailJob($user,$product));
        }
        return redirect()->back();
    }
}
