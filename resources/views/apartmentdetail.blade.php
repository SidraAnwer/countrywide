@extends('layouts.app2')


@section('content')
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h1 class="head1new">Apartment Details</h1>
            </div>
             <div class="col-lg-12 mt-2">
    <select name="" id="" class="form-control slec1">
    @foreach($projects->appartments as $appart)
                <option value="">Select Apartment</option>
                <option value="{{$appart->name}}">{{$appart->name}}</option>
                @endforeach
    </select>
  </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-6 tableresp">
            <table class="table mt-5">
              <thead>
                <tr style="background-color: white;border-bottom: 8px solid #F8F9FF;border-top: 8px solid #F8F9FF;">
                  <td class="tablehead" width="20%" scope="col">Unit#</td>
                  <td class="tablehead" width="80%"  scope="col">Area</td>
                </tr>
              </thead>
            </table>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-6 tableresp">
            <table class="table">
            @foreach($projects->stories as $story) 
              <tbody >
                <tr class="pltabtr">
                  <div class="row mx-1">
                    <div class="col-lg-12"  style="background-color: white;padding: 15px;">
                      <div class="row">
                        
                    <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                      <span class="head1new ml-3">{{$story->name}}</span>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-3 ">
                      <i class="fa fa-caret-down pt-2" style="font-size: 30px;color:#000;"></i>
                    </div>
                      </div>
                    </div>
                  </div>
                </tr>
                <!--<tr style="background-color:white;">-->
                <!--   <td width="20%" class="accoptq pt-2">A1</td>-->
                <!--    <td width="63%" class="accoptq pt-2">Master Baths</td>-->
                <!--    <td width="17%">-->
                <!--         <button class="btn btn-link" >-->
                <!--                 <a href="{{url('area/detail')}}"><i class="fa fa-angle-right" style="font-size: 14px;color:#000;"></i></a>-->
                <!--              </button>-->
                <!--    </td>-->
                <!--</tr>-->
                @foreach($projects->appartments as $appartment) 
                <tr class="pltabtr ">
                  <div id="accordion">
                    <div class="card mt-1" style="border:2px solid #F8F9FF;">
                      <div class="card-header bg-white" id="headingOne">
                        <div class="mb-0">
                          <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                              <p class="accoptq pt-2">A1</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                              <p class="accoptq pt-2">{{$appartment->name}}</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                              
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                              
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-2 txet-right">
                              <button class="btn btn-link" >
                                 <a href="{{url('area/detail',$appartment->project_id)}}"><i class="fa fa-caret-right" style="font-size: 14px;color:#000;"></i></a>
                              </button>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="background-color: #F7F7F7;">
                        <div class="card-body text-right">
                          
                        </div>
                      </div>
                    </div>
        
                  </div>
                </tr>
                @endforeach
              </tbody>
              @endforeach
            </table>
          </div>
           <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 my-3 text-right">
              <button class="btn adddetbtn">Edit</button>
            </div>
          </div>
   @endsection