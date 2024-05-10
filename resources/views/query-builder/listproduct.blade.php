@extends('query-builder.app')

@section('content')

<div class="container bg-product">
   
    <div class="row title-product">
        <h2 class="product-title">PRODUCTS</h2>
        <div style="width: 90px; background-color: black; height: 5px; margin: 0 auto;"></div>
        <div class="btn-posisi">
        <div>
        <a href="{{ route('admin') }}">
            <button class="btn btn-danger btn-product-one-pict">Ke halaman admin</button>
           </a>
        </div>
        <div class="ms-auto px-2">
        <a href="{{ route('merchant') }}"> 
            <button class="btn btn-success btn-product-one-pict">Halaman Merchant</button> 
        </a>
    </div>
        <div>
        <a href="{{ route('tambahproduct') }}">
            <button class="btn btn-secondary btn-product-two-pict">Tambah Product</button>
           </a>
        </div>
        </div>
    </div>
    
    <div class="row product">
        @foreach ($products as $productsembako)
        <div class="col-md-3 card-product">
            <div class="card mb-5">
            <img src="{{ url('public/storage/gambar/'. $productsembako->gambar) }}"  alt="gambar" style="border-radius: 5px; max-width:200px;">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="card-text-one">
                        <p>{{ $productsembako->nama }}</p>
                    </div>
                    <button class="btn btn-success button-theree-product px-2">{{ $productsembako->stok }}</button>
                    @if($productsembako->kondisi == 'baru')
                    <button class="btn btn-warning button-two-product">Baru</button>
                    @elseif($productsembako->kondisi == 'bekas')
                    <button class="btn btn-warning button-two-product">Bekas</button>
                    @endif
        
                    <button class="btn btn-info button-one-product">Rp. {{ $productsembako->harga }}</button>
                    <button class="btn btn-secondary button-one-product-pict">{{ $productsembako->berat }} gr</button>

                </div>
                <div class="card-body mid-one" style="margin-top: 30px; font-size:15px; margin-left:5px;">
                    {{ $productsembako->deskripsi }}
                </div>
                <button class="btn btn-primary btn-product-one">Pesan Sekarang</button>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection

