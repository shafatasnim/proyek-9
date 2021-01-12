@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					Detail Data Produk <hr>
				</div>
				<div class="card-body">
					<h3>{{$produk->nama}}</h3>
					<hr>
					<p>
						{{$produk->harga}} |
						Stock : {{$produk->stok}} |
						Berat : {{$produk->berat}} Kg |
						Produksi : {{$produk->created_at->format('d F Y')}} /
						{{$produk->created_at->diffForHumans()}} |
						Seller : {{$produk->seller->nama}}
					</p>
					<p>
						{!! nl2br($produk->deskripsi) !!}
					</p>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection