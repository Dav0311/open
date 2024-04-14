@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Create new course</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('course') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course name:</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                <div id="name" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="courseunit" class="form-label">Courseunit:</label>
                <input type="text" class="form-control" id="courseunit" name="courseunit">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Course duration</label>
                <input type="text" class="form-control" id="duration" name="duration">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>  
        <br>
       
    </div>
</div>

@stop
