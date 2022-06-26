@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body table-bordered table-striped table-dark">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Student ID</label></br>
        <input type="text" name="studID" id="studID" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>firstName</label></br>
        <input type="text" name="firstName" id="firstName" class="form-control"></br>
        <label>lastName</label></br>
        <input type="text" name="lastName" id="lastName" class="form-control"></br>
        <label>Middle Initial</label></br>
        <input type="text" name="MI" id="MI" class="form-control"></br>
        <label>course</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
        <label>Year Level</label></br>
        <input type="text" name="yearLevel" id="yearLevel" class="form-control"></br>
        <label>User Level</label></br>
        <input type="text" name="userLevel" id="userLevel" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop