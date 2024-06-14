<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiSessionConntroller extends Controller
{
    public function login_proses(Request $request){
        // dd($request->all());
        $request->validate([
            "email" => "required|email",
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
        $user = Auth::user();
        // Autentikasi berhasil
        // Session::flash("success-login", "Berhasil Login");
            return response()->json([
                'status' => true,
                'message'=> 'Berhasil login',
                'user' => $user
            ], 200);
       }else{
        // Autentikasi gagal
        return response()->json([
            'status' => false,
            'message'=> 'Email atau password',
        ], 401);    
       }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // Session::flash("success-logout","Berhasil logout");
        return response()->json([
            'status'=> true,
            'message'=> 'kamu berhasil logout'
        ], 200);
    }
}
