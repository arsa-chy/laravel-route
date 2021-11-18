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
}
