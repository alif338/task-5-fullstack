<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return Category::all();

    }
    public function showCategoryList()
    {
        $categories = Category::all();
        return view('category_list', compact('categories'));
    }

    public function show($id)
    {
        return Category::find($id);
    }

    public function create(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }

    public function update($id, Request $request)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return response()->json($category, 200);
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
