<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use App\Penggurus;
use Illuminate\Support\Facades\Auth;

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
    		//loginusingid session
    		Auth::guard('pengguna')->LoginUsingId($data1[0]['id']);
    		return redirect('/pengguna');
    	} elseif (count($data2)) {
    		Auth::guard('penggurus')->LoginUsingId($data1[0]['id']);
    		return redirect('/penggurus');
    	} else {
    		return 'gagal';
    	}
    }

     public function Keluar()
    {
    	if (Auth::guard('penggurus')->check()) {
    		Auth::guard('penggurus')->logout();
    	} elseif (Auth::guard('pengguna')->check()) {
    		Auth::guard('pengguna')->logout();
    	}

    	return redirect('/login');
    }


}
