<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; 

class CategoryController extends Controller
{
    public function store(Request $request)
    {
            // Validate the incoming request
    $request->validate([
        'name' => 'required|max:25|string', // Ensure that the 'name' field is required
        'description' => 'required|max:25|string', // Allow 'description' to be nullable or empty
        'is_active' => 'sometimes', // Ensure 'is_active' is either boolean or nullable
    ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->is_active = $request->has('is_active'); // Check if checkbox is checked
        $category->save(); // Removed unnecessary argument

        return redirect()->route('category.create')->with('success', 'Category created successfully');
    }

    public function create()
    {
        return view('category.create');
    }
    public function show()
    {
        $category=Category::all();
        return view('category.show',['categories'=>$category]);
    }
    public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('category.edit', ['category' => $category]);
}
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->is_active = $request->input('is_active');
        $category->save();

        return redirect()->route('category.edit', $id)->with('success', 'Category updated successfully');
    }
    public function destroy($id)
    {
        $category = category::findOrFail($id);
        $category ->delete();
     
        return redirect()->route('category.show', $id)->with('success', 'category deleted successfully');

    }
}
