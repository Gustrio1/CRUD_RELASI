<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()

    {
        $product = Product::all();
        return view('product', compact('product'));
    }
    public function store()
    {

        return view('form-product');
    }

    public function create(Request $request)
    {
        request()->validate([
            'nama_product' => 'required',
            'harga_product' => 'required',
            'stok_product' => 'required',
            'deskripsi_product' => 'required',
            'gambar_product' => 'required',
        ]);

        $gambar = $request->file('gambar_product');
        $gambar->storeAs('public/product', $gambar->hashName());

        Product::create([
            'nama_product' => $request->nama_product,
            'harga_product' => $request->harga_product,
            'stok_product' => $request->stok_product,
            'deskripsi_product' => $request->deskripsi_product,
            'gambar_product' => $gambar->hashName(),
        ]);
        //redirect to index
        return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with(['success' => 'Data Berhasil di Hapus!']);
    }
}
