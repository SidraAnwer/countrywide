@extends('layouts.app3')


@section('content')
      <!-- Content -->
    
          <h1 class="head1new ">Ticket Form</h1>
          <form action="{{route('tickets.form')}}" method="POST">
          {{ csrf_field() }}
              <div class="row">
                <div class="col-lg-12 mt-2">
                  <select name="" id="" class="form-control slec1">
                    <option value="">Select Project</option>
                    @foreach($projects as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row mt-5 mx-2 addfrmouter">
                <div class="col-lg-12 text-center pb-3">
                  <p class="cmplfrmimp">222 Varick Avenue</p>
                  <p class="cmplfrmimp">Brooklyn, NY 11237</p>
                  <p class="cmplfrmimp">(718) 635-4022</p>
                  <a href="">www.countrywidestone.com</a>
                </div>
                <div class="col-lg-12 text-center pt-2" style="border-top:4px solid #9B870C;border-bottom:4px solid #9B870C;">
                  <p class="cmplfrmimp font-weight-bolder">TIME AND MATERIALS EXTRA WORK ORDER FORM</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group mt-1">
                    <label for="">Date:</label><input type="text" class="addfrminp">
                  </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-12">
                  <div class="form-group mt-1">
                    <label for="">Ticket No:</label><input type="text" name="ticket_no" class="addfrminp">
                  </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-12 inpemp"></div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="form-group mt-1">
                    <label for="">Project:</label><input type="text" name="project" class="addfrminp">
                  </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-12">
                  <div class="form-group mt-1">
                    <label for="">Job No:</label><input type="text" name="job_no" class="addfrminp">
                  </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-12 inpemp"></div>
                <div class="col-lg-4  col-md-4 col-sm-12">
                  <div class="form-group mt-1">
                    <label for="">Contractor:</label><input type="text" name="constractor" class="addfrminp">
                  </div>
                </div>
                <div class="col-lg-12 pt-2" style="border-top:4px solid black;border-bottom:4px solid black;">
                  <p class="cmplfrmimp font-weight-bolder">The following work is to be performed and paid in accordance with the contract terms:</p>
                  <div class="form-group mt-1">
                    <label for="" class="font-weight-bolder">Description:</label><input type="text" class="addfrminp">
                  </div>
                </div>
                <div class="col-lg-12 text-center pt-2" style="border-top:4px solid black;border-bottom:1px solid black;background-color: #ADD8E6;margin-top: 100px;">
                  <p class="cmplfrmimp font-weight-bolder">Material</p>
                </div>
                <div class="col-lg-12">
                  <table class="table table-bordered text-center table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Total</th>
                        <th scope="col">Color</th>
                        <th scope="col">Notes/Observations</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <input type="text" name="description" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="quantity" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="unit" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="total" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="" class="addfrminp2">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-12 text-center pt-2" style="border-top:4px solid black;border-bottom:1px solid black;background-color: #ADD8E6;">
                  <p class="cmplfrmimp font-weight-bolder">Labor</p>
                </div>
                <div class="col-lg-12">
                  <table class="table table-bordered text-center table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Description</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Regular Hours</th>
                        <th scope="col">Premium Hours</th>
                        <th scope="col">OverTime Hours</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <input type="text" name="labor_description" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="regularly_hours" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="premium_hours" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="over_time_hours" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="double_time" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" class="addfrminp2">
                        </td>
                        <td>
                          <input type="text" name="color" class="addfrminp2">
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-12" style="margin-bottom: 100px;">
                  <p class="cmplfrmimp">This work is verified for me and material by the CONTRACTOR SUPERINTENDENT,</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <input type="text" name="constractor_sup_name" class="addfrminp" style="width: 85%;"><br><label>CONTRACTOR SUPERINTENDENT NAME</label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <label class="" for="">Signature:</label>
                   <div id="signatureArea" >
                           <div style="height:auto;">
                               <canvas id="signaturePad" width="300" height="100"></canvas>
                           </div>
                        </div>  


                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <input type="text" class="addfrminp" style="width: 85%;"><br><label>Date</label>
                </div>
              </div>
              <div class="col-lg-9 py-4 text-right">
                <button class="newaddfrmbtn mr-2">Upload Media</button>
                <button class="newaddfrmbtn2 mr-2" type="submit">Save</button>
              </div>
          </form>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
   $('#signatureArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
});
</script>
@endpush
