<?php

namespace App\Http\Controllers;

use App\Models\M_Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $getData = M_Category::get();

        return view('pages.category', compact('getData'));
    }

    public function destroy($id)
    {
        $getData = M_Category::find($id);
        $getData->delete();

        return redirect()->back();
    }
}
