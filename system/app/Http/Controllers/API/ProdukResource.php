<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukResource extends Controller
{

	@return

public function index()
{

	return Produk::all();
}

public function store()
{
	if (request('nama') && request('stok') && request('harga') && request('berat') && request('deskripsi')) {

		$produk = new produk;
		$produk->id_user = request()->user()->id;
		$produk->nama = request('nama');
		$produk->stok = request('stok');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return collect([
			'respond' => 200,
			'data' => $produk
		]);
	} else {
		return collect([
			'respond' => 500,
			'message' => "field ada yang kosong"
		]);
	}
}

public function show($id){
	$produk = Produk::find($id);
	if ($produk) {
            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }


    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->nama = request('nama') ?? $produk->nama;
            $produk->harga = request('stok') ?? $produk->stok;
            $produk->size = request('harga') ?? $produk->harga;
            $produk->berat = request('berat') ?? $produk->berat;
            $produk->deskripsi = request('deskripsi') ?? $produk->deskripsi;
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ditemukan"
        ]);
    }


    public function destroy($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->delete();
            return collect([
                'status' => 200,
                'data' => 'Produk berhasil dihapus'
            ]);
        } else {
            return collect([
                'respond' => 500,
                'message' => "Produk tidak ditemukan"
            ]);
        }
    }
}