<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profiles;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function register(){
        return view('halaman.register');
    }
    public function store(Request $request)
    {
    	$validatedData = $request->validate([  
            'name' => 'required|unique:App\Models\User,name|max:255',
            'username' => 'required|unique:App\Models\User,username',
            'password' => 'required',
            'isdokter' => 'required',
        ]);
        $validatedData['password'] = hash::make($validatedData['password']);
        User::create($validatedData);
                
        if(Auth::attempt($request->only('username', 'password'))){
            $request->session()->regenerate();
            Alert::success('Selamat', 'Akun anda telah terdaftar!')->autoClose(3000);
            return redirect()->intended('/home');
        }
    	
	}
}