@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
    <h4>
        Course information
    </h4>
    </div >
    <div class="card-body">
        <div class="text">
            <a href="{{ url('/course/create') }}" class="btn btn-success btn-sm" title="Add new student">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Add new
            </a>
        </div>
        <br>
        <div class="table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Course name</th>
                        <th scope="col">Courseunit</th>
                        <th scope="col">Duration</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->courseunit }}</td>
                        <td>{{ $course->duration }}</td>
                        
                        <td>
                            <div style="display: flex; gap: 10px;">
                                <a href="{{ url('/course/' . $course->id) }}" title="View student">
                                    <button class="btn btn-info">View</button>
                                </a>
                                <a href="{{ url('/course/' . $course->id. '/edit') }}" title="View student">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                                <form action="{{ url('/course/' . $course->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete student" onclick="return confirm('Are you sure you want to delete this student?')">
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
</div>
@endsection
