<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function index(){
        return view('app.login.login');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email'=>['required', 'email', 'string'],
            'password'=>['required', 'string']
        ]);
        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();

            return redirect('inicio');
        }


        throw ValidationException::withMessages([
            'email'=> __('auth.failed')
        ]);
    }

}
