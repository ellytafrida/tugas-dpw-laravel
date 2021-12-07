@extends('template.base')

@section('content')
    <div class="container" style="margin-left : 100px; margin-top : 10px;">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card" style="width:700px;">
                    <div class="card-header">
                       Detail Data Product
                    </div>
                    <div class="card-body">
                        <h3>{{$product->nama}}</h3>
                        <hr>
                        <p>
                            {{$product->harga}} |
                            Stok : {{$product->stok}} |
                            Berat : {{$product->berat}} kg |
                            Seller : {{$product->seller->nama}} |
                            Tanggal Product : {{$product->created_at->format("d F Y")}}
                        </p>
                        <p>
                            {!! nl2br($product->deskripsi) !!}
                        </p>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-7 mt-7">
                <div class="card">
                    <div class="card-body">
                        <img style="width: 90%; margin-left: 5%" src="{{url("public/$product->foto")}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection