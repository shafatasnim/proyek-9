@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					Data Kategori
					<a href="{{url('kategori/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body"><hr>
					<table class="table">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Kategori</th>
						</thead>
						<tbody>
							@foreach($list_kategori as $kategori)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
										<a href="{{url('kategori', $kategori->id)}}" class="btn btn-primary" style="display: flex; align-items: center;">
											<i class="fa fa-info" style=""></i>
										</a>
										<a href="{{url('kategori', $kategori->id)}}/edit" class="btn btn-warning" style="display: flex; align-items: center;">
											<i class="fa fa-edit"></i>
										</a>
										@include('template.utils.delete', ['url' => url('kategori', $kategori->id)]) 
									</div>
								</td>
								<td>{{$kategori->kategori}}</td>
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