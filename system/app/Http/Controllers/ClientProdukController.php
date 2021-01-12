<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;


class ClientProdukController extends Controller{


	function homeindex(){
		return view('clientproduk.template');
	}

	function index(){
		$data['list_kategori'] = Kategori::all();
		$data['list_produk'] = Produk::all();
		return view('index', $data);
	}

	function show(Produk $detail){
		$data['produk'] = $detail;
		return view('detail', $data);
	}

	function Kategori(){
		$datakategori['list_kategori'] = Kategori::all();
		return view('Kategori', $datakategori);
	}
	function about(){
		return view('about');
	}
	function filterClient(){
	 	$nama = request('nama');
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;

		$stok = explode(",",request('stok'));
		$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		$data['stok'] = request('stok');


		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();

		return view('index', $data);
	}

}