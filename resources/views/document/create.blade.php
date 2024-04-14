@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Create new Course material</h4>
       
    </div>
    <div class="card-body">
        <form action="{{ url('documents/upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="file_name" class="form-label">Document name:</label>
                <input type="text" class="form-control" id="file_name" name="file_name" aria-describedby="file_name">
            </div>
            <div class="mb-3">
                <label for="course" class="form-label">Course name:</label>
                <input type="text" class="form-control" id="course" name="course">
            </div>
            <div class="mb-3">
                <label for="course_unit" class="form-label">Course Unit</label>
                <input type="text" class="form-control" id="course_unit" name="course_unit">
            </div>
            <div class="mb-3">
                <label for="file_path" class="form-label">Document</label>
                <input type="file" class="form-control" id="file_path" name="file_path">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>  
    </div>
</div>

@stop
