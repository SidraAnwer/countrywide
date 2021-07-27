@extends('layouts.app1')

@section('content')
          <div class="row px-5 my-4" style="margin-top:10px;">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
              <div class="dashdiv1 text-center">
                <p class="dashp1">Get additional Contributor Plus trail licenses for 30 days.<a style="text-decoration: underline;" href="">Learn how</a></p>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12 dashbtndiv">
              <button class="brn btndash1"><i class="fa fa-bar-chart"></i>&nbspView Statictics</button>
              <button class="brn btndash2"><i class="fa fa-upload"></i>&nbspExport List</button>
            </div>
          </div>
          <div class="row px-5">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <h4 class="dashheading1">Activity Feed</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                  <ul class="dashul2">
                    <li><i class="fa fa-refresh mr-2"></i></li>
                    <li>
                      <div class="dropdown">
                        <button class="btn dashdrp2 dropdown-toggle dashdrpbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                        </button>
                        <div class="dropdown-menu mt-1" style="margin-left: -120px !important;" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="feeddiv1">
                @foreach($users as $user)
                <div class="row no-gutters mt-3">
                  <div class="col-lg-1 col-md-12 col-sm-12 col-12">
                    <img  src="{{asset('assets/images/images.jpg')}}" class="tableuserimg2" alt="">
                  </div>
                  <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <p class="feedp1"></p>
                    <p class="feedp2 ml-3 mt-2">{{$user->name}}</p>
                  </div>
                  <div class="col-lg-2 col-md-12 col-sm-12 col-12 text-right pt-3">
                    <button class="btn tabledrp1"><i class="fa fa-angle-right pltabfa"></i></button>
                  </div>
                </div>
               @endforeach
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <h4 class="dashheading1">Statistics</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                  <ul class="dashul2">
                    <li><i class="fa fa-refresh mr-2"></i></li>
                    <li>
                      <div class="dropdown">
                        <button class="btn dashdrp2 dropdown-toggle dashdrpbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                        </button>
                        <div class="dropdown-menu mt-1" style="margin-left: -120px !important;" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="feeddiv1">
                <div class="row no-gutters mt-3">
                  
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-3">
                    <p class="feedp2">Quota</p>
                    <p class="feedp1">The graph shows you your total
                      storage usage to date, and how
                      much storage you have available.
                      Hover over the sections to see
                    more detail</p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-3" style="border-left: 1px solid black;">
                    graph here
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <h4 class="dashheading1">Shared Documents</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                  <ul class="dashul2">
                    <li><i class="fa fa-refresh mr-2"></i></li>
                    <li>
                      <div class="dropdown">
                        <button class="btn dashdrp2 dropdown-toggle dashdrpbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                        </button>
                        <div class="dropdown-menu mt-1" style="margin-left: -120px !important;" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="feeddiv1">
                <ul class="nav nav-tabs" role="tablist" style="border:none;">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#withyou" role="tab">With You</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#byyou" role="tab">By You</a>
                  </li>
                  </ul><!-- Tab panes -->
                  <div class="tab-content mt-4">
                    <div class="tab-pane active text-center" id="withyou" role="tabpanel">
                      <img src="{{asset('assets/images/ass1.PNG')}}" alt="">
                      <p class="feedp1">No shared documents at this moment</p>
                    </div>
                    <div class="tab-pane text-center" id="byyou" role="tabpanel">
                      <img src="{{asset('assets/images/ass1.PNG')}}" alt="">
                      <p class="feedp1">No shared documents at this moment</p>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <h4 class="dashheading1">Assignments</h4>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                  <ul class="dashul2">
                    <li><i class="fa fa-refresh mr-2"></i></li>
                    <li>
                      <div class="dropdown">
                        <button class="btn dashdrp2 dropdown-toggle dashdrpbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                        </button>
                        <div class="dropdown-menu mt-1" style="margin-left: -120px !important;" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#"></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="feeddiv1">
                <ul class="nav nav-tabs" role="tablist" style="border:none;">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">With You</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">By You</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Done</a>
                  </li>
                  </ul><!-- Tab panes -->
                  <div class="tab-content mt-4">
                    <div class="tab-pane active text-center" id="tabs-1" role="tabpanel">
                      <img src="{{asset('assets/images/ass2.PNG')}}" alt="">
                      <p class="feedp1">No assignments at this moment</p>
                    </div>
                    <div class="tab-pane text-center" id="tabs-2" role="tabpanel">
                       <img src="{{asset('assets/images/ass2.PNG')}}" alt="">
                      <p class="feedp1">No assignments at this moment</p>
                    </div>
                    <div class="tab-pane text-center" id="tabs-3" role="tabpanel">
                       <img src="{{asset('assets/images/ass2.PNG')}}" alt="">
                      <p class="feedp1">No assignments at this moment</p>
                    </div>
                  </div>
                </div>
              </div>
            
@endsection
