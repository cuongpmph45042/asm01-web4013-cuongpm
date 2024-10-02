<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropetyController extends Controller
{
    public function index()
    {
        $properties = DB::table('properties')
            ->join('categories', 'properties.category_id', '=', 'categories.id')
            ->select('properties.*', 'name')
            ->orderByDesc('id')
            ->get();

        return view('client.index', compact('properties'));
    }

    public function detail($id)
    {
        $property = DB::table('properties')
            ->join('categories', 'properties.category_id', '=', 'categories.id')
            ->select('properties.*', 'categories.name')
            ->where('properties.id', $id)
            ->first();
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

    public function all() {
        $properties = DB::table('properties')
            ->select('*')
            ->orderByDesc('id')
            ->get();
    return view('client.properties.list', compact('properties'));
    }
}
