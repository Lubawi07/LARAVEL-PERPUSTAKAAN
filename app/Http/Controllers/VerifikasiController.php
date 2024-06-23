<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikasiController extends Controller
{public function index()
    {
        $user = Auth::user();

        if($user->hasRole('admin')){
            return view("admin.admins");
        }

        if($user->hasRole('petugas')){
            return view("admin.admins");
        }

        if($user->hasRole('user')){
            return view("admin.admins");
        }

    }
}
