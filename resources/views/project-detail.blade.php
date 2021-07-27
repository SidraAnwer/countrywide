@extends('layouts.app2')


@section('content')
      <!-- Content -->
    <!--  <main class="s-layout__content">-->
    <!--    <div class="container containoutn" id="containoutn">-->
    <!--      <div class="row">-->
    <!--        <div class="col-lg-12 col-md-12 col-sm-12 col-12">-->
    <!--          <h1 class="head1new ml-3">Project Detail</h1>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <form method="POST" action="{{url('store-project')}}">-->
    <!--        @csrf-->
    <!--          <div class="row mt-4">-->
    <!--            <div class="col-lg-8 col-md-8 col-sm-12 col-12">-->
    <!--              <div class="row mt-3">-->
    <!--                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">-->
    <!--                  <p class="addprjtitlfrm">Project Name</p>-->
    <!--                </div>-->
    <!--                <div class="col-lg-10 col-md-10 col-sm-10 col-10">-->
    <!--                  <input type="text"  name="project_name" value="{{$projects->name}}" class="addprjformin">-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="row mt-3"pr>-->
    <!--                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">-->
    <!--                  <p class="addprjtitlfrm">Address</p>-->
    <!--                </div>-->
    <!--                <div class="col-lg-10 col-md-10 col-sm-10 col-10">-->
    <!--                  <input type="text"  name="address"  value="{{$projects->address}}" class="addprjformin">-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="row mt-3">-->
    <!--                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">-->
    <!--                  <p class="addprjtitlfrm">Contractor</p>-->
    <!--                </div>-->
    <!--                <div class="col-lg-10 col-md-10 col-sm-10 col-10">-->
    <!--                  <input type="text" name="contractor"  value="{{$projects->contractor}}" class="addprjformin">-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="row mt-3">-->
    <!--                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">-->
    <!--                  <p class="addprjtitlfrm">Owner</p>-->
    <!--                </div>-->
    <!--                <div class="col-lg-10 col-md-10 col-sm-10 col-10">-->
    <!--                  <input type="text" name="owner"  value="{{$projects->owner}}" class="addprjformin">-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-cenetr mt-3">-->
    <!--              <img src="assets/addprjlogo.PNG" alt="">-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="col-lg-12 col-md-12 col-sm-6 tableresp">-->
    <!--            <table class="table mt-5">-->
    <!--              <thead>-->
    <!--                <tr style="background-color: white;border:1px solid white;border-radius: 8px;border-bottom: 15px solid #F8F9FF;">-->
    <!--                  <th class="tablehead txet-center" scope="col">Project BreakDown</th>-->
    <!--                  <th class="tablehead txet-center"  scope="col">% completed</th>-->
  
    <!--                </tr>-->
    <!--              </thead>-->
    <!--            </table>-->
    <!--          </div>-->
    <!--          <div class="col-lg-12 col-md-12 col-sm-6 tableresp">-->
    <!--            <table class="table">-->
    <!--              <tbody>-->
    <!--                <tr>-->
    <!--                  <td><h1>Ist Story</h1></td>-->
    <!--                  <td></td>-->
    <!--                  <td><i class="fa fa-down-arrow"></i></td>-->
    <!--                </tr>-->
    <!--              </tbody>-->
    <!--            </table>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--    </form>-->
    <!--  </main>-->
    <!--</div>-->
          <form method="POST" action="{{url('store-project')}}">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <h1 class="head1new ml-3">Project Details</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
              <button class="btn adduserbtn">Edit Details</button>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
              <div class="row mt-3">
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">
                  <p class="addprjtitlfrm">Project Name</p>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                  <input type="text" value="{{$projects->name}}"  class="addprjformin">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">
                  <p class="addprjtitlfrm">Address</p>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                  <input type="text"  value="{{$projects->address}}"  class="addprjformin">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">
                  <p class="addprjtitlfrm">Contractor</p>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                  <input type="text"  value="{{$projects->contractor}}"  class="addprjformin">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">
                  <p class="addprjtitlfrm">Owner</p>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                  <input type="text"   value="{{$projects->owner}}" class="addprjformin">
                </div>
              </div>
            </div>
            </form>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-cenetr mt-3">
              <img src="assets/addprjlogo.PNG" alt="">
            </div>
          </div>
          <div class="row my-3">
            <div class="col-lg-12"  style="background-color: white;">
              <div class="row px-2 pt-3">
                <div class="col-lg-3">
                  <p class="tableheadnew font-weight-bolder">Project Breakdown</p>
                </div>
                <div class="col-lg-9">
                  <p class="tableheadnew font-weight-bolder">% completed</p>
                </div>
              </div>
            </div>
          </div>
          @foreach($projects->stories as $story)
          <div class="row my-3">
            <div class="col-lg-12"  style="background-color: white;padding: 15px;">
              <div class="row">
                
                <div class="col-lg-3 col-md-5 col-sm-12 col-12">
                  <span class="head1new ml-3">{{$story->name}}</span>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-7 pt-3">
                  <div class="progress" style="height: 25px;width: 30%;">
                    <div class="progress-bar" style="width: {{$status}}%;background-color: #1ACA79;color:black;font-size:10px!important;" role="progressbar"  aria-valuenow="{{$status}}" aria-valuemin="0" aria-valuemax="100">{{$status}} completed</div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                   <a href="{{url('appartment/detail',$story->project_id)}}" <i class="fa fa-caret-down pt-2" style="font-size: 30px;color:#000;text-decoration:none;"></i></a>
                </div>
              </div>
            </div>
          </div>
         @endforeach
@endsection
@push('scripts')
<script type="text/javascript">
    $('.sub-menu ul').hide();
    $(".sub-menu a").click(function () {
    $('.sub-menu ul').toggle();
    });
    </script>
    <script type="text/javascript">
    $('.sub-menu1 #nbnb').hide();
    $(".sub-menu1 #aaaa").click(function () {
    $('.sub-menu1 #nbnb').toggle();
    });
    </script>
    <script type="text/javascript">
    $('.sub-menu2 #nbnb2').hide();
    $(".sub-menu2 #aaaa2").click(function () {
    $('.sub-menu2 #nbnb2').toggle();
    });

    $(document).ready(function(){
      $(".StoryDownBtn").click(function(){
        $("#collapsetwo").slideToggle();
      });
    });
    </script>


@endpush