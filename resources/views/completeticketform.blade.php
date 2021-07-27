@extends('layouts.app3')


@section('content')
<!-- Content -->

<h1 class="head1new ">Completed Ticket Forms
</h1>

<div class="row">
  <div class="col-lg-12 mt-2">
    <select name="" id="" class="form-control slec1">
        <option value="{{$projects->id}}">{{$projects->name}}</option>
      
    </select>
  </div>
</div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12 col-12  mt-5">
    <div class="cmplformd" style="text-align:center;">
        <input type="file" style="display:none;">
         <a href="{{url('add-ticket-form')}}"><i style="font-size:20px;font-weight:600;color: #EB3C16 !important;" class="fa fa-plus"></i></a>
    </div>
          <h1 class="cmplfrmimh">Add Time Sheet</h1>
  </div>
  @foreach($projects->orders as $order)
  <div class="col-lg-3 col-md-3 col-sm-12 col-12  mt-5">
    <div class="cmplformd">
      <a href="{{url('ticket-form-edit',$order->id)}}"><img src="{{asset('assets/miniform.b11b3881.png')}}" alt=""></a>
    </div>
       <h1 class="cmplfrmimh">{{$order->ticket_no}}</h1>
      <p class="cmplfrmimp">(1 jan 2021 - 7 jan 2021)</p>
  </div>
  @endforeach
</div>
@endsection