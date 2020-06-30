<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Controller {
    //

    public function index() {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa', ["mahasiswa" => $mahasiswa]);
    }

    public function input(Request $request) {
        DB::table('mahasiswa')->insert([
            'nama'=>$request->nama_mhs,
            'umur'=>$request->umur_mhs,
            'alamat'=>$request->alamat
        ]);
        return redirect('mahasiswa');
    }

    public function updateView($id) {
        $mahasiswa = DB::table('mahasiswa')->where('id_mhs', $id)->get();
        return view('updateMahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request) {
        DB::table('mahasiswa')->where('id_mhs', $request->id_mhs)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat'=> $request->alamat
        ]);

        return redirect('mahasiswa');
    }

    public function delete($id) {
        DB::table('mahasiswa')->where('id_mhs', $id)->delete();
        return \redirect('mahasiswa');
    }
}