<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            ['id' => 1, 'nama' => 'Sweater', 'harga' => 175000],
            ['id' => 2, 'nama' => 'Jeans', 'harga' => 175000],
        ];
        return view('produk.index', compact('produk'));
    }

    public function show($id)
    {
        return "Detail Produk dengan ID: " . $id;
    }
}
