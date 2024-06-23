<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function index()
    {
        $data_user = User::all();
        return view("admin.layoutadmin", compact('data_user'));
    }

    public function edit_data($id)
    {
        $data_user = User::find($id);
        return view("admin.editadmin", compact("data_user"));
    }

    public function update_data(Request $request, $id)
    {
        $data_user = User::find($id);
        $data_user->name =  $request->name;
        $data_user->update();
        session()->flash("pesan-update", "Data berhasil diubah");
        // dd($data_user->all());
        return redirect('data/admin');
    }

    public function hapus_data($id)
    {
        $data_user = User::find($id);
        $data_user->delete();

        session()->flash("pesan-hapus", "Data berhasil dihapus nih");
        // dd($data_user->all());
        return redirect('data/admin');
    }

}
