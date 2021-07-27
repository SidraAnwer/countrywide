<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Material,Project};

class MaterialController extends Controller
{
    /*
     * Show all Materials 
     */
    public function index()
    {
        $materials = Material::all();
        return view('materiallist',compact('materials'));
    } 
    
    /*
     * Create Material  
     */
    public function create()
    {
        $projects = Project::all();
        return view('addmaterial',compact('projects'));
    }
    /*
     * Edit Materials 
     */
    public function edit($id)
    {
        $materials = Material::where('id',$id)->first();
        return view('material-edit',compact('materials'));
    } 
    /*
     * Create Material
     */
    public function store(Request $request)
    {
      
        $validator          =  $request->validate([
            'description'   => 'required',
            'quantity'      => 'required',
            'unit'          => 'required',
            'total'         => 'nullable',
            'color'         => 'required',
            'size'          => 'required',
        ]);
        $materials = new Material;
        $materials->fill($validator);
        if ($materials->save()) {
            return redirect(url('material-list'))->with('success','Successfully Created');
        } else {
            return response()->json(['error'=>'not created'],401);
        }   
    }

    /*
     * Update Material
     */
    public function update(Request $request,$id)
    {
       
        $validator          =  $request->validate([
            'description'   => 'required',
            'quantity'      => 'required',
            'unit'          => 'required',
            'color'         => 'required',
            'size'          => 'required',
        ]);
        $materials = Material::where('id',$id)->update([
            'description'               => $request->description,
            'quantity'                  => $request->quantity,
            'unit'                      => $request->unit,
            'color'                     => $request->color,
            'size'                      => $request->size
        ]);
        if ($materials) {
            return redirect(url('material-list'))->with('success','Successfully Updated');
        } else {
            return response()->json(['error'=>'Material not updated'],401);
        }   
    }
}
