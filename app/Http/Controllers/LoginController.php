<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect('home');
        }else{
            return view('login');
        }
    }
    public function aksilogin(Request $request)
    {
        $dataya = [
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect('home');
        }else{
            Session::flash('error', 'errorr');
            return view('login');
        }
    }
    public function aksilogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
