<p class="pt-3">
	{{$produk->harga}} |
	Stock : {{$produk->stok}} |
	Berat : {{$produk->berat}} Kg |
	Produksi : {{$produk->created_at->format('d F Y')}} /
	{{$produk->created_at->diffForHumans()}} |
	Seller : {{$produk->seller->nama}}
</p>