<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,Material,Project};

class PlaceOrderController extends Controller
{
    /*
    *Get Materials 
    */
    public function index()
    {
        $materials = Material::all();
        $projects  = Project ::all();
        $users     = User::all();
        return view('placeorder',compact('users','materials','projects'));
    }
    
}
