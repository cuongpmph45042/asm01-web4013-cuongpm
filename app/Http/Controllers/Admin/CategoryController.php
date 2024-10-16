<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all()
    {
        $categories = Category::query()->orderByDesc('id')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:5']
        ]);

        Category::query()->create($data);
        return redirect()->route('admin.category.all');
    }

    public function edit($id)
    {
        $category = Category::query()->findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => ['required', 'min:4']
        ]);

        $category->update($data);
        return redirect()->route('admin.category.all');
    }
}
