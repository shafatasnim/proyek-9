<form action="{{$url}}" method="post" onsubmit="return confirm('Yakin Akan Menghapus Data Ini ?')">
	@csrf
	@method("delete")
	<button class="btn btn-danger" style="display: flex; align-items: center;"> <i class="fa fa-info"></i></button>
</form>