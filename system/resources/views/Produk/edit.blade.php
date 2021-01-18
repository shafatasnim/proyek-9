@extends('template.base')

@section('content')

<div class="container">
	<div class="row ">
		<div class="col-md-12 mt-2"> 
			<div class="card">
				<div class="card-header">
					Edit Data Produk <hr>
					<img src="{{url("public/$produk->foto")}}" width=25%">
				</div>
				<div class="card-body">
					<form action="{{url('admin/produk', $produk->uuid)}}" method="post" required>
						@csrf
						@method("PUT")
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$produk->nama}}" required>
						</div>
						<div class="row">
							<div class="col-md-3">
									<label for="myfile">Foto</label>
									<input type="file" id="" name="foto" accept="image/*">
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga" placeholder ="{{$produk->harga}}" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Berat</label>
									<input type="text" class="form-control" name="berat" value="{{$produk->berat}}" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Stock</label>
									<input type="text" class="form-control" name="stock" value="{{$produk->stok}}" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" class="form-control" required>{{$produk->deskripsi}}</textarea>
						</div>
						<button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection