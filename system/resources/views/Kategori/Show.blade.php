@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					Detail Data Kategori <hr>
				</div>
				<div class="card-body">
					<h3>{{$kategori->kategori}}</h3>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection