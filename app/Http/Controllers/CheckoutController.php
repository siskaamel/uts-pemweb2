<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return "Halaman Checkout";
    }

    public function proses(Request $request)
    {
        return "Proses checkout berhasil!";
    }
}
