<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index () {
        $categories = Category::all();
        return view('blog.category.index', ['categories' => $categories]);
    }

    public function create () {
        return view('blog.category.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('blog.categories.index');
    }

    public function edit ($id) {
        $category = Category::find($id);
        return view('blog.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        Category::find($id)->update([
            'name' => $request->name,
        ]);

        return redirect()->route('blog.categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();
            // Redirect atau response setelah berhasil menghapus data
        } else {
            // Redirect atau response jika data tidak ditemukan
        }
    }

}
