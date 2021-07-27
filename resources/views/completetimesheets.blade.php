@extends('layouts.app')


@section('content')
<h1 class="head1new ">Completed Time Sheets
</h1>
<div class="row">
  <div class="col-lg-2 col-md-2 col-sm-3 col-2 mt-2">
    <select name="" id="" class="form-control slec1">
      <option value="">AECOM Building</option>
      <option value="">Apple Building</option>
    </select>
  </div>
 
</div>
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-12 col-12  mt-5">
    <div class="cmplformd" style="text-align:center;">
        <input type="file" style="display:none;">
      <i style="font-size:20px;font-weight:600;color: #EB3C16 !important;" class="fa fa-plus"></i>
    </div>
          <h1 class="cmplfrmimh">Add Time Sheet</h1>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 col-12  mt-5">
    <div class="cmplformd">
      <img src="assets/miniform.b11b3881.png" alt="">
    </div>
          <h1 class="cmplfrmimh">Week2 Time Sheet</h1>
      <p class="cmplfrmimp">(1 jan 2021 - 7 jan 2021)</p>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 col-12  mt-5">
    <div class="cmplformd">
      <img src="assets/miniform.b11b3881.png" alt="">
    </div>
          <h1 class="cmplfrmimh">Week3 Time Sheet</h1>
      <p class="cmplfrmimp">(1 jan 2021 - 7 jan 2021)</p>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 col-12  mt-5">
    <div class="cmplformd">
      <img src="assets/miniform.b11b3881.png" alt="">
    </div>
          <h1 class="cmplfrmimh">Week4 Time Sheet</h1>
      <p class="cmplfrmimp">(1 jan 2021 - 7 jan 2021)</p>
  </div>
</div>
  @endsection