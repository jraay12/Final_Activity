@extends('students.layout')
@section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-header">
            <h2>Laravel 9 Crud</h2>
        </div>
                <div class="card-body">
                    <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
                    <a href="{{ url('/student/go') }}" class="btn btn-success btn-sm" title="Add New Student"><i class="fa fa-plus" aria-hidden="true"></i>login</a>
<br/>
<br/>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-dark">
            <thead>
                        <tr>
                            <th scope="col">Employee ID</th>
                            <th scope="col">Email</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Middle Initial</th>
                            <th scope="col">Course</th>
                            <th scope="col">Year Level</th>
                            <th scope="col">User Level</th>
                            <th scope="col">Action</th>
                        </tr>
            </thead>
        <tbody>
                        @foreach($students as $item)
                        <tr>
                        <td>{{ $item->studID }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->firstName }}</td>
                        <td>{{ $item->lastName }}</td>
                        <td>{{ $item->MI }}</td>
                        <td>{{ $item->course }}</td>
                        <td>{{ $item->yearLevel }}</td>
                        <td>{{ $item->userLevel }}</td>
                        <td>
<a href="{{ url('/student/' . 
$item->studID . '/edit') }}" title="Edit Student"><button class="btn btn-primary 
btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
Edit</button></a>
<form method="POST" action="{{ 
url('/student' . '/' . $item->studID) }}" accept-charset="UTF-8" 
style="display:inline">
{{ method_field('DELETE') }}
{{ csrf_field() }}
<button type="submit" 
class="btn btn-danger btn-sm" title="Delete Student" onclick="return
confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" arial hidden="true"></i> Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection