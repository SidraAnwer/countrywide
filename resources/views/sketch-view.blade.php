@extends('layouts.app5')


@section('content')
      <!-- Content -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h1 class="head1new ml-3">Shop Drawing</h1>
            </div>
          </div>
                      <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ml-4">
              <select name="" id="" class="form-control slec1">
              <option value="">Select Project</option>
                @foreach($projects as $project)
                   <option value="{{$project->id}}">{{$project->name}}</option>
                @endforeach
              </select>
            </div>
            </div>
          <div class="row mt-3 mx-4">
              @foreach($sketches as $sket)
               
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                  <img src="{{url($sket->path)}}" alt="" class="areaimg">
                  <a href="{{url($sket->path)}}" target=”_blank”><button class="btn btn-success">View </button> </a>
                  <a  href="{{url('sketche/view/download',$sket->image)}}"><button class="btn btn-info">Download </button> </a>
                </div>
        
              @endforeach
          </div>
@endsection
