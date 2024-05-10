<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Handle Request</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/form.css') }}">

</head>

<body>


    <!-- @if(Session::has('errors'))
    <div class="alert alert-danger mx-auto" style="max-width: 600px; max-height:auto; margin-top: 5px; margin-bottom: 5px; background-color: red;">
        <ul style="color: white">
            @foreach (Session::get('errors') as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->
    <div class="container bg-product">
        <div class="row title-product">
            <h2 class="product-title">Tambah Data Produk</h2>

        </div>

        <div class="row product" id="product-list">
            <div class="col-md-11 mx-auto mb-5">
                <form action="{{ route('postrequestproses') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" height='48' accept="image/*" value="{{ old('gambar') }}">
                        @if(Session::has('errors'))
                        <!-- <div class="alert alert-danger mx-auto" style="max-width: 600px; max-height:auto; margin-top: 5px; margin-bottom: 5px; background-color: red;"> -->
                        <!-- <div style="color: black"> -->
                            @foreach (Session::get('errors') as $error)
                            <span class="absolute">{{ $error }}</span>
                            @endforeach
                        <!-- </div> -->
                    </div>
                    @endif

            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="{{ old('nama') }}">

            </div>
            <div class="mb-3">
                <label for="berat" class="form-label">Berat</label>
                <input type="number" class="form-control" id="berat" name="berat" required value="{{ old('berat') }}">

            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required value="{{ old('harga') }}">

            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stok" required value="{{ old('stok') }}">

            </div>
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi</label>
                <select class="form-select" id="kondisi" name="kondisi">
                    <option value="">Pilih Kondisi</option>
                    <option value="baru" {{ old('kondisi') == 'baru' ? 'selected' : '' }}>Baru</option>
                    <option value="bekas" {{ old('kondisi') == 'bekas' ? 'selected' : '' }}>Bekas</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5">{{ old('deskripsi') }}</textarea>
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
    </div>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>