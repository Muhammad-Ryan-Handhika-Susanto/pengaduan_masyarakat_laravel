<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengaduanController extends Controller
{
    function index() {
        $judul = "Hello World";
        $title = "Home";
        return view('home', [
            "textJudul" => $judul,
            "title" => $title
        ]);
    }
}
