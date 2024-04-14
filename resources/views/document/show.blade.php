@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Document Details</h4>
    </div>
    <div class="card-body">
        <div class="text">
            <a href="{{ url('/document') }}" class="btn btn-success btn-sm" title="Back">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
            </a>
        </div>
        <br>
        <div class="table">
            <table class="table">
                <tbody>
                    @if ($document)
                        <tr>
                            <td>ID</td>
                            <td>{{ $document->id }}</td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td>{{ $document->file_name }}</td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td>{{ $document->file_path }}</td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td>{{ $document->course}}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>{{ $document->course_unit }}</td>
                        </tr>
                        
                    @else
                        <tr>
                            <td colspan="2">Document not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
