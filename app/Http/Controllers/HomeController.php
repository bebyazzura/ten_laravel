<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//menampilkan halaman dengan controller
class HomeController extends Controller
{
    //menampilkan  halaman dengan controller
    public function index(){
        return view('welcome');
    }
}

