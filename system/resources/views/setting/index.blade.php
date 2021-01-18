@extends('template.base')

@section('content')

<div class="container">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header bg-info">
                Ganti password
            </div>
            <div class="card-body">
                <form action="{{url('setting')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label"> Current Password </label>
                        <input type="password" name="current" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="" class="control-label"> New Password </label>
                        <input type="password" name="new" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label"> Confirm New Password </label>
                        <input type="password" name="confirm" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info"><i class="fa fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection