@extends('template.base')

@section('content')

<div class="container">
	<div class="row ">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-header">
					Tambah Data Produk <hr>
				</div>
				<div class="card-body">
					<form action="{{url('admin/produk')}}" method="post" enctype="multipart/form-data">
						@csrf
					
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" required>
						</div>
						<div class="row">
							<div class="col-md-3">
									<label for="myfile">Foto</label>
									<input type="file" id="" name="foto" accept="image/*" required>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Berat</label>
									<input type="text" class="form-control" name="berat" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="" class="control-label">Stock</label>
									<input type="text" class="form-control" name="stok" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Deskripsi</label>
							<textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
						</div>
						
						<button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
	$(document).ready(function() {
	  $('#deskripsi').summernote();
	});
</script>
@endpsuh