<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function login(){
        return view('halaman.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            Alert::success('Selamat datang di','TanyaDok')->autoClose(3000);
            return redirect()->intended('/home');
        }
        return back()->with('loginError', 'Login Failed!');
    }   
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
