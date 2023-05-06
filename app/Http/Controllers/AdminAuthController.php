<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

<<<<<<< HEAD
class AdminAuthController extends Controller
{
    function index (){
=======

class AdminAuthController extends Controller
{
    function index(){
>>>>>>> dev
        $data = [
            'content' => 'home/auth/login'
        ];
        return view('home.layout.wrapper', $data);
    }

    function doLogin(Request $request){
<<<<<<< HEAD
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('admin/dashboard');
        }
        return back()-> with('loginError','email atau password tidak di temukan');
=======
        // dd($request->all());
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('admin/dashboard');
        }
        return back()->with('loginError', 'Email atau Password tidak di temukan');
>>>>>>> dev
    }
    function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
<<<<<<< HEAD
=======

>>>>>>> dev
