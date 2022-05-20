<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    private $categories;

    public function __construct()
    {
        $this-> categories = Category::all();
    }

    public function index(){
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(){
        $categories = $this->categories;
        return view('products.create', compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'description' => 'required'
        ]);

        $product = new Product($request->all());
        $product -> slug = Str::slug($request->name);
        $product -> user_id = auth()->user()->id;
        $product -> category_id = $request->category;
        $product -> image = $request->image->store('products', 'public');

        $product->save();
    
        return back()->with('success', 'Product created successfully');
    }

    public function show(){}

    public function edit(Product $product){
        $categories = $this->categories;
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product){
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'description' => 'required'
        ]);

        $product -> name = $request->name;
        $product -> slug = Str::slug($request->name);
        $product -> price = $request->price;
        $product -> quantity = $request->quantity;
        $product -> category_id = $request->category;
        $product -> description = $request->description;

        if($request->hasFile('image')){
            if($product->image && Storage::disk('public')->exists($product->image)){
                Storage::disk('public')->delete($product->image);
            }
            $product->image = $request->image->store('products', 'public');
        }

        $product->save();
        return back()->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product){
        if($product->image && Storage::disk('public')->exists($product->image)){
            Storage::disk('public')->delete($product->image);
        }  

        $product -> delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
