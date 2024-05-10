
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/form.css') }}">
</head>
<body>
    
<div class="container bg-product">
    <div class="row title-product">
        <h2 class="product-title">Edit Data Produk</h2>
    </div>

    <div class="row product" id="product-list">
        <div class="col-md-11 mx-auto mb-5">
            <form action="{{ route('updateproduct', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar Produk</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="{{ $product->gambar }}">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $product->nama }}">
                </div>
                <div class="mb-3">
                    <label for="berat" class="form-label">Berat</label>
                    <input type="number" class="form-control" id="berat" name="berat" value="{{ $product->berat }}">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $product->harga }}">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="{{ $product->stok }}">
                </div>
                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <select class="form-select" id="kondisi" name="kondisi">
                        <option value="baru" {{ $product->kondisi == 'baru' ? 'selected' : '' }}>Baru</option>
                        <option value="bekas" {{ $product->kondisi == 'bekas' ? 'selected' : '' }}>Bekas</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5">{{ $product->deskripsi }}</textarea>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

