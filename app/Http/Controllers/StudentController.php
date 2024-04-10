<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use Illuminate\View\View;

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

    //update student info


    //delete student 

}
