<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\AboutMe;

class AboutMeController extends Controller
{
    public function show()
    {
        $about = AboutMe::first();   // kita pakai satu baris saja

        return view('frontend.aboutme', compact('about'));
    }
}

