<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Order,OrderDetail,Project};

class ExtraWorkOrderController extends Controller
{
    /*
     * Show all Extra Work Order 
     */
    public function index()
    {
          $orders = Order::with('orderDetails')->get();
          $projects = Project::all();
          return view('ticketform',compact('orders','projects'));
    }

     /*
     * Create Ticket Form 
     */
    public function create()
    {
        $projects = Project::all();
        return view('addform',compact('projects'));
    }
    /*
     * Show all Extra Work Order 
     */
    public function edit($id)
    {
        $projects = Project::all();
        $orders = Order::where('id',$id)->with('orderDetails')->first();
        return view('ticket-form-edit',compact('projects','orders'));
    }
    /*
     * Create Extra Work Order 
     */
    public function store(Request $request)
    {  
      
        $request->validate([
            'ticket_no'               =>'required',
            'project'                 =>'required',
            'constractor_sup_name'    =>'required',
            // 'constractor_sup_sign'    =>'required',
            //Material
            'description'             =>'nullable',
            'quantity'                =>'nullable',
            'unit'                    =>'nullable',
            'total'                   =>'nullable',
            'color'                   =>'nullable',
            'size'                    =>'nullable',
            //Labor
            'labor_description'       =>'nullable', 
            'regularly_hours'         =>'nullable',
            'premium_hours'           =>'nullable',
            'over_time_hours'         =>'nullable',
            'double_time'             =>'nullable',
            'total'                   =>'nullable',
        ]);
        $orders = Order::create([
            'ticket_no'               => $request->ticket_no,
            'project'                 => $request->project,
            'job_no'                  => $request->job_no,
            'constractor'             => $request->constractor,
            'constractor_sup_name'    => $request->constractor_sup_name,
            'constractor_sup_sign'    => $request->constractor_sup_sign
         ]);
         if($orders) {
             //Materials Create with Order
            $orderDetails = OrderDetail::create([
            'order_id'                  => $orders->id,
            'description'               => $request->description,
            'quantity'                  => $request->quantity,
            'unit'                      => $request->unit,
            'total'                     => $request->total,
            'color'                     => $request->color,
            'size'                      => $request->size,
              //Labor Create with Order
            'labor_category'            => $request->description,
            'regularly_hours'           => $request->regularly_hours,
            'premium_hours'             => $request->premium_hours,
            'over_time_hours'           => $request->over_time_hours,
            'double_time'               => $request->double_time,
            'labor_total'               => $request->total,
            ]);
          
            return redirect(url('ticket-form'))->with('success','Successfully Added');
           
        }
    }

    /*
     * Update Extra Work Order 
     */
    public function update(Request $request,$id)
    {
       
        $request->validate([
            'ticket_no'               =>'required',
            'project'                 =>'required',
            'constractor_sup_name'    =>'required',
            'constractor_sup_sign'    =>'required',
            //Material
            'description'             =>'nullable',
            'quantity'                =>'nullable',
            'unit'                    =>'nullable',
            'total'                   =>'nullable',
            'color'                   =>'nullable',
            'size'                    =>'nullable',
            //Labor
            'description'             =>'nullable', 
            'regularly_hours'         =>'nullable',
            'premium_hours'           =>'nullable',
            'over_time_hours'         =>'nullable',
            'double_time'             =>'nullable',
            'total'                   =>'nullable',
        ]);
        $orders = Order::where('id',$id)->update([
            'ticket_no'               => $request->ticket_no,
            'project'                 => $request->project,
            'job_no'                  => $request->job_no,
            'constractor'             => $request->constractor,
            'constractor_sup_name'    => $request->constractor_sup_name,
            'constractor_sup_sign'    => $request->constractor_sup_sign
         ]);
         if($orders) {
             //Materials Create with Order
            $orderDetails = OrderDetail::where('id',$id)->update([
            'order_id'                  => $orders->id,
            'description'               => $request->description,
            'quantity'                  => $request->quantity,
            'unit'                      => $request->unit,
            'total'                     => $request->total,
            'color'                     => $request->color,
            'size'                      => $request->size,
              //Labor Create with Order
            'labor_category'            => $request->description,
            'regularly_hours'           => $request->regularly_hours,
            'premium_hours'             => $request->premium_hours,
            'over_time_hours'           => $request->over_time_hours,
            'double_time'               => $request->double_time,
            'labor_total'               => $request->total,
            ]);
            return redirect(url('ticket-form'))->with('success','Successfully Updated');
         }
    }
    
    
    public function completeTicketForm($id)
    {
        $projects = Project::find($id);
        return view('completeticketform',compact('projects'));
    }
}

