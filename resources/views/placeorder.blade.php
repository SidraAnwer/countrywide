@extends('layouts.app4')


@section('content')
<!-- Content -->
    
<h1 class="head1new ">Place Order</h1>
<div class="row">
  <div class="col-lg-12 mt-2">
    <select name="" id="" class="form-control slec1">
      <option value="">Select Project</option>
        @foreach($projects as $project)
        <option value="{{$project->id}}">{{$project->name}}</option>
        @endforeach
    </select>
  </div>
  <div class="col-lg-12">
<table id="myTable" class="table bg-white mt-5 ">
  <thead>
    <tr>
      <th class="tablehead text-left"  scope="col">#</th>
      <th class="tablehead text-left"  scope="col">Name</th>
      <th class="tablehead text-left"  scope="col">Color</th>
      <th class="tablehead text-left"  scope="col">Size</th>
      <th class="tablehead text-left"  scope="col">Quantity</th>
      <th class="tablehead text-left"  scope="col">Units</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="tabledata text-left">1</th>
      <td class="tabledata text-left">
        <select class="newseleplaceor" name="name" id="name">
          <option value="">Select Mateial</option>
        @foreach($materials as $material)
          <option value="{{$material->description}}">{{$material->description}}</option>
         @endforeach
        </select>
      </td>
<td class="tabledata text-left">
        <select class="newseleplaceor" name="" id="color">
          <option value="">Select Color</option>
        @foreach($materials as $material)
          <option value="{{$material->color}}">{{$material->color}}</option>
          @endforeach
        </select>
      </td>
<td class="tabledata text-left">
        <select class="newseleplaceor" name="" id="size">
        <option value="">Select Size</option>
        @foreach($materials as $material)
          <option value="{{$material->size}}">{{$material->size}}</option>
          @endforeach
        </select>
      </td>
<td class="tabledata text-left">
        <select class="newseleplaceor" name="" id="quantity">
        <option value="">Add Quantity</option>
        @foreach($materials as $material)
          <option value="{{$material->quantity}}">{{$material->quantity}}</option>
          @endforeach
        </select>
      </td>
<td class="tabledata text-left">
        <select class="newseleplaceor" name="" id="unit">
        <option value="">Add Unit</option>
        @foreach($materials as $material)
          <option value="{{$material->unit}}">{{$material->unit}}</option>
          @endforeach
        </select>
      </td>

    </tr>

  </tbody>
</table>
<button  class="addrowbtn">+ Add Material</button>
</div>
  <div class="col-lg-12 mt-3">
    <select name="" id="" class="form-control slec1">
      <option value="">Select Email</option>
                    @foreach($users as $user)
                    <option value="{{$project->id}}">{{$user->email}}</option>
                    @endforeach
    </select>
  </div>
  <div class="col-lg-5 mt-4">
    <button class="btn addmaterialbtn1">Place Order</button>
  </div>
</div>

  @endsection

@push('scripts')
<script>
  $(document).ready(function () {
            let lineNo = 2;
            $(".addrowbtn").click(function () {
              var name = $('#name').find('option:selected').val();
              var color = $('#color').find('option:selected').val();
              var size = $('#size').find('option:selected').val();
              var quantity = $('#quantity').find('option:selected').val();
              var unit = $('#unit').find('option:selected').val();
                markup = "<tr><td>"+ lineNo + "</td><td><select class='newseleplaceor'><option>"+ name + "</option></select></td><td><select class='newseleplaceor'><option>"+ color + "</option></select></td><td><select class='newseleplaceor'><option>"+ size + "</option></select></td><td><select class='newseleplaceor'><option>"+ quantity + "</option></select></td><td><select class='newseleplaceor'><option>"+ unit + "<option></select></td></tr>";
                tableBody = $("table tbody");
                tableBody.append(markup);
                lineNo++;
               
            });
        }); 
</script>

@endpush