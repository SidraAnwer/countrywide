<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sketche;
use App\Models\Project;


class SketchController extends Controller
{

   public function create()
    {
        $projects = Project::all();
        return view('upload-shop-drawings',compact('projects'));
    }
    
    public function viewSketche($id)
    {
        $projects = Project::all();
        $sketches = Sketche::where('project_id',$id)->get();
        return view('sketch-view',compact('sketches','projects'));
    }
    
    public function index()
    {
        $sketches = Sketche::all();
        $projects = Project::all();
        return view('shopdrawinglist',compact('sketches','projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
          'file'                => 'required|mimes:jpeg,png,jpg,pdf',
        ]);

        $skeches                = new Sketche;

        if ($request->file('file')) {
          $imagePath            = $request->file('file');
          $imageName            = $imagePath->getClientOriginalName();
          $path = $request->file('file')->move(public_path('public/assets/uploads'), $imageName);
        }
        $skeches->project_id      = $request->project;
        $skeches->image           = $imageName;
        $skeches->path            = 'public/assets/uploads/'.$imageName;
        $skeches->save();
        
        return redirect(url('shopdrawinglist'))->with('success', 'Image uploaded successfully');
    }
    
    
     public function download($file_name) {
        $file_path = public_path('public/assets/uploads/'.$file_name);
        return response()->download($file_path);
      }
}
