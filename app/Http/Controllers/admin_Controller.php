<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin_Controller extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $requestData=$request->only('email','password','mobile_number');

        if(Auth::attempt($requestData)){
            
            if(auth()->user()->role_id=User::role_admin){
                 return redirect()->route('admin_pannel')->with('success','Your are Login');
            }
            else{
                 return redirect()->back()->with('danger','Data is not mathed!!!');
            }
            
        }
        else{
            return redirect()->route('porfolio');
        }
        
    }

    public function adminPannel(Request $request){
        return view('admindashboard.index_dashboard');
    }
    public function logout(){
        session()->flush();
        Auth::logout();
        return redirect()->route('porfolio');
    }
    
}
