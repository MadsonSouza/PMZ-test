<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return Order::all();
    }

    public function show($id) {
        return Order::findOrFail($id);
    }
}
