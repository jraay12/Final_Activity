@extends('students.layout')
@section('content')
 
<div class="card ">
  <div class="card-header">Edit page</div>
  <div class="card-body table-bordered table-striped table-dark">
      
      <form action="{{ url('student/' .$students->studID) }}" method="post" >
        {!! csrf_field() !!}
        @method("PATCH")
        <label>First Name</label></br>
        <input type="text" name="firstName" id="firstName" value="{{$students->firstName}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastName" id="lastName" value="{{$students->lastName}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" value="{{$students->course}}" class="form-control"></br>
        <label>Year Level</label></br>
        <input type="text" name="yearLevel" id="yearLevel" value="{{$students->yearLevel}}" class="form-control"></br>
        <label>User Level</label></br>
        <input type="text" name="userLevel" id="userLevel" value="{{$students->userLevel}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
        <a href="{{ url('/student') }}" class="btn btn-success btn-sm" title="Back"><i class="fa fa-plus" aria-hidden="true"></i> Back</a>

    </form>
   
  </div>
</div>
 
@stop