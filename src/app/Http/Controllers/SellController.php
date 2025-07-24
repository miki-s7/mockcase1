<?php

namespace App\Http\Controllers;
use App\Models\Sell;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function sell(Request $request){
        $products = Sell::create([
            'img'=>$request->img,
            'condition'=>$request->condition,
            'name'=>$request->name,
            'brand'=>$request->brand,
            'content'=>$request->content,
            'price'=>$request->price
            ]);
        //dd($products);
        return redirect('/');
    }

    public function index()
    {
        $products = Sell::all();
        return view('index', ['products' => $products]);
    }
}
