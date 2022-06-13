<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.home.login',[
            'title' =>'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' =>'required|email:dns',
            'password'=> 'required'
        ]);
       
        if (Auth::attempt(['email'=>$credentials['email'],'password'=> $credentials['password'],'role'=>'admin'])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else{
            $request->session()->regenerate();
            return redirect()->intended('user');
        }

        return back()->with('failed','Email atau password salah. Silahkan login kembali !');
    }
}
