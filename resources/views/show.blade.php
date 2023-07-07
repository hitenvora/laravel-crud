@extends('layout')
@section('title_name')
::show page
@endsection
@section('content')

<!-- add card modal here -->

<center>
<form method="post">
@csrf
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Card Name</label>
<input type="text" class="form-control w-25"  name="fnm" value="{{ $editdata->name }}" id="exampleFormControlInput1" placeholder="Card Name *" >
</div>

<div class="mb-3">
<label for="exampleFormControlInput1"  class="form-label">StudentId</label>
<input type="text" class="form-control w-25" name="stid" id="exampleFormControlInput1" value="{{ $editdata->student_id}}" placeholder="Student Id *" >
</div>

<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Phone</label>
<input type="text" class="form-control w-25"  name="phone" value="{{ $editdata->phone}}" id="exampleFormControlInput1" placeholder="Phone*" >
</div>

<div class="mb-3">
<label for="exampleFormControlInput1"  class="form-label">StaffId</label>
<input type="text" class="form-control w-25" name="stfid" id="exampleFormControlInput1" value="{{ $editdata->staff_id}}" placeholder="StaffId *" >
</div>
<button type="submit" name="sub" class="btn btn-primary">submit</button>

</div>


</center>

@endsection
