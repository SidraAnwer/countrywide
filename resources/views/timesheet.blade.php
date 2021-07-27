@extends('layouts.app')


@section('content')
<!-- Content -->

<!-- Content -->

<h1 class="head1new ">Time Sheet
</h1>
<form method="POST" action="{{url('employeeTimeSheet')}}">
  @csrf
<div class="row">
  <div class="col-lg-2 col-md-2 col-sm-6 col-12 mt-2">
    <select name="" id="" class="form-control slec1">
      <option value="">Select Project</option>
        @foreach($projects as $project)
        <option value="{{$project->id}}">{{$project->name}}</option>
        @endforeach
    </select>
  </div>
  </div>
  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-5">
    <img src="{{asset('assets/images/Capture.PNG')}}" alt="">
  </div>
    <div class="col-lg-5  col-md-5 col-sm-12 col-12 mt-5">
   <div class="row no-gutters mt-4">
     <div class="col-lg-3 col-md-4 col-sm-4 col-4 font-weight-bolder text-uppercase">Forman:</div>
     <div class="col-lg-9 col-md-8 col-sm-8 col-8">
       <input type="text" class="timeshinp" name="name">
     </div>
   </div>
   <div class="row no-gutters mt-4">
     <div class="col-lg-3 col-md-4 col-sm-4 col-4 font-weight-bolder text-uppercase">Job Name:</div>
     <div class="col-lg-9 col-md-8 col-sm-8 col-8">
       <input type="text" class="timeshinp" name="job_name">
     </div>
   </div>
  </div>
    <div class="col-lg-3  col-md-3 col-sm-12 col-12 mt-5">
   <div class="row no-gutters mt-4">
     <div class="col-lg-3 col-md-4 col-sm-4 col-4 font-weight-bolder text-uppercase">date:</div>
     <div class="col-lg-9 col-md-8 col-sm-8 col-8">
       <input type="text" class="timeshinp">
     </div>
   </div>
  </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-6 tableresp">
  
<table class="table  mt-3 table-bordered">
  <thead>
    <tr>
      <th class="tablehead" style="border-top:2px solid transparent;border-left:2px solid transparent;" ></th>
      <th class="tablehead text-center" style="background-color: lightgrey;" colspan="2">Monday</th>
      <th class="tablehead text-center" style="background-color: lightgrey;" colspan="2">Tuesday</th>
      <th class="tablehead text-center" style="background-color: lightgrey;" colspan="2">Wednesday</th>
      <th class="tablehead text-center" style="background-color: lightgrey;" colspan="2">Thuresday</th>
      <th class="tablehead text-center" style="background-color: lightgrey;" colspan="2">Friday</th>
      <th class="tablehead text-center" style="background-color: lightgrey;" colspan="2">Saturday</th>
      <th class="tabledata2 text-center" style="background-color: lightgrey;" colspan="2">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr style="background-color: lightgrey;">
      <td class="tabledata2">Employee</td>
      <td class="tabledata">RT</td>
      <td class="tabledata">OT</td>
      <td class="tabledata">RT</td>
      <td class="tabledata">OT</td>
      <td class="tabledata">RT</td>
      <td class="tabledata">OT</td>
      <td class="tabledata">RT</td>
      <td class="tabledata">OT</td>
      <td class="tabledata">RT</td>
      <td class="tabledata">OT</td>
      <td class="tabledata">RT</td>
      <td class="tabledata">OT</td>
      <td class="tabledata2">RT</td>
      <td class="tabledata2">OT</td>
    </tr>
    <tr>
      <td class="tabledata">
         <input type="text"  class="addfrminp2"> 
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2 rt"  name="">
      </td>
      <td class="tabledata">
        <input type="text" id="rt2" class="addfrminp2 ot"  name="">
      </td>
      <td class="tabledata">
        <input type="text" id="ot2" class="addfrminp2 rt" name="ot">
      </td>
      <td class="tabledata">
        <input type="text" id="rt3"class="addfrminp2 ot" name="rt">
      </td>
      <td class="tabledata">
        <input type="text"id="ot3" class="addfrminp2 rt" name="ot">
      </td>
      <td class="tabledata">
        <input type="text" id="rt4"class="addfrminp2 ot" name="rt">
      </td>
      <td class="tabledata">
        <input type="text" id="rt4"class="addfrminp2 rt" name="ot">
      </td>
      <td class="tabledata">
        <input type="text" id="rt5"class="addfrminp2 ot" name="rt">
      </td>
      <td class="tabledata">
        <input type="text" id="ot5"class="addfrminp2 rt" name="ot">
      </td>
      <td class="tabledata">
        <input type="text" id="rt6"class="addfrminp2 ot" name="rt">
      </td>
      <td class="tabledata">
        <input type="text" id="ot6" class="addfrminp2 " name="ot">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2 totalrt" id="totalrt"></td>
      <td class="tabledata2 totalot" id="totalot"></td>
    </tr>
    <tr>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
    <tr>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
    <tr>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
    <tr>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
    <tr>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
    <tr>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
    <tr>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
    <tr>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
    <tr>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
        <tr style="background-color: #f8de7e;">
      <td class="tabledata" rowspan="2">Total Hours</td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata2"></td>
      <td class="tabledata2"></td>
    </tr>
        <tr style="background-color: #f8de7e;">
      <td class="tabledata">
        <input type="text" class="addfrminp2">
      </td>
      <td class="tabledata" colspan="2"></td>
      <td class="tabledata" colspan="2"></td>
      <td class="tabledata" colspan="2"></td>
      <td class="tabledata" colspan="2"></td>
      <td class="tabledata" colspan="2"></td>
      <td class="tabledata" colspan="2"></td>
      <td class="tabledata" colspan="2"></td>
    </tr>

  </tbody>
</table>
<div class="col-lg-12 py-4 text-right">
    <button class="newaddfrmbtn2 mr-2" >Edit</button>
    <button class="newaddfrmbtn2 mr-2" type="submit">Save</button>
  </div>
</div>
</form>
@endsection


