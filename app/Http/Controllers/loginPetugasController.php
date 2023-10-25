<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginPetugasController extends Controller
{
    function login() {
        return view('/loginPetugas');
    }

    function proses_login(Request $request) {
        $data = $request->only('username', 'password');
        if(auth::guard('petugas')->attempt($data)){
            return redirect('/');
        }else{
            return redirect("/loginPetugas");
        }
    }

    public function logout(){
        auth::guard('petugas')->logout();

        return redirect('/petugas/login');
    }
}