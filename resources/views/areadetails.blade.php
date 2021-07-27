@extends('layouts.app2')

@section('content')

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h1 class="head1new">Area Details</h1>
            </div>
            <div class="col-lg-12 mt-2">
              <select name="" id="" class="form-control slec1">
              @foreach($projects->areas as $area)
                <option value="">Select Apartment</option>
                <option value="{{$area->id}}">{{$area->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-6 tableresp">
            <table class="table mt-5">
              <thead>
                <tr  style="background-color: white;border:1px solid white;border-radius: 8px;border-bottom: 8px solid #F8F9FF;">
                  <th class="tablehead" width="60%" scope="col">Area Name</th>
                  <th class="tablehead"  scope="col">Status</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-6 tableresp">
            <table class="table">
              @foreach($projects->areas as $area)
              <tbody >
                <tr class="pltabtr">
                  <div class="row mx-1">
                    <div class="col-lg-12"  style="background-color: white;padding: 15px;">
                      <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                          <span class="head1new ml-3">{{$area->name}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </tr>
                <tr class="pltabtr ">
                  <div class="card mt-1">
                    <div class="card-header bg-white" id="headingOne">
                      <div class="mb-0">
                        <div class="row">
                          <div class="offset-lg-6 col-lg-3 offset-md-6 col-md-3 colsm-12 col-12 text-right">
                            <select  name="" class="accbtn111" id="">
                              <option value="2">not get start</option>
                              <option value="1">completed</option>
                              <option value="0">inprocess</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </tr>
                
              </tbody>
               @endforeach
            </table>
          </div>
          <div class="row bg-white py-3 mx-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <span class="head1new ml-3">Media Files</span>
            </div>
          </div>
          <div class="row mt-3 mx-4">
                @foreach($projects->areas as $area)
            <div class="col-lg-3">
              <img src="{{url($area->image)}}" class="areaimg" alt="">
            </div>
            @endforeach
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 my-3 text-right">
              <button class="btn adddetbtn mr-4">Show More</button>
              <button class="btn adddetbtn234 mr-4"  data-toggle="modal" data-target=".modelUpload">Upload</button>
            </div>
          </div>
         
         
          <div class="modal fade modelUpload" id="add-area" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                             <div class="row">
            <div class="col-lg-12" style="padding:20px;background:white;border-radius:15px;">
               <div class="drop-zone">
                    
                <span class="drop-zone__prompt">
                    <img src="https://countrywide.pelicula-entertainment.com/assets/images/draw.PNG">
                              <div style="color:black;font-size:20px;">Drop your file here or <span style="color:#EB3C16;">Browse</span></div>
                              <span style="color:black;">Supports:JPG,PNG,PDF</span>
                </span>
                <input type="file" name="file" class="drop-zone__input" multiple="">
              </div>
            </div>
          </div>
                            </div>
                          </div>
                        </div>
         
@endsection