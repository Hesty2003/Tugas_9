@extends('template.base')

@section('content')

<div class="container">
            <div class="row">
                <div class="col md-12 mt-5">
                    <a href="{{url('admin/produk')}}"><fa class="btn btn-primary">Kembali</a>
                    <div class="card mt-3">
                        <div class="card-header">
                        Detail Data Produk
                    </div>
                    <div class="card-body">
                        <h3>{{$produk->nama}}</h3>
                        <hr>
                        <p>
                            Rp. {{$produk->harga}} |
                            Stok : {{$produk->stok}} |
                            Berat : {{$produk->berat}} gr |
                            Seller : {{ $produk->seller->nama }} |
                            Tanggal Produksi : {{$produk->created_at->diffForHumans()}}
                        </p>
                        <p>
                            {!! nl2br($produk->deskripsi) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection