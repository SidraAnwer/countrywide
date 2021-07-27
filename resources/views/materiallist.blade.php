@extends('layouts.app4')


@section('content')
<!-- Content -->

<h1 class="head1new ml-3">Material List</h1>
@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
    @php
        Session::forget('success');
    @endphp
</div>
@endif
<table class="table bg-white mt-5">
  <thead>
    <tr>
      <th class="tablehead text-left"  scope="col">#</th>
      <th class="tablehead text-left"  scope="col">Name</th>
      <th class="tablehead text-left"  scope="col">Color</th>
      <th class="tablehead text-left"  scope="col">Size</th>
      <th class="tablehead text-left"  scope="col">Quantity</th>
      <th class="tablehead text-left"  scope="col">Units</th>
      <th class="tablehead text-left" >Edit</th>
    </tr>
  </thead>
  @foreach($materials as $material)
  <tbody>
    <tr>
      <th class="tabledata text-left">{{ $material->id}}</th>
      <td class="tabledata text-left">{{ $material->description}}</td>
      <td class="tabledata text-left">{{ $material->color}}</td>
      <td class="tabledata text-left">{{ $material->size}}</td>
      <td class="tabledata text-left">{{ $material->quantity}}</td>
      <td class="tabledata text-left">{{ $material->unit}}</td>
      <td class="tablehead text-left"><a href="{{route('material.edit',$material->id)}}"><i class="fa fa-edit"></i></a></td>
    </tr>

  </tbody>
  @endforeach
</table>
   @endsection