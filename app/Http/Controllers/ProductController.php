<?php

namespace App\Http\Controllers;

use App\Models\Merchant; // Import model Merchant
use App\Models\Products; // Import model Products
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function tambahproduct() {
        return view('query-builder.formproduct');
    }    

    public function index() {
        $products = Products::all();
        return view('query-builder.listproduct', compact('products'));
    }
    

    public function admin() {
        $products = Products::all();
        return view('query-builder.admin', compact('products'));
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id); // Mengambil produk berdasarkan ID
        return view('query-builder.editproduct', compact('product'));
    }

    public function merchant()
    {
       $products = Products::all();
        return view('query-builder.merchant', compact('products'));
    }

    public function profile()
    {
        $profileData = [
            'nama_akun' => 'Rossi Nurfazry',
            'email' => 'rossinurfazry@gmail.com',
            'gender' => 'perempuan',
            'tanggal_lahir' => 'xx-xx-xxxx',
            'alamat' => 'Jawa Barat, Tasikmalaya',

            'nama_toko' => 'Amandemy Play',
            'rate' => '3',
            'produk_terbaik' => 'Kucing Lucu',
            'deskripsi' => 'Toko ini hanya menjual hewan - hewan berkualitas dengan harga yang terjangkau dan pas di kantong '
        ];
    
        return view('query-builder.profile', ['profileData' => $profileData]);
    }
    


    public function update(Request $request, $id)
    {
    
    $product = Products::findOrFail($id);

    $validatedData = $request->validate([
        'gambar' => 'required',
        'nama' => 'required',
        'berat' => 'required|numeric',
        'harga' => 'required|numeric',
        'stok' => 'required|numeric',
        'kondisi' => 'required|in:baru,bekas',
        'deskripsi' => 'required|string',
    ]);

    
    $product->update($validatedData);

    return redirect()->route('admin')->with('success', 'Data produk berhasil diperbarui');
    }


    public function destroy($id)
    {
        $product = Products::findOrFail($id); 
        $product->delete(); 
        return redirect()->route('admin')->with('success', 'Data produk berhasil dihapus');
    }

    
    public function postrequestproses(Request $req)
    {
        
        // $errors = [];

        
        // if (!$req->format('gambar')) {
        //     $errors[] = 'format harus berupa jpg,jpeg atau png.';
        // }
        // if (!$req->filled('gambar')) {
        //     $errors[] = 'Error. Field image Produk Wajib diisi.';
        // }
        // if (!$req->filled('nama')) {
        //     $errors[] = 'Error. Field Nama Produk Wajib diisi.';
        // }
        // if (!$req->filled('berat')) {
        //     $errors[] = 'Error. Field Berat Wajib diisi.';
        // }
        // if (!$req->filled('harga')) {
        //     $errors[] = 'Error. Field Harga Wajib diisi.';
        // }
        // if (!$req->filled('stok')) {
        //     $errors[] = 'Error. Field Stok Wajib diisi.';
        // }
        // if (!$req->filled('kondisi')) {
        //     $errors[] = 'Error. Field Kondisi Wajib diisi.';
        // }
        // if (!$req->filled('deskripsi')) {
        //     $errors[] = 'Error. Field Deskripsi Wajib diisi.';
        // }

        
        // if (!empty($errors)) {
            
        //     return redirect()->back()->with('errors', $errors);
        // }

        
        $validator = Validator::make($req->all(),[
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kondisi' => 'required|in:baru,bekas',
            'deskripsi' => 'required|string',
        ], [
            'gambar.required' => 'Field gambar Produk Wajib diisi.',
            'nama.required' => 'Field Nama Produk Wajib diisi.',
            'berat.required' => 'Field Berat Wajib diisi.',
            'berat.numeric' => 'Field Berat harus berupa angka.',
            'harga.required' => 'Field Harga Wajib diisi.',
            'harga.numeric' => 'Field Harga harus berupa angka.',
            'stok.required' => 'Field Stok Wajib diisi.',
            'stok.numeric' => 'Field Stok harus berupa angka.',
            'kondisi.required' => 'Field Kondisi Wajib diisi.',
            'kondisi.in' => 'Field Kondisi harus baru atau bekas.',
            'deskripsi.required' => 'Field Deskripsi Wajib diisi.',
        ]);
    
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return redirect()->back()->with('errors', $errors)->withInput();
        }
    
        // Lakukan penyimpanan data jika validasi sukses
    
        // Redirect ke halaman sebelumnya dengan pesan kesalahan jika validasi gagal
        // return redirect()->route('listproduct');

        
        $gambarPath = $req->file('gambar')->store('public/gambar');
        DB::table('products')->insert([
            'gambar' => $gambarPath,
            'nama' => $req->nama,
            'berat' => $req->berat,
            'harga' => $req->harga,
            'stok' => $req->stok,
            'kondisi' => $req->kondisi,
            'deskripsi' => $req->deskripsi,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        

        return redirect()->route('query-builder.listproduct');
    }

    

}
