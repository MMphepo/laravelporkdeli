<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\search;

class searchcontroller extends Controller
{

    public function index()
    {
        $User = User::orderBy('created_at','DESC');

        if (request()->has('searchquery')){
            $User= $User->where('content','like','%'. request()->get('searchqueary',''). '%'); 
        }

            return view('dashboard',[
            'ideas'=>User::orderBy('created_at','DESC')->paginate(5)
            # code...
            ]);    
    }
}