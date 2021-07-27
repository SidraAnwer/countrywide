@extends('layouts.app2')
<style type="text/css">
    .drop-zone {
background: white !important;
  width:100% !important;
  height:320px !important;  
  padding: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: "Quicksand", sans-serif;
  font-weight: 500;
  font-size: 20px;
  cursor: pointer;
  color: #cccccc;
  border: 5px dashed black;
  border-radius: 10px;
}

.drop-zone--over {
  border-style: solid;
}

.drop-zone__input {
  display: none;
}

.drop-zone__thumb {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
  background-color: #cccccc;
  background-size: cover;
  position: relative;
}

.drop-zone__thumb::after {
  content: attr(data-label);
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 5px 0;
  color: #ffffff;
  background: rgba(0, 0, 0, 0.75);
  font-size: 14px;
  text-align: center;
}
    </style>

@section('content')
      <!-- Content -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h1 class="head1new ml-3">Add Project</h1>
            </div>
          </div>
          <form method="POST" action="{{url('store-project')}}" enctype="multipart/form-data">
            @csrf
              <div class="row mt-4">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                  <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">
                      <p class="addprjtitlfrm">Project Name</p>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                      <input type="text"  name="project_name" class="addprjformin">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">
                      <p class="addprjtitlfrm">Address</p>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                      <input type="text"  name="address" class="addprjformin">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">
                      <p class="addprjtitlfrm">Contractor</p>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                      <input type="text" name="contractor" class="addprjformin">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 pt-3">
                      <p class="addprjtitlfrm">Owner</p>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                      <input type="text" name="owner" class="addprjformin">
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-cenetr mt-3">
                  <img src="{{asset('assets/images/addprjlogo.PNG')}}" alt="">
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-6 tableresp" >
                <table class="table mt-5" >
                  <thead>
                    <tr style="background-color: white;border:1px solid white;border-radius: 8px;border-bottom: 15px solid #F8F9FF;">
                      <th width="15%" class="tablehead txet-center pl-5" scope="col">Unit#</th>
                      <th width="17%" class="tablehead txet-center"  scope="col">Area</th>
                      <th width="18%" class="tablehead txet-center"  scope="col">Status</th>
                      <th width="18%" class="tablehead txet-center ">Media</th>
                      <th width="13%" class="tablehead txet-center">View Media</th>
                      <th width="19%" class="tablehead txet-center" scope="col">Test Report</th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-6 tableresp" style="margin-top:-10px;">
                <table class="table">
                  <tbody >
                    <tr class="pltabtr">

                    </tr>
                    <tr class="pltabtr ">

                  </div>
                </tr>
                    
                  </tbody>
                </table>
              </div>
              
                
               <!-- Add Appartment Model -->
                        <div class="modal fade add-appartment" tabindex="-1" id="add-appartment" role="dialog" aria-labelledby="myModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Add Apartment</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                     <label data-error="wrong" data-success="right" for="orangeForm-name">Name</label>
                                  <input type="text" id="appart_name" name="appart_name" class="form-control validate">
                                </div>
                              </div>
                              <div class="modal-footer d-flex justify-content-center">
                                <button type="button"  class="btn btn-primary" id="appartBtn">Add</button>
                              </div>
                            </div>
                          </div>
                        </div>

             <!--End Add Area Model -->
               <!-- Add Area Model -->
                <div class="modal fade add-area" id="add-area" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Add Area</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                     <label data-error="wrong" data-success="right" for="orangeForm-name">Name</label>
                                  <input type="text" id="area_name" name="area_name" class="form-control validate">
                                </div>
                              </div>
                              <div class="modal-footer d-flex justify-content-center">
                                <button type="button"  class="btn btn-primary" id="areaBtn">Add</button>
                              </div>
                            </div>
                          </div>
                        </div>
             <!--End Add Area Model -->

              <div class="row mx-1">
                        <div class="col-lg-12"  style="background-color: white;padding: 15px;">
                          <div class="row">
                            
                        <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                          <span class="head1new ml-3">Add Story</span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right">
                          <p class="addprjtitlfrm pt-2">Repeat Data:</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-10 col-10">
                          <select name="" class="accbtn111" id="">
                            <option value="">Story</option>
                          </select>
                        </div>
                       <div class="col-lg-2 col-md-2 col-sm-12 col-12 ">
                          <button type="button"  data-toggle="modal" data-target=".add-story" style="background:transparent;border:none"><i class="fa fa-plus pt-2"  style="font-size: 30px;color:#000;"></i></button>
                        </div>
                          </div>
                        </div>
                         <!-- Add Story Model -->
                <div class="modal fade add-story" id="add-area" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Add Story</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                     <label data-error="wrong" data-success="right" for="orangeForm-name">Name</label>
                                  <input type="text" id="story_name" name="story_name" class="form-control validate">
                                </div>
                              </div>
                              <div class="modal-footer d-flex justify-content-center">
                                <button type="button"  class="btn btn-primary" id="storBtn">Add</button>
                              </div>
                            </div>
                          </div>
                        </div>
             <!--End Add Story Model -->
              </div>
              <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 my-3 text-right">
                  <button type="submit" class="btn adddetbtn">Save</button>
                </div>
              </div>
              
              <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document" >
                <div class="modal-content" style="border-radius:20px !important;width:90%;margin:auto;" >
                 
                  <div class="modal-body" style="border-radius:15px !important;">
            
                        <div style="padding:20px;background:white;border-radius:15px;">
                          <div class="drop-zone">
                                
                <span class="drop-zone__prompt">
                    <img src="{{asset('assets/images/draw.PNG')}}">
                              <div style="color:black;font-size:20px;">Drop your file here or</div>
                              <span style="color:black;">Supports:JPG,PNG,PDF</span>
                </span>
                <input type="file" name="myFile" class="drop-zone__input">
              </div>
            </div>
            <div class="text-right">
        <button type="button"  class="newaddfrmbtn mr-2" data-dismiss="modal">cancel</button>
        <button type="button"  class="newaddfrmbtn2 mr-2">Save</button>
      </div>
      </div>
      
    </div>
  </div>
</div>
<!-- Moda2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content" style="border-radius:20px !important;width:90%;margin:auto;" >
     
      <div class="modal-body" style="border-radius:15px !important;">

            <div style="padding:20px;background:white;border-radius:15px;">
              <div class="drop-zone">
                    
                    <span class="drop-zone__prompt">
                        <img src="{{asset('assets/images/draw.PNG')}}">
                                  <div style="color:black;font-size:20px;">Drop your file here or</div>
                                  <span style="color:black;">Supports:JPG,PNG,PDF</span>
                    </span>
                    <input type="file" name="photo" class="drop-zone__input">
                  </div>
            </div>
      <!--      <div class="text-right">-->
      <!--  <button type="button"  class="newaddfrmbtn mr-2" data-dismiss="modal">cancel</button>-->
      <!--  <button type="button"  class="newaddfrmbtn2 mr-2">Save</button>-->
      <!--</div>-->
      </div>
      
    </div>
  </div>
</div>
<!-- Moda3 -->
<div class="modal fade" id="exampleModalvc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content" style="border-radius:20px !important;width:90%;margin:auto;" >
     
      <div class="modal-body" style="border-radius:15px !important;">
<div class="text-right">
        <button type="button"  class="btn mr-2" data-dismiss="modal" style="background:transparent;border:none;">x</button>
      </div>
            <div style="padding:20px;background:white;border-radius:15px;">
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                      <img src="{{asset('assets/images/images.jpg')}}" class="areaimg">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                      <img src="{{asset('assets/images/images.jpg')}}" class="areaimg">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                      <img src="{{asset('assets/images/images.jpg')}}" class="areaimg">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                      <img src="{{asset('assets/images/images.jpg')}}" class="areaimg">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                      <img src="{{asset('assets/images/images.jpg')}}" class="areaimg">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                      <img src="{{asset('assets/images/images.jpg')}}" class="areaimg">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                      <img src="{{asset('assets/images/images.jpg')}}" class="areaimg">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                      <img src="{{asset('assets/images/images.jpg')}}" class="areaimg">
                  </div>
                  
              </div>
            </div>
            
      </div>
      
    </div>
  </div>
</div>
        </form>
@endsection

@push('scripts')
  <script>
  $("#appartBtn").click(function(){
       event.preventDefault();
         var appartmentName = $("#appart_name").val();
         console.log(appartmentName);
         $('#add-appartment').modal('hide');
         var markup ='<tr><td><div class="card"><div class="card-header bg-white" id="headingOne"><div class="mb-0"><div class="row"><div class="col-lg-2 col-md-4 col-sm-5 col-5"><p class="accoptq pt-2 ml-5">A1</p></div><div class="col-lg-5 col-md-8 col-sm-7 col-7" style="margin-left:-20px;"><p class="accoptq pt-2">'+appartmentName+'</p></div><div class="col-lg-2 col-md-4 col-sm-4 col-4"></div><div class="col-lg-2 col-md-4 col-sm-6 col-6" style="margin-left:-60px;"><button type="button" class="btn accbtn23">Add Area</button></div><div class="col-lg-1 col-md-4 col-sm-4 col-4" style="margin-left:-30px;"><button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-caret-down" style="font-size: 18px;color:#000;"></i></button></div></div></div></div><div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="background-color: #F7F7F7;"><div class="card-body"><div class="row"><div class="col-lg-2 col-md-4 col-sm-6 col-6"></div><div class="col-lg-2 col-lg-2 col-md-4 col-sm-6 col-6"></div><div class="col-lg-2 col-lg-2 col-md-4 col-sm-6 col-6"><select style="width: 150px;height: 30px;margin-top:8px;font-size:12px;" name="" class="mr-4" id=""><option value="">completed</option></select></div><div class="col-lg-2 col-lg-2 col-md-4 col-sm-6 col-6"><button type="button" class="btn accbtn23 mr-4" data-toggle="modal" data-target="#exampleModal2">Upload Media</button></div><div class="col-lg-2 col-lg-2 col-md-4 col-sm-6 col-6"><button type="button" class="btn accbtn23" data-toggle="modal" data-target="#exampleModalvc">View Media</button></div><div class="col-lg-2 col-lg-2 col-md-4 col-sm-6 col-6"><a href="https://countrywide.pelicula-entertainment.com/leaktest"><button class="btn accbtn23a">Test Report</button></a></div></div></div></div></div></td></tr'; 
         $("table tbody").append(markup);
     
  });
  $(".add-area").click(function(){
       event.preventDefault();
      $('#add-area').modal('hide');
  });
  $(".adddetbtn").click(function(){
      $("#project").submit(function(){

       });
  });
  $("#storBtn").click(function(){
       event.preventDefault();
      var storyName = $("#story_name").val();
      $('.add-story').modal('hide');
      console.log(storyName);
      tableBody   = $("table tbody");
      var content = '<tr><td><div class="col-lg-12 col-md-12 col-sm-6 tableresp" style="margin-top:-10px;"><div class="row mx-1"><div class="col-lg-12 col-md-12 col-sm-12" style="background-color: white;padding: 20px;"><div class="row"><div class="col-lg-10 col-md-10 col-sm-10 col-10"><span class="head1new ml-3">'+storyName+'</span></div><div class="col-lg-2 col-md-2 col-sm-2 col-2 "> <i class="fa fa-caret-down pt-2" style="font-size: 25px;color:#000;"></i></div></div></div></div><div class="row mt-3 ml-5"><div class="col-lg-12"><button type="button"  class="btn accbtn23 " data-toggle="modal" data-target=".add-appartment">+ Add Apartment</button><button type="button" class="btn accbtn23" data-toggle="modal" data-target=".add-area" >+ Add Area</button></div ></div></td></tr>';
      tableBody.prepend(content);
  });
  </script>
  <script >
      document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}
  </script>
@endpush

