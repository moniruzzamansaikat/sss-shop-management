<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index(){
        $best_selling_products = Product::orderBy('sold', 'desc')->take(4)->get();

        $items = ['categories', 'customers', 'products','orders'];

        return view('dashboard.index', compact('items', 'best_selling_products'));
    }
}
