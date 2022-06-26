@extends('students.layout') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    ERROR! Unsuccessful logged In
                </div>
            </div>
        </div>
    </div>
</div>

<a href="{{ url('/student/go') }}" class="btn btn-primary" title="Back">Back</a>
@endsection