<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    function register() {
        $title = "Register";
        return view('register', [
            "title" => $title
        ]);
    }

    // function proses_tambah_masyarakat(Request $request) {

    //     $nik = $request->nik;
    //     $nama = $request->nama;
    //     $username = $request->username;
    //     $password = $request->password;
    //     $telp = $request->telp;

    //     DB::table('masyarakat')->insert([
    //         'nik' => $nik,
    //         'nama' => $nama,
    //         'username' => $username,
    //         'password' => $password,
    //         'telp' => $telp
    //     ]);
    //     return redirect('/login');
    // }

    function proses_tambah_petugas(Request $request) {
            DB::table('petugas')->insert([
                'nama_petugas' => $request->nama_petugas,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'tlp' => $request->tlp,
                'level' => "petugas"
            ]);
            return redirect('/login');
        }
}