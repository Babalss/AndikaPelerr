<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;

class HomeController extends Controller
{
    public function show()
    {
        // ambil 1 baris pertama, kalau nggak ada ya nilainya null
        $home = HomeContent::first();

        return view('frontend.home', compact('home'));
    }
}
