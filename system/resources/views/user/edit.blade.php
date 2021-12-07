@extends('template.base')

@section('content')
    <div class="container" style="margin-left : 300px; margin-top : 10px;">
        <div class="row">
            <div class="col-md-100 mt-12">
                <div class="card" style="width:700px;">
                    <div class="card-header">
                       Edit Data User
                    </div>
                    <div class="card-body">
                        <from action="{{url('/user/{user}/edit', $user->id)}}" method="post"
                            @csrf
                            @method("put")
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                        </div>
                        <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" value="{{$user->username}}">
                        </div>
                        <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                                <label for="" class="control-label">No HP</label>
                                <input type="text" class="form-control" name="no_handphone">
                        </div>
                           
                            <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>

                        </from>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    @endsection