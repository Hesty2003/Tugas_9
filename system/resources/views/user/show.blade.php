@extends('template.base')

@section('content')

<div class="container">
            <div class="row">
                <div class="col md-12 mt-5">
                    <a href="{{url('admin/produk')}}"><fa class="btn btn-primary">Kembali</a>
                    <div class="card mt-3">
                        <div class="card-header">
                        Detail Data Usur
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