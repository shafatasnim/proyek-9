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
			$user =  Auth::user();
			if($user->level == 1) return redirect('admin/beranda')->with('seccess','Login Berhasil');
			if($user->level == 2) return redirect('penjual-dashboard')->with('seccess','Login Berhasil');
			if($user->level == 3) return redirect('pembeli-dashboard')->with('seccess','Login Berhasil');
		}else{                           
			return back()->with('warning', 'Gagal Masuk, Silahan Email dan Password anda');
		}		// if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
		// 	return redirect('admin/beranda')->with('success', 'Login Berhasil');
		// }else{
		// 	return back()->with('success', 'Login Gagal, Silahkan cek email dan password anda');
		// }
	}

	function logout(){
		Auth::logout();
		Auth::guard('pembeli')->logout();
		Auth::guard('penjual')->logout();
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

