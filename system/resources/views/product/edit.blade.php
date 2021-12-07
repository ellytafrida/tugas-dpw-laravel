@extends('template.base')

@section('content')
    <div class="container" style="margin-left : 100px; margin-top : 10px;">
        <div class="row mt-4">
            <div class="col-md-15">
                <div class="card" style="width:500px;">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{url("public/$product->foto")}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
              <div class="col-md-15">
                  <div class="card">
                    <div class="card-header">
                       Ubah Data Product
                    </div>
                    <div class="card-body">
                        <form action="{{url('product', $product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$product->nama}}">
                        </div>
                        <div class="row">
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" class="form-control" name="foto" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" value="{{$product->harga}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Berat</label>
                                    <input type="text" class="form-control" name="berat" value="{{$product->berat}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Stok</label>
                                    <input type="text" class="form-control" name="stok" value="{{$product->stok}}">
                                     </div>
                                 </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control">{{$product->deskripsi}}"</textarea>
                            </div>
                            <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>

                        </from>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection