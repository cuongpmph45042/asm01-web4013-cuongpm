<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashbroad() {
        $propertiesByCate = Category::withCount('properties')->get();

        $propertiesByView = Property::query()->latest('views')->paginate(10);
        return view('admin.index', compact('propertiesByCate', 'propertiesByView'));
    }
}
