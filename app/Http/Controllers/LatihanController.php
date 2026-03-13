<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        $data = [
            "nama" => "Krisna Firdaus",
            "materi" => "Laravel Intro",
        ];

        return view('sapaan', $data);
    }
}
