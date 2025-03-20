<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        return "Menampilkan isi keranjang";
    }

    public function tambah(Request $request)
    {
        return "Produk berhasil ditambahkan ke keranjang!";
    }

    public function hapus($id)
    {
        return "Produk dengan ID $id dihapus dari keranjang";
    }
}
