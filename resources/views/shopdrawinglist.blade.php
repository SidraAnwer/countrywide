@extends('layouts.app5')


@section('content')

   <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h1 class="head1new ml-3">Shop Drawing</h1>
              @include('flash')
            </div>
          </div>
<table class="table bg-white mt-5">
  <thead>
    <tr style="border-bottom: 7px solid #F8F9FF;">
      <th class="tableheadnew text-left" style="width: 8%;" scope="col">#</th>
      <th class="tableheadnew text-left" style="width: 79%;" scope="col">Project Name</th>
      <th class="tableheadnew " style="width: 13%;">View Details</th>
    </tr>
  </thead>
  @foreach($projects as $project)
  <tbody>
    <tr style="border-bottom: 7px solid #F8F9FF;">
      <th class="tabledata text-left">{{$project->id}}</th>
      <td class="tabledata text-left">{{$project->name}}</td>
      <td class=""><a href="{{url('drawing-view')}}">
          <a href="{{url('drawing-view',$project->id)}}"><button type="button" class="btn accbtn23 " >View Drawings</button></a></td>
      </tr>
  </tbody>
  @endforeach
</table>
  </div>
@endsection
