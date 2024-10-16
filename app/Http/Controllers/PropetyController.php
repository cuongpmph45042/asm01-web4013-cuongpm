<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropetyController extends Controller
{
    public function index()
    {
        $properties = Property::query()->latest()->paginate(10);

        return view('client.index', compact('properties'));
    }

    public function detail($id)
    {
        $property = Property::with('category')->findOrFail($id);

        $property->increment('views');
        return view('client.properties.detail', compact('property'));
    }

    public function fill_category($category_id)
    {
        $properties = DB::table('properties')
            ->join('categories', 'properties.category_id', '=', 'categories.id')
            ->select('properties.*', 'categories.name')
            ->where('category_id', $category_id)
            ->orderByDesc('id')
            ->get();
        return view('client.properties.fill-category', compact('properties'));
    }

    public function all()
    {
        $properties = Property::query()->latest()->paginate(9);
        return view('client.properties.list', compact('properties'));
    }
}
