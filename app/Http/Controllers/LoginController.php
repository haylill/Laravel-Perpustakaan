<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\If_;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        //dd($request->all());
        If(Auth::attempt($request->only('nomor_induk','password'))){
            return redirect('home');
        }
        return redirect(('login'));
    }
    public function logout (Request $request){
       auth::logout();
       return redirect('/');
    }
}
