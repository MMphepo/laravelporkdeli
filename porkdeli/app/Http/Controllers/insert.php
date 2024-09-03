<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insertController extends Controller
{
    public function insertform(){
        
        return view('home')
        }
            public function insertform(){
            return view('home');
            }
            public function insert(Request $request){
            $productname = $request->input('title');
            $description = $request->input('description');
            $price = $request->input('price');
            $data=array('title'=>$productname,"description"=>$description,"price"=>$price);
            DB::table('products')->insert($data);
            echo "Record inserted successfully.<br />";
            echo '<a href="/insert">Click Here</a> to go back.';
            }
}