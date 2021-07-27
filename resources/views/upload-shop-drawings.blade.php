@extends('layouts.app5')

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
 <form method="POST" action="{{url('upload-shop-drawing')}}" enctype="multipart/form-data">
     @csrf
   <div class="row pt-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h1 class="head1new ml-3 pb-4">Upload Shop Drawings</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12"style="padding:20px;background:white;border-radius:15px;">
               <div class="drop-zone">
                    
                <span class="drop-zone__prompt">
                    <img src="{{asset('assets/images/draw.PNG')}}">
                              <div style="color:black;font-size:20px;">Drop your file here or <span style="color:#EB3C16;">Browse</span></div>
                              <span style="color:black;">Supports:JPG,PNG,PDF</span>
                </span>
                <input type="file" name="file" class="drop-zone__input" multiple >
              </div>
            </div>
          </div>
          
          <div class="row mt-5">
            <div class="col-lg-3 ">
              <select name="project" id="" class="form-control">
                 @foreach($projects as $project)
                 <option value="{{$project->id}}">{{$project->name}}</option>
                 @endforeach
              </select>
            </div>
            <div class="col-lg-3">
                <button type="submit" class="btn btn-block addmaterialbtnnews">updated Sketches</button>
            </div> 
          </div>
    </form>
         
@endsection

@push('scripts')

 <script type="text/javascript">
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