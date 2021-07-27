@extends('layouts.app3')


@section('content')
<!-- Content -->
<h1 class="head1new ml-3">Ticket Forms</h1>
@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
    @php
        Session::forget('success');
    @endphp
</div>
@endif
<table class="table bg-white mt-5">
  <thead style="border-bottom:7px solid #F8F9FF;border-top:7px solid #F8F9FF;">
    <tr>
      <th class="tableheadnew text-left" style="width: 8%;" scope="col">#</th>
      <th class="tableheadnew text-left" style="width: 82%;" scope="col">Project Name</th>
      <th class="tableheadnew text-left" style="width: 10%;">View Details</th>
    </tr>
  </thead>
  @foreach($projects as $project)
  <tbody>
    <tr style="border-bottom:7px solid #F8F9FF;">
      <th class="tabledata text-left">{{$project->id}}</th>
      <td class="tabledata text-left">{{$project->name}}</td>
      <td class="tablehead text-left"><a href="{{url('complete-ticket-form',$project->id)}}"><i style="color:black;" class="fa fa-edit"></a></i></td>
    </tr>
  @endforeach
  </tbody>
</table>
  @endsection