@extends('query-builder.app')

@section('content')
<div class="container">
<div class="d-flex justify-content-between align-items-center" style="background-color: rgb(0, 229, 255); padding-top:20px; margin-top:50px; border-top-right-radius: 15px; border-top-left-radius: 15px;">
    <h1 class="text mx-5">List Product</h1>
    <div class="d-flex mx-5">
        <a href="{{ route('tambahproduct')}}" class="btn btn-dark mx-2">Tambah Product</a>
        <a href="{{ route('query-builder.listproduct') }}" class="btn btn-secondary">Kembali ke Produk</a>
        <a href="{{ route('query-builder.profile') }}" class="btn btn-info mx-2">Lihat Profile</a>
    </div>
</div>

<div class="body-container">
<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Berat</th>
            <th>Harga</th>
            <th>Kondisi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->stok }}</td>
                <td>{{ $product->berat }}</td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->kondisi }}</td>
                <td>
                    <a href="{{ route('editproduct', $product->id) }}" class="btn btn-primary px-4 my-2">Edit</a>
                    <form action="{{ route('hapusproduct', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE') 
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection
