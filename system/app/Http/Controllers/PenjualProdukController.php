<?php

namespace App\Http\Controllers;
use App\Models\Produk;


class PenjualProdukController extends Controller{
	function index(){
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		$data['list_produk'] =  Produk::simplePaginate(9);
		return view('dashboard.penjual.produk.index', $data);
	}

	function create(){
		return view('produk.create');
	}

	function store(){
		$produk = new produk;
		$produk->id_user = request()->user()->id;
		$produk->nama = request('nama');
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
		$produk->nama = request('nama');
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');

		$produk->save();
		$produk->handleDelete();
		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Produk $produk){
		$produk->handleDelete();
		$produk->delete();
		return redirect('admin/produk')->with('success', 'Data Berhasil Dihapus');
	}

	function filter(){
	 	$nama = request('nama');
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;

		$stok = explode(",",request('stok'));
		$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		$data['stok'] = request('stok');


		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();

		return view('admin.produk.index', $data);
	}
}