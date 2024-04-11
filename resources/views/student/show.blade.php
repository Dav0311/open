@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Student Details</h4>
    </div>
    <div class="card-body">
        <div class="text">
            <a href="{{ url('/student') }}" class="btn btn-success btn-sm" title="Back">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
        <br>
        <div class="table">
            <table class="table">
                <tbody>
                    @if ($student)
                        <tr>
                            <td>ID</td>
                            <td>{{ $student->id }}</td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td>{{ $student->firstname }}</td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td>{{ $student->lastname }}</td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td>{{ $student->reg_number}}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>{{ $student->password }}</td>
                        </tr>
                        <tr>
                            <td>Course</td>
                            <td>{{ $student->course }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $student->email }}</td>
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
