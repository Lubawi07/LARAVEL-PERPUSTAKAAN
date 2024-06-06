<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    // Login
    public function login_proses(Request $request)
    {
        Session::flash("email", $request->email);
        Session::flash("password", $request->password);
        // dd($request->all());
        $request->validate([
            "email" => "required",
            "password" => "required",
        ],[
            "email.required"=> "Isi emailnya dulu",
            "password.required"=> "Isi passwordnya dulu",
        ]);

        $infologin = [
            "email"=> $request->email,
            "password"=> $request->password,
        ];

       if(Auth::attempt($infologin)){
        // Autentikasi berhasil
        Session::flash("success-login", "Berhasil Login");
            return redirect()->route("dashboard/admin");
       }else{
        // Autentikasi gagal
        return redirect()->route("login")->with("failed","Email atau password salah");
       }

    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        // Session::flash("success-logout","Berhasil logout");
        return redirect()->route("login")->with("success","Kamu berhasil logout");
    }

    public function register()
    {
        return view("auth.register");
    }

    // Regsiter
    public function register_proses(Request $request)
    {
            // dd($request->all());
        $request->validate([
            "nama" => 'required',
            'email' => 'required|email|unique:users,email,',
            'password' => 'required|min:6'
        ]);


        $data['name'] = $request->nama;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        $login = [
            "email"=> $request->email,
            "password"=> $request->password,
        ];

       if(Auth::attempt($login)){
        // Autentikasi berhasil
        Session::flash("success-login", "Berhasil Login");
            return redirect()->route("dashboard/admin");
       }else{
        // Autentikasi gagal
        return redirect()->route("login")->with("failed","Email atau password salah");
       }

    }
}
