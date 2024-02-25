<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function register(){
        return view('auth.registrasi');
    }

    public function postRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->input('password'));
        $user->role = 'user';

        $user->save();

        return redirect()->route('login')->with('notif', 'Anda Berhasil registrasi silahkan login');
    }



    public function login(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('Message', 'Email atau password salah!!');
        }

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back()-with('Message', 'Email atau password salah!!');
        }

        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect()->route('admin');
        } else if ($user->role === 'kasir') {
            return redirect()->route('admin');
        } else if ($user->role === 'owner') {
            return redirect()->route('owner');
        } else {
            return redirect()->route('home');
        }
        return redirect()->route('home')->with('login', 'Loggin Success');;
    }


    public function logout(){
        if (auth()->check()) {
            Auth::logout();
        }
        return redirect()->route('home')->with('logout' , "Berhasil Logout.....Sampai jumpa kembali");
    }

    public function admin(){
        return view('home');
    }

}
