<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Berhasil extends Controller
{
   public function penggurus()
   {
   		return view('success.penggurus');
   }
    public function pengguna()
   {
   		return view('success.pengguna');
   }
}
