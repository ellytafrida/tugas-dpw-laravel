@extends('template.base')

@section('content')
    <div class="container" style="margin-left : 300px; margin-top : 10px;">
        <div class="row">
            <div class="col-md-100 mt-12">
                <div class="card" style="width:700px;">
                    <div class="card-header">
                       Tambah Data User
                    </div>
                    <div class="card-body">
                        <form action="{{url('user')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                @include('utils.errors', ['item' => 'nama'])
                                <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                @include('utils.errors', ['item' => 'username'])
                                <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                @include('utils.errors', ['item' => 'email'])
                                <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                @include('utils.errors', ['item' => 'password'])
                                <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                                <label for="" class="control-label">No HP</label>
                                @include('utils.errors', ['item' => 'Nomor HP'])
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