@extends('layouts.app')


@section('content')
<!-- Content -->

<!-- Content -->
<h1 class="head1new ">Add Employee</h1>
    <form action="{{url('add-employee-store')}}" method="POST">
    {{ csrf_field() }}
      <div class="row" style="margin-top: 170px;">
        <div class="offset-lg-4 col-lg-4 offset-md-4 col-md-4 col-sm-12  mt-3">
          <input type="text" name="fullname" class="matinp" placeholder="Full Name">
        </div>
          <div class="offset-lg-4 col-lg-4 offset-md-4 col-md-4 col-sm-12 mt-3">
          <input type="email" name="email" class="matinp" placeholder="Email">
        </div>
        <div class="offset-lg-4 col-lg-8 offset-md-4 col-md-8 col-sm-12 mt-3">
          <select name="role" id="" class="form-control slec1">
          <option value="">Select Role</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="offset-lg-4 col-lg-4 offset-md-4 col-md-4 col-sm-12 mt-3">
          <button type="submit" class="btn addmaterialbtn1">Add User</button>
        </div>
      </div>
     </form>
@endsection