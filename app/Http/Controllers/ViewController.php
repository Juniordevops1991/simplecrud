<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Siswa;

class ViewController extends Controller
{
    public function index(){
        $siswa = Siswa::latest()->get();
        return view("index", compact("siswa"))->with('i');
    }

}
