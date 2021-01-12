@extends('template.base')

@section('content')

<div class="container">
	<div class="row ">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-header">
					Edit Data User <hr>
				</div>
				<div class="card-body">
					<form action="{{url('user', $user->id)}}" method="post">
						@csrf
						@method('put') 
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$user->nama}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Username</label>
							<input type="text" class="form-control" name="username" value="{{$user->username}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">No Handphone</label>
							<input type="text" class="form-control" value="{{$user->no_handphone}}" name="no_handphone">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Email</label>
							<input type="email" class="form-control" name="email" value="{{$user->email}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Password</label>
							<input type="password" class="form-control" name="password" id="stock">
						</div>
						
						<button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection