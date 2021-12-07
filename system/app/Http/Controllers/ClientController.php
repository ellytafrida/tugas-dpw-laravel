<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;

class ClientController extends Controller{


function showHome(){
	$data['list_kategori'] = Kategori::all();
	$data['list_produk'] = Produk::Paginate('4');
	return view ('home', $data);
	}
function showProduk(Produk $produk){
		$data['produk'] = $produk;
		return view('produk', $data);
	}
function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('home', $data);

	}
}