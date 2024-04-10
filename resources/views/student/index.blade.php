@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
    <h4>
        Student information
    </h4>
    </div >
    <div class="card-body">
        <div class="text">
            <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add new student">
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
                        <th scope="col">First name</th>
                        <th scope="col">Reg. Number</th>
                        <th scope="col">Password</th>
                        <th scope="col">Course</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->reg_number }}</td>
                        <td>{{ $student->password }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <div style="display: flex; gap: 10px;">
                                <a href="{{ url('/student/' . $student->id) }}" title="View student">
                                    <button class="btn btn-info">View</button>
                                </a>
                                <form action="{{ url('/student/' . $student->id) }}" method="post">
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
