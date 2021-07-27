@extends('layouts.app2')


@section('content')

          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <h1 class="head1new ml-3">Project Details</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
              <button class="btn adduserbtn">Edit Details</button>
            </div>
            <div class="col-lg-12 mb-3 mt-5">
              <div class="cardnewdet">
                <h1 class="head1new ml-3">Leak Test </h1>
                  <div class="mt-5 addfrmouter2">
            <div class="row mb-4">
              <div class="col-lg-12">
                <div class="row mx-1" style="background-color: #F2F2F2;height: 120px;">
                  <div class="col-lg-3">
                    <img src="assets/arealogo.PNG" alt="">
                  </div>
                  <div class="col-lg-9">
                    <p class="cmplfrmimp">222 Varick Avenue</p>
                    <p class="cmplfrmimp">Brooklyn, NY 11237</p>
                    <p class="cmplfrmimp">(718) 635-4022</p>
                    <a href="">www.countrywidestone.com</a>
                  </div>
                  <hr style="background-color: red;width: 100%;">
                  <hr style="background-color: red;width: 100%;margin-top: -20px;">
                </div>
              </div>
            </div>
            <div class="row mx-1 mt-5">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="text-center font-weight-bolder">TEST SIGN-OFF FORM</p>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group mt-1">
                  <label for="">Date:</label><input type="text" class="addfrminpnew">
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group mt-1">
                  <input type="text" class="addfrminpnew">
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                <div class="form-group mt-1">
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                      <label for="" class="font-weight-bolder">Text Description</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                      <textarea style="width: 100%;height: 200px;background-color: transparent;"></textarea>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group mt-1">
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                      <label for="" class="font-weight-bolder">Test Results</label>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                      <input type="checkbox" name="" id="">&nbsp<span class="font-weight-bolder">Approved</span>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-12 text-center">
                      <input type="checkbox" name="" id="">&nbsp<span class="font-weight-bolder">Rejected</span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                      <input type="checkbox" name="" id="">&nbsp<span class="font-weight-bolder">Other:</span><input class="addfrminpnew" type="text">
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group mt-1">
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                      <label for="" class="font-weight-bolder">Noted Requirements for Future Work</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                      <textarea style="width: 100%;height: 200px;background-color: transparent;"></textarea>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group mt-1">
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                      <label for="" class="font-weight-bolder">Test Performed by:</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-6 tableresp">
                      <table class="table table-bordered text-center">
                        <thead>
                          <tr style="background-color: grey;">
                            <th scope="col">Name</th>
                            <th scope="col">Signature</th>
                            <th scope="col">Da</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="form-group mt-1">
                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                      <label for="" class="font-weight-bolder">Test Approved by:</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-6 tableresp">
                      <table class="table table-bordered text-center">
                        <thead>
                          <tr style="background-color: grey">
                            <th scope="col">Name</th>
                            <th scope="col">Signature</th>
                            <th scope="col">Da</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                            <td>
                              <input type="text" class="addfrminpnew2">
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 50px;">
                  <p class="cmplfrmimp">I hereby acknowledge that Countrywide Stone and Marble performed the test here described according to
                  the manufacturer' recommenda</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                  <input type="text" class="addfrminpnew" style="width: 85%;"><br><label>CONTRACTOR SUPERINTENDENT NAME</label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                  <input type="text" class="addfrminpnew" style="width: 85%;"><br><label>CONTRACTOR SUPERINTENDENT Sign</label>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                  <input type="text" class="addfrminpnew" style="width: 85%;"><br><label>Date</label>
                </div>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 my-3 text-right">
                            <button class="btn adddetbtn234 mr-4">Cancel</button>
              <button class="btn adddetbtn mr-4">Save</button>

            </div>
          </div>
              </div> 
            </div>
          </div>
  @endsection