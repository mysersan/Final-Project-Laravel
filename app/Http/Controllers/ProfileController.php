<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profiles;
use App\Models\User;
class ProfileController extends Controller
{
    public function index(){
        $profil = Profiles::where('user_id', auth()->user()->id)->first();
        if($profil==null){
            return view('halaman.profile.profileBaru', compact('profil'));
        }
        else{
            return view('halaman.profile.profile', compact('profil'));
        }
        
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([  
            'email' => 'email',
            'age' => 'numeric',
            
        ]);
    	Profiles::create([
    		'biodata' => $request->biodata,
    		'email' => $request->email,
            'age' => $request->age,
            'address' => $request->address,
            
            'user_id' => auth()->user()->id,
    	]);
 
    	return redirect('/profile');
    }
    
    public function edit(){
        $tampilProfiles = Profiles::where('user_id', auth()->user()->id)->first();;
        if($tampilProfiles==null){
            return view('halaman.profile.createProfile', compact('tampilProfiles'));
        }
        else{
            return view('halaman.profile.update', compact('tampilProfiles'));
        }
        
    }
    public function update(Request $request)
    {
        $updateProfiles = Profiles::where('user_id', auth()->user()->id)->first();;
        $request->validate([  
            'email' => 'email',
            'age' => 'numeric',
            
        ]);
        Profiles::where('user_id', auth()->user()->id)
            ->update(['biodata' => $request->biodata,
            'email' => $request->email,
            'age' => $request->age,
            'address' => $request->address,
        ]);
        
        
        
        return redirect('/profile');
    }
}
