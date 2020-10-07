<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\AuthCommand;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('about');
        }
        return redirect('/register');

      
    }

    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required|string|min:4',
            'username'=> 'required|string',
            'email'=> 'required|email|unique:users',
            'no_hp'=> 'required|numeric',
            'password'=> 'required|min:6|same:confirmPassword'
        ]); 

        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'no_hp'=> $request->no_hp,
            'password'=> bcrypt($request->password)
        ]);

        //return redirect('login');
        if($request){
            return redirect('login')->with('success', 'Register Berhasil, silakan Login ');
         }else{
             return redirect('login')->with('error', 'Register Gagal');
         } 
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
