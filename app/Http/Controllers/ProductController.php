<?php

namespace App\Http\Controllers;

use App\Models\M_Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $getProduct = M_Product::all();

        return view('pages.product', compact('getProduct'));
    }

    public function destroy($id)
    {
        $getProduct = M_Product::find($id);
        $getProduct->delete();

        return redirect()->back();
    }

    public function create()
    {
        return view('pages.productCreate');
    }

    public function store(Request $request)
    {
        $product = new M_Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        // dd($request->all());
        return redirect('product');
    }
}
