<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        // READ
        $products = Product::with('category')->get();

        return response()->json([
            "status" => "success",
            "message" => "Data product berhasil diambil",
            "data" => $products
        ]);
    }

    public function show($id)
    {
        return "ini halaman product id" . $id;
    }
}
