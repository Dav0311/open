@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Course Details</h4>
    </div>
    <div class="card-body">
        <div class="text">
            <a href="{{ url('/course') }}" class="btn btn-success btn-sm" title="Back">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
        <br>
        <div class="table">
            <table class="table">
                <tbody>
                    @if ($course)
                        <tr>
                            <td>ID</td>
                            <td>{{ $course->id }}</td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td>{{ $course->name }}</td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td>{{ $course->courseunit }}</td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td>{{ $course->duration}}</td>
                        </tr>
                        
                        
                    @else
                        <tr>
                            <td colspan="2">Student not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
