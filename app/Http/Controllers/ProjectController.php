<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Project,Appartments,Story,Area};


class ProjectController extends Controller
{
    /*
    *List of Projects
    */
    public function index()
    {
        $projects = Project::all();
        return view('projectlist',compact('projects'));
    }
    /*
    *Create of Project
    */
    public function create()
    {
        return view('addproject');
    }
     /*
    *Create of Project
    */
    public function store(Request $request)
    {
         $this->validate($request,[
          'project_name'            =>  'required',
          'address'                 =>  'required',
          'contractor'              =>  'required',
          'owner'                   =>  'required',
          'image'                   =>  'nullable',
          'image.*'                 =>  'image|mimes:jpg,png,pdf'
        ]);
        
        $projects                   =   Project::create([
            'name'                  =>  $request->project_name,
            'address'               =>  $request->address,
            'contractor'            =>  $request->contractor,
            'owner'                 =>  $request->owner,
            'status'                =>  $request->status
        ]);
        $stories                    = Story::create([
            'project_id'            =>$projects->id,
            'name'                  => $request->story_name,
        ]);
        
        
        $profileImage = $request->file('photo')->getClientOriginalName();

        $path         = $request->file('photo')->move('/images/upload/', $profileImage);
         
        $appartments                  = Appartments::create([
            'project_id'              =>$projects->id,
            'name'                    =>$request->appart_name,
            'image'                   =>$path
        ]);

        $areas                        = Area::create([
            'project_id'              =>$projects->id,
            'name'                    =>$request->area_name,
            'image'                   =>$path
        ]);
         
        if($projects){
            return redirect(url('project-list'))->with('success','Successfully Created');
        }else {
            return response()->json(['error'=>'not created'],401);
        }   
       
    }


    public function projectDetail($id)
    {
        $projects  = Project::with('stories')->find($id);
        $getAppart = Appartments::where('project_id',$id)->where('status',1)->get();
        $status    = $getAppart->count()/$projects->appartments->count()*100;
        return view('project-detail',compact('projects','status'));
    }
    
    
    public function appartmentDetail($id)
    {
        $projects = Project::with('stories','appartments')->find($id);

        return view('apartmentdetail',compact('projects'));
    }
     
    public function  areaDetail($id)
    {
        $projects = Project::with('stories','appartments','areas')->find($id);
        return view('areadetails',compact('projects'));
    }
     public function projectDelete($id)
    {
        $delete = Project::where('id', $id)->delete();
        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "Project deleted successfully";
        } else {
            $success = true;
            $message = "Project not found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
