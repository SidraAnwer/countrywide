@extends('layouts.app2')

<style>

#table-design table { 
    border-collapse: separate; 
    border-spacing: 0 5px; 
 
}
#table-design td {
    border: solid 1px transparent;
    border-style: solid none;
    padding: 10px;
}
#table-design td:first-child {
    border-left-style: solid;
    border-top-left-radius: 10px; 
    border-bottom-left-radius: 10px;
}
#table-design td:last-child {
    border-right-style: solid;
    border-bottom-right-radius: 10px; 
    border-top-right-radius: 10px; 
}
</style>
@section('content')
      <!-- Content -->
          <div class="row">
            <div class="col-md-12">
            @if(Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
              @php
                  Session::forget('success');
              @endphp
          </div>
          @endif
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <h1 class="head1new ml-3">Project List</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
              <a href="{{url('add-project')}}"><button class="btn adduserbtn">+ Add Project</button></a>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-2">
              <div class="pltopdiv text-center">
                <h5 class="pltopdivh5">Open Projects</h5>
                <h1 class="pltopdivh1">235</h1>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-2">
              <div class="pltopdiv text-center">
                <h5 class="pltopdivh5">Completed Projects</h5>
                <h1 class="pltopdivh1">130</h1>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt-2">
              <div class="pltopdiv text-center">
                <h5 class="pltopdivh5">Total Projects</h5>
                <h1 class="pltopdivh1">365</h1>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-6 tableresp" id="table-design">
          <table class="table mt-5">
            <thead >
              <tr style="border-top:2px solid red!important;">
                <td width="15%" class="tablehead " scope="col"></td>
                <td width="15%" class="tablehead" scope="col">Pro.#</td>
                <td width="40%" class="tablehead"  scope="col">Tital</td>
                <td width="15%" class="tablehead ">Status</td>
                <td width="15%" class="tablehead text-center">View Detail</td>
              </tr>
            </thead>
            @foreach($projects as $project)

            <tbody >
              <tr class="pltabtr" >
                  
                <td class=" py-4">
                  <i style="font-size:20px;" class="fa fa-circle-o"></i>
                </td>
                <td class="tabledata pt-4 ">{{$project->id}}</td>
                <td class="tabledata pt-4 ">{{$project->name}}</td>
                <td class="tabledata pt-4 ">{{$project->stories->count()}} Completed</td>
                <td class="tablehead text-center">
                  <div class="dropdown">
                    <button class="btn tabledrp34 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                    </button>
                    <div class="dropdown-menu mt-3" style="margin-right: 10px;" aria-labelledby="dropdownMenuButton">
                       <a class="dropdown-item" href="{{url('project-detail',$project->id)}}"> &nbsp View</a>
                       <a class="dropdown-item"><button style="background-color:transparent !important;border:none !important;" onclick="deleteConfirmation({{$project->id}})">Remove</button></a>
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
                    url: "{{url('/project-delete/')}}/" + id,
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