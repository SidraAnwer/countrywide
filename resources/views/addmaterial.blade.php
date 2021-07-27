@extends('layouts.app4')


@section('content')
<!-- Content -->

      <h1 class="head1new ">Add Material</h1>
      <form action="{{route('add.material')}}" method="POST">
        {{ csrf_field()}}
          <div class="row">
            <div class="col-lg-12 mt-2">
              <select name="" id="" class="form-control slec1">
                 <option value="">Select Project</option>
                    @foreach($projects as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                    @endforeach
              </select>
            </div>
            <div class="col-lg-12" style="margin-top:100px;">
              <input type="text" class="matinp" name="description" placeholder="Material Name">
            </div>
              <div class="col-lg-12 mt-4">
              <input type="text" class="matinp"  name="color" placeholder="Color Name">
            </div>
            <div class="col-lg-12 mt-3">
              <select name="size" id="" class="form-control slec1">
                <option value="">Select Size</option>
                <option value="XXl">XXL</option>
                <option value="xl">XL</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="S">S</option>
              </select>
            </div>
            <div class="col-lg-12 mt-4">
              <select name="quantity" id="" class="form-control slec1">
                <option value="">Select Quantity</option>
                <option value="1">1</option>
                <option value="2">2</option>
              </select>
            </div>
            <div class="col-lg-12 mt-4">
              <select name="unit" id="" class="form-control slec1">
                <option value="">Select Unit</option>
                <option value="bags">Bags</option>
              </select>
            </div>
            <div class="col-lg-5 mt-4">
              <button type="submit" class="btn addmaterialbtn1">+ Add Material</button>
            </div>
          </div>
      </form>

@endsection