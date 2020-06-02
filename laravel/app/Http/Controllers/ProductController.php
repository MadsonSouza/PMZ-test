<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return Product::all();
    }
    
    public function showRandom() {
        return Product::all()->random(7);
    }

    public function show($id) {
        return Product::findOrFail($id);
    }
}
