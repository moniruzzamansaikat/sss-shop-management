<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('categories.index', compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories',
            'description' => 'required|string|max:255',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        if($request -> hasFile('image')) {
            $data['image'] = $request -> image -> store('categories', 'public');
        }

        Category::create($data);
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    public function show($id){
    }

    public function edit(Category $category){
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category){
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories,name,'.$category->id,
            'description' => 'required|string|max:255',
        ]);

        $category -> name = $request -> name;
        $category -> description = $request -> description;

        if($request -> hasFile('image')) {
            if($category -> image && Storage::disk('public') -> exists($category -> image)) {
                Storage::disk('public') -> delete($category -> image);
            }

            $category -> image = $request -> image -> store('categories', 'public');
        }

        $category -> save(); 
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category){
        if($category -> image && Storage::disk('public')) {
            Storage::disk('public')->delete($category->image);
        }
        
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    } 
}
