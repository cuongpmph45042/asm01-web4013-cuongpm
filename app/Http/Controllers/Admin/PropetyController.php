<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropetyController extends Controller
{

    public function all()
    {
        $propeties = Property::with('category')->latest('id')->paginate(10);
        return view('admin.propety.index', compact('propeties'));
    }

    public function detail($id)
    {
        $property = Property::with('category')->findOrFail($id);
        return view('admin.propety.detail', compact('property'));
    }

    public function create()
    {
        return view('admin.propety.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'address' => ['required', 'max:255'],
            'area' => ['required', 'numeric', 'min:0'],
            'rooms' => ['required', 'numeric', 'min:0'],
            'price' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable'],
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
        } else {
            $path = null;
        }
        $data['image'] = $path;
        Property::query()->create($data);
        return redirect()->route('admin.property.all')->with('message', 'Thêm mới thành công');
    }

    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('admin.propety.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048'],
            'address' => ['required', 'max:255'],
            'area' => ['required', 'numeric', 'min:0'],
            'rooms' => ['required', 'numeric', 'min:0'],
            'price' => ['required', 'numeric', 'min:0'],
            'description' => ['nullable'],
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            if (!empty($property->image)) {
                Storage::delete($property->image);
            }
        } else {
            $path = null;
        }
        $data['image'] = $path;

        $property->update($data);
        return redirect()->route('admin.property.detail', $property->id)->with('message', 'Cập nhật thành công');
    }

    public function  destroy(Property $property) {
        $property->delete();
        return redirect()->route('admin.property.all')->with('message', 'Xóa thành công');
    }
}
