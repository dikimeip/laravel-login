<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use App\Penggurus;

class login extends Controller
{
	public function index()
	{
		return view('login.login');
	}

    public function Masuk(Request $request)
    {
    	$data1 = Pengguna::where('username',$request->email)->where('password',$request->password)->get();
    	$data2 = Penggurus::where('username',$request->email)->where('password',$request->password)->get();
    	if (count($data1)) {
    		return 'Pengguna';
    	} elseif (count($data2)) {
    		return 'Penggurus';
    	} else {
    		return 'gagal';
    	}
    }

     public function Keluar()
    {
    	
    }


}
