<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::guard('karyawan')->attempt(['nama' => $request->nama, 'password' => $request->password])) {
            $request->session()->put('nama', $request->nama);
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::guard('karyawan')->logout();
        return redirect('/login');
    }
}
