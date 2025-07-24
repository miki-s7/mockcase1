<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Categories::all();
        return view('sell', ['categories' => $categories]);
    }
}
