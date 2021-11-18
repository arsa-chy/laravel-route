<?php

namespace App\Http\Controllers;

use App\Models\M_Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $getData = M_Customer::get();

        return view('pages.customer', compact('getData'));
    }

    public function destroy($id)
    {
        $getData = M_Customer::find($id);
        $getData->delete();

        return redirect()->back();
    }
}
