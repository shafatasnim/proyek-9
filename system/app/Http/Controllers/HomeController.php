<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;

class HomeController extends Controller{


	function showBeranda(){
		return view('beranda');
	}

	function showProduk(){
		return view('produk');
	}

	function showKategori(){
		return view('kategori');
	}

	function showLogin(){
		return view('login');
	}

	function test($produk){
		echo "Nama Produk $produk";
	}

	function testAjax()
    {
        $data['list_provinsi'] = Provinsi::all();
        return view('clientproduk.test-ajax', $data);
    }
}