@inject('timeService', 'App\Services\TimeServices')
@extends('template.base')

@section('content')

    <div class="container" style="margin-top : 20px; margin-left:80px;">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                    <div class="float-right">
                            Jam : {{$timeService->showTimeNow()}}
                        </div>
                        Filter

                    </div>
                    <div class="card-body">
                        <form action="{{url('product/filter')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">stok</label>
                                <input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="" class="control-label">harga_min</label>
                                         <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="" class="control-label">harga_max</label>
                                         <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
                                     </div>
                                 </div>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                        </form>
                <div class="card" style="width:950px;">
                    <div class="card-header">
                        Data Product
                        <a href="{{url('product/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach($list_product as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('product', $product->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('product', $product->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('utils.delete', ['url' => url('product', $product->id)])
                                        </div>
                                    </td>
                                    <td>{{$product->nama}}</td>
                                    <td>{{$product->harga}}</td>
                                    <td>{{$product->stok}}</td>
                                </tr>
                                @endforeach
                            </tbody>                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection