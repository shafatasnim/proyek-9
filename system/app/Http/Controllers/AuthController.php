<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	function showLogin(){
		return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('success', 'Login Gagal, Silahkan cek email dan password anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('login');
	}

	function registration(){

		return view('registration');
	}
	function registratioP(){
		
		return view('registration');
	}

	function forgotPassword(){
		return view('forgotPassword');
	}
}

