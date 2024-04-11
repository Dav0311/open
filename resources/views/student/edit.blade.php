@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit Student information</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('student/'.$student->id) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="mb-3">
               
                <input type="hidden" class="form-control" id="id" value="{{$student->id }}" name="id" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">First name:</label>
                <input type="text" class="form-control" id="firstname" value="{{$student->firstname }}" name="firstname" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">last name:</label>
                <input type="text" class="form-control" value="{{$student->lastname }}" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label for="reg_number" class="form-label">Registration Number</label>
                <input type="text" class="form-control" id="reg_number" value="{{$student->reg_number }}" name="reg_number">
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <input type="text" class="form-control" id="course" value="{{$student->course }}" name="course">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" value="{{$student->password }}" name="password">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="password" value="{{$student->email}}" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>  
    </div>
</div>

@stop
