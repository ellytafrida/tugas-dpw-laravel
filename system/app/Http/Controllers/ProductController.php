<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller {
    function index(){
        $id_user = request()->user()->id;
        $data['list_product'] = product::where('id_user', $id_user)->get();
        return view('Product.index', $data);
    }
    function create(){
        return view('product.create');
    }
    function store(){
        $product = new Product;
        $product->id_user = request()->user()->id;
        $product->nama = request('nama');
        $product->stok = request('stok');
        $product->harga = request('harga');
        $product->berat = request('berat');
        $product->deskripsi = request('deskripsi');
        $product->save();

        $product->handleUploadFoto();

        return redirect('product')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Product $product){
        $data['product'] = $product;
        return view('product.show', $data);

    }
    function edit(Product $product){
        $data['product'] = $product;
        return view('product.edit', $data);
    }
    function update(Product $product){
        $product->nama = request('nama');
        $product->stok = request('stok');
        $product->harga = request('harga');
        $product->berat = request('berat');
        $product->deskripsi = request('deskripsi');
        $product->save();

        $product->handleUploadFoto();

        return redirect('product')->with('success', 'Data Berhasil Diedit');

    }
    function destroy(Product $product){
        $product->handleDelete();
        $product->delete();

        return redirect('product')->with('danger', 'Data Berhasil Dihapus');


    }

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        //$data['list_product'] = product::where('nama', 'like', "%$nama%")->get();
        //data['list_product'] = product::whereIn('stok', $stok)->get();
        //data['list_product'] = product::whereBetween('harga', [$harga_min, $harga_max])->get();
        //data['list_product'] = product::where('stok', '<>', "stok")->get();
        //data['list_product'] = product::whereNotIn('stok', $stok)->get();
        //data['list_product'] = product::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');


        return view('product.index', $data);
    }
}