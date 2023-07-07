@extends('layout')
@section('title_name')
::Home Page
@endsection
@section('content')
<div class="container mt-5 p-5">
<!-- <div class="row">
    <div class="col-md-4">
        <img src="https://i.gifer.com/OyH3.gif" class="img-fluid">
    </div> -->
    <div class="col-md-12">
        <h3 class="text-primary">Add SBI Cards Here</h3>
        <hr class="border border-1 border-primary w-75">

        <button type="button" class="btn btn-sm btn-primary"><span class="bi bi-backspace fs-5"></span>&nbsp;Back</button>

        <button type="button" data-bs-toggle="modal" data-bs-target="#addcrd" class="btn btn-sm btn-primary ms-4"><span class="bi bi-plus fs-5"></span>&nbsp;Activate New Card</button>

        <button type="button" class="btn btn-sm btn-success float-end"><span class="bi bi-printer fs-5"></span>&nbsp;Print Pdf</button>

        <div class="mt-5">
        <table id="examples" class="table table-responsive table-bordered table-hover mt-5 p-3">
            <thead>   
            <tr>
                <th>#srno</th>
                <th>name</th>
                <th>studentId</th>
                <th>Phone</th>
                <th>staffid</th>
                <th>view</th>
                <th>Edit</th>
                <th>delete</th>
               
            </tr>
            </thead>
            <tbody>
@foreach ($data as $row)
            <tr>
                <td>{{$row["id"]}}</td>
                <td>{{$row["name"]}}</td>
                <td>{{$row["student_id"]}}</td>
                <td>{{$row["phone"]}}</td>
                <td>{{$row["staff_id"]}}</td>
                <td><a href='{{url("/show/".$row->id)}}' class="btn btn-sm btn-warning"><span class="bi bi-book"></span></a></td>
                <td><a href='{{url("/show/".$row->id)}}' class="btn btn-sm btn-primary"><span class="bi bi-pencil"></span></a></td>
                <td><a href="{{$row->id}}" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a></td>
            </tr>
@endforeach
       
            </tbody>
        </table>


        
        <button type="button"  class="btn btn-sm btn-danger ms-0"><span class="bi bi-plus fs-5"></span>&nbsp;Export in Excel</button>
    </div>

    </div>
</div>

</div> 


<!-- add card modal here -->
<div class="modal" tabindex="-1" id="addcrd">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Card </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<div class="modal-body p-5">

<form method="post">
@csrf
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Card Name</label>
<input type="text" class="form-control"  name="fnm" id="exampleFormControlInput1" placeholder="Card Name *">
</div>

<div class="mb-3">
<label for="exampleFormControlInput1"  class="form-label">StudentId</label>
<input type="text" class="form-control" name="stid" id="exampleFormControlInput1" placeholder="Student Id *">
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Phone</label>
<input type="text" class="form-control"  name="phone" id="exampleFormControlInput1" placeholder="Phone*">
</div>

<div class="mb-3">
<label for="exampleFormControlInput1"  class="form-label">StaffId</label>
<input type="text" class="form-control" name="stfid" id="exampleFormControlInput1" placeholder="StaffId *">
</div>
</div>

<div class="modal-footer">
        <button type="submit" name="sub" class="btn btn-primary">submit</button>
      </div>
    </div>
  </div>
</div>







@endsection