@extends('template.base')

@section('content')
    <div class="container" style="margin-left : 300px; margin-top : 10px;">
        <div class="row">
            <div class="col-md-100 mt-12">
                <div class="card" style="width:700px;">
                    <div class="card-header">
                       Detail Data User
                    </div>
                    <div class="card-body">
                        <h3>{{$user->nama}}</h3>
                        <hr>
                        <p>
                            {{"@".$user->username}} |
                            Email : {{$user->email}}
                        </p>
                        <p>
                            No Handphone : {{$user->detail->no_handphone}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection