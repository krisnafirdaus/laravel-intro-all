<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            [
                "id" => 1,
                "name" => "Product 1",
                "price" => 10000
            ],
            [
                "id" => 2,
                "name" => "Product 2",
                "price" => 20000
            ],
        ];


        return response()->json([
            "status" => "success",
            "message" => "Data product berhasil diambil",
            "data" => $data
        ]);
    }

    public function show($id)
    {
        return "ini halaman product id" . $id;
    }
}
