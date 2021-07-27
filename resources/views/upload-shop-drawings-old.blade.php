@extends('layouts.app')

<style type="text/css">
      .zone {  
          padding-top:45px;
border-radius:15px;
  background: white !important;
  width:100% !important;
  height:320px !important;  
  border:5px dashed black;
  text-align:center;
  color: white;
  z-index: 20;
  margin-top: 30px;
  transition: all 0.3s ease-out;
  box-shadow: 0 0 0 1px rgba(255,255,255,.05),inset 0 0 .25em 0 rgba(0,0,0,.25);
  
}
  .btnCompression {
    }
    .active {
      background: #EB6A5A;
      color:white;
    }
  
  .btnCompression i {
    text-align: center;
    font-size: 10em;  
    color:#fff;
    margin-top: 50px;
  }
  .selectFile {
    height: 50px;
    margin: 20px auto;
    position: relative;
    width: 200px;          
  }

  .selectFile label, input {
    cursor: pointer;
    height: 50px;
    
    width: 100%;
    border-radius: 5px;          
  }

  .selectFile label {
    background: black;
    color:white;
    display: inline-block;
    font-size: 1.2em;
    line-height: 50px;
    padding: 0;
    text-align: center;
    white-space: nowrap;
    text-transform: uppercase;
    font-weight: 400;   
    box-shadow: 0 1px 1px gray;
  }

  .selectFile input[type=file] {
    opacity: 0;
  }

.zone.in {
  color:white;
  border-color:white;
  background: radial-gradient(ellipse at center,#EB6A5A 0,#c9402f 100%) !important;
 }
  .zone.in i {          
    color:#fff;
  }
  .zone.in label {
    background: #fff;
    color:#EB6A5A;
  }
.zone.hover {
  color:gray;
  border-color:white;
  background:#fff;
  border:5px dashed gray;}
.zone.hover  i {          
    color:#EB6A5A;
  }
  .zone.hover label {
    background: #fff;
    color:#EB6A5A;
  }
.zone.fade {
  transition: all 0.3s ease-out;
  opacity: 1;
}
    </style>
@section('content')

   <div class="row pt-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h1 class="head1new ml-3 pb-4">Upload Shop Drawings</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12"style="padding:20px;background:white;border-radius:15px;">
              <div class="zone">
                <div id="dropZ">
                  <!--<i class="fa fa-cloud-upload" style="font-size:70px;color:blue;"></i>-->
                  <img src="{{asset('assets/images/draw.PNG')}}">
                  <div style="color:black;font-size:20px;">Drop your file here or <span style="color:#EB3C16;">Browse</span></div>
                  <span style="color:black;">Supports:JPG,PNG,PDF</span>
                  <div class="selectFile">
                    
                    <input type="file" name="files[]" id="file">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row mt-5">
            <div class="col-lg-3 ">
              <select name="" id="" class="form-control">
                <option value="">Select Project</option>
              </select>
            </div>
            <div class="col-lg-3">
                <button class="btn btn-block addmaterialbtnnews">View updated Sketches</button>
            </div> 
          </div>
         
@endsection

@push('scripts')
@parent
 <script type="text/javascript">
    $(document).bind('dragover', function (e) {
    var dropZone = $('.zone'),
    timeout = window.dropZoneTimeout;
    if (!timeout) {
    dropZone.addClass('in');
    } else {
    clearTimeout(timeout);
    }
    var found = false,
    node = e.target;
    do {
    if (node === dropZone[0]) {
    found = true;
    break;
    }
    node = node.parentNode;
    } while (node != null);
    if (found) {
    dropZone.addClass('hover');
    } else {
    dropZone.removeClass('hover');
    }
    window.dropZoneTimeout = setTimeout(function () {
    window.dropZoneTimeout = null;
    dropZone.removeClass('in hover');
    }, 100);
    });
    </script>
    @endpush