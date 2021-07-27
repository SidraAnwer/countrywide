<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Role,User,WorkingHour,Project};


class EmployeeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users',compact('users'));
    }
    /*
    *Emplp
    */
    public function create()
    {
        $roles = Role::all();
        return view('add-user',compact('roles'));
    }
    
    public function timeSheet()
    {
        $projects   = Project::all();
        return view('timesheet',compact('projects'));
    }
    
    public function store(Request $request)
    {
       
        $this->validate($request,[
           'fullname'=>'required',
           'email'=>'required',
           'role'=>'required',
        ]);

        $users = User::create([
            'name'=>$request->fullname,
            'email'=>$request->email,
            'role_id'=>$request->role,
            'password'=>1235,
        ]);
        if($users){
            return redirect(url('add-employee-list'))->with('success','Successfully Created');  
        } else {
            return response()->json(['error'=>'not created'],401);
        }   
    }


    public function employeeTimeSheet(Request $request)
    {
          $employeeName         = User::where('name',$request->name)->first();
          $timesheets           = new WorkingHour;
          $timesheets->rt       = $request->get('rt');
          $timesheets->ot       = $request->get('ot');
          $timesheets->user_id  =  $employeeName->id;
          $timesheets->working_day_id = 'Monday';
          $timesheets->save();
           if($timesheets){
            return redirect(url('add-employee-list'))->with('success','Successfully Created');  
            } else {
                return response()->json(['error'=>'not created'],401);
            }   
          
    }
    
    
     public function delete($id)
    {
        $delete = User::where('id', $id)->delete();
        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        }
        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
