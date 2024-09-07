<?php
namespace App\Http\Controllers;

use App\Models\products; // Correct Model capitalization
use Illuminate\Http\Request;

class InsertProduct extends Controller
{
    public function index() {
        return view('navigation');
    }

    public function create() {
        return view('dashboard');
    }

    public function storage(Request $request) {
        // Validate the request
        // $request->validate([
        //     'productname' => 'required',
        //     'brand' => 'required',
        //     'category' => 'required',
        //     'keyword' => 'required',
        // ]);

        // Create a new product record
        products::create([
            'productname' => $request->input('productname'),
            'brand' => $request->input('brand'),
            'category' => $request->input('category'),
            'keyword' => $request->input('keyword'),
        ]);

        // Redirect to the dashboard
     
    }
}
