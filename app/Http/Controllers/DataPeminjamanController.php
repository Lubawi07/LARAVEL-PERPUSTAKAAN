<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPeminjamanController extends Controller
{
    public function index ()
    {
        return view ("user.historibuku");
    }
}
