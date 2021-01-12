<!DOCTYPE html>
<html>
<head>
	<title>Login || Sign Up Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{urrl('publis')}}/assets-admin/css/style-login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body id="bg-login">
	<div class="log-1">
		<h2>Daftar</h2><hr>
			<form action="{{url('registrasi')}}" method="POST" class="form">
				<label>Nama</label>
				<input type="text"  class="input-control">
				<label>Email</label>
				<input type="text" class="input-control">
				<label>Password</label>
				<input type="password" class="input-control">
				<label>Verivikasi Password</label>
				<input type="password" class="input-control">

				<div class="tombol">
					<button class="btn"><a href="">Daftar</a></button>
				</div>
				<div class="sign">
				Belum Punya akun? <a href="{{url('login')}}">Masuk</a>
				</div>

			</form>
	</div>
</body>
</html>