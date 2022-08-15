<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('loginLayouts.main');
    }

    public function authenticate(Request $request)
    {
       
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
      
        // dd($username);
        // dd(Auth::attempt(['username' => $username, 'password' => $password]));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
       

        return back()->with('error','username atau password salah!!');
    }
    public function logout()
    {
        Auth::logout();
 
        Request()->session()->invalidate();
     
        Request()->session()->regenerateToken();
     
        return redirect('/login');
    }
}
