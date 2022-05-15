<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::paginate(10);
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories',
            'description' => 'required|string|max:255',
        ]);

        $data = $request->all();

        if($request -> hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/categories'), $imageName);
            $data['image'] = $imageName;
        }

        $category = Category::create($data);
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

        $data = $request->all();

        if($request -> hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/categories'), $imageName);
            $data['image'] = $imageName;
        }

        $category->update($data);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    } 
}
