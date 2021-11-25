<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $getProduct = Product::all();
        return view('pages.product', compact('getProduct'));
    }

    public function destroy($id)
    {
        $getProduct = Product::find($id);
        $getProduct->delete();

        return back();
    }

    public function create()
    {
       return view('pages.tambah_product');
    }

    public function store(Request $request)
    {
        // // cara 1
        $product = new Product();
        $product->nama_produk = $request->nama_produk;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->jumlah = $request->jumlah;
        $product->save();

        // cara2
        // Product::create($request->all());

        return redirect()->route('product');
    }

    public function edit($id)
    {
        $getProduct = Product::find($id);
        return view('pages.edit_product', compact('getProduct'));
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->nama_produk = $request->nama_produk;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->jumlah = $request->jumlah;
        $product->save();

        return redirect()->route('product');
    }
}
