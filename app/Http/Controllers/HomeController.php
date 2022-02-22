<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Answers;
use App\Models\Questions;

class HomeController extends Controller
{
    public function home(){
        $this->middleware('auth');
        return view('halaman.index');
    }
    public function dashboard(){ 
        $dokter = User::where('isdokter', 1)-> count();
        $notdokter = User::where('isdokter',0)->count();
        $questions = Questions::all()->count();
        $answers = Answers::all()->count();

        return view('halaman.dashboard', compact('dokter','notdokter','questions','answers'));
    }

    public function contactus(){
        return view('halaman.contactus');
    }

    public function team(){
        return view('halaman.team');
    }
}
