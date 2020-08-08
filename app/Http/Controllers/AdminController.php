<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use App\Status;
use App\Artikel;
use DB;

class AdminController extends Controller
{
    //
    public function index(){
    	$artikel = Artikel::all();
    	$gambar = Gambar::all();
    	$status = Status::all();

    	return view('/dashboard',compact('gambar','status','artikel'));
    }
    
    public function login(){
        return view('login/login');
    }
}
