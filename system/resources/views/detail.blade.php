<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{url('public')}}/assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="card">
    <div class="card-header text-uppercase">
        <h3>Detail Produk</h3>        
    </div>
      <div class="card-body">
       <h3>{{$produk->nama}}</h3>
        <hr>
        <p>
            {{$produk->harga}} |
            Stock : {{$produk->stok}} |
            Berat : {{$produk->berat}} gr
        </p>
        <p>
            {!! nl2br($produk->deskripsi) !!}
        </p>

        <a class="btn btn-primary" href="{{url('clientproduk')}}">Back</a>
      </div>
    </div>
</div>

</body>
</html>
