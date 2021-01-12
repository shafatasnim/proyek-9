@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					Filter
				</div>
				<div class="card-body">
					<form action="{{url('produk/filter')}}" method="post">
						<div class="form-group">
							@csrf
				
							<input type="text" class="form-control" name="nama" placeholder="Nama Produk" value="{{$nama ?? ""}}">
						</div>

						<div class="form-group">
							<input type="text" class="form-control" name="stok" placeholder="Stok" value="{{$stok ?? ""}}">
						</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="harga_min" placeholder="harga_min" value="{{$harga_min ?? ""}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="harga_max" placeholder="harga_max" value="{{$harga_max ?? ""}}">
									</div>
								</div>
							</div>
						<button class="btn btn-sm float-right btn-primary"><i class="fa fa-search"></i> Filter</button>
						</div>

					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					Data Produk
					<a href="{{url('admin/produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body"><hr>
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stock</th>
						</thead>
						<tbody>
							@foreach($list_produk->sortByDesc('id') as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
										<a href="{{url('admin/produk', $produk->id)}}" class="btn btn-primary" style="display: flex; align-items: center;"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-warning" style="display: flex; align-items: center;"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete', ['url' => url('admin/produk', $produk->id)]) 
									</div>
								</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stok}}</td>
							</tr>
							@endforeach
						</tbody>						
					</table>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection