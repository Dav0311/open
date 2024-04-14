@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Documents List</h4>
        <br>
        <div class="text">
            <a href="{{ url('/document/create') }}" class="btn btn-success btn-sm" title="Add new student">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Add new
            </a>
        </div>
        <br>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>File Name</th>
                    <th>File Path</th>
                    <th>Course</th>
                    <th>Course_unit</th>
                    <th>Created At</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($documents as $document)
                <tr>
                    <td>{{ $document->id }}</td>
                    <td>{{ $document->file_name }}</td>
                    <td>{{ $document->file_path }}</td>
                    <td>{{ $document->course }}</td>
                    <td>{{ $document->course_unit }}</td>
                    <td>{{ $document->created_at }}</td>
                    <td>
                            <div style="display: flex; gap: 10px;">
                                <a href="{{ url('/document/' . $document->id) }}" title="View document">
                                    <button class="btn btn-info">View</button>
                                </a>
                                <a href="{{ url('/document/' . $document->id. '/edit') }}" title="View document">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                                <form action="{{ url('/document/' . $document->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete document" onclick="return confirm('Are you sure you want to delete this document?')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> DELETE
                                    </button>
                                </form>
                            </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
