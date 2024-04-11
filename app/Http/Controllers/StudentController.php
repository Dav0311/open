<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class StudentController extends Controller
{
    //get all student data
    public function index():view 
    {
        $students = Student :: all();
        return view ('student.index')->with('students', $students);
    }

    //create student 
    public function create(): view 
    {
        return view ('student.create');
    }

    //store the student information
    public function store (Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message','student added successfully');
    }

    //show student info by id
   
    public function show(string $id): view 
    {
        try {
            $student = Student::findOrFail($id);
            return view('student.show')->with('student', $student);
        } catch (ModelNotFoundException $e) {
           
            return abort(404);
        }
    }

    // Edit student form
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit')->with('student', $student);
    }

    // Update student info
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student information has been updated');
    }

    //delete student 
    public function destroy(string $id):RedirectResponse
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'student information has been deleted');
    }

}
