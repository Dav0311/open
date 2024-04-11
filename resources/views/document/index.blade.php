@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Document List</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>File Name</th>
                    <th>File Path</th>
                    <th>Course</th>
                    <th>Created At</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($documents as $document)
                <tr>
                    <td>{{ $document->id }}</td>
                    <td>{{ $document->file_name }}</td>
                    <td>{{ $document->file_path }}</td>
                    <td>{{ $document->course }}</td>
                    <td>{{ $document->created_at }}</td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
