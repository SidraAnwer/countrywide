@extends('layouts.app')


@section('content')
      <!-- Content -->
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <h1 class="head1new ml-3">Users</h1></br>
              @include('flash')
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
              <a href="{{url('add-employee')}}"><button class="btn adduserbtn">+ Add User</button></a>
            </div>
          </div>
          <table class="table mt-5">
            <thead>
              <tr  style="background-color: transparent !important;">
                <th class="tablehead" width="20%" scope="col"></th>
                <th class="tablehead" width="40%" scope="col">Name</th>
                <th class="tablehead" width="30%"  scope="col">Position</th>
                <th class="tablehead text-center" width="10%">View Details</th>
              </tr>
            </thead>
            @foreach($users as $user)
            <tbody class="bg-white">
              <tr style="border-bottom: 5px solid #E6E6E6;">
                <th class="tabledata">
                  <img src="{{asset('assets/images/images.jpg')}}" class="tableuserimg" alt="">
                </th>
                <th class="tabledata">{{$user->name}}</th>
              
                <td class="tabledata">{{$user->role->name}}</td>
              
                <td class="tablehead text-center">
                  <div class="dropdown">
                    <button class="btn tabledrp dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                    </button>
                    <div class="dropdown-menu mt-3" style="margin-right: 150px;" aria-labelledby="dropdownMenuButton">
                       <a class="dropdown-item"><button onclick="deleteConfirmation({{$user->id}})">Remove</button></a>
                    </div>
                  </div>
                </td>
              </tr>
           
            </tbody>
            @endforeach
          </table>
    </div>
 @endsection
 
 
@push('scripts')
  <script>
      function deleteConfirmation(id) {
        swal({
            title: "Delete?",
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/employee-delete/')}}/" + id,
                    data: {_token: CSRF_TOKEN,id:id},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
  </script>
@endpush