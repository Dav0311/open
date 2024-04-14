<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class StudentController extends Controller
{
    

    public function index(): View
    {
        $students = User::all();
        return view('student.index')->with('students', $students);
    }

    public function create(): View
    {
        return view('student.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        User::create($input);
        return redirect('student')->with('flash_message', 'Student added successfully');
    }

    public function show($id)
    {
        $student = User::find($id);
        return view('student.show', compact('student'));
    }

    public function show_email($id)
    {
        $student = User::find($id);
        return view('student.email', compact('student'));
    }

    

    public function edit(string $id): View
    {
        $student = User::find($id);
        return view('student.edit')->with('student', $student);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $student = User::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student information has been updated');
    }

    public function destroy(string $id): RedirectResponse
    {
        User::destroy($id);
        return redirect('student')->with('flash_message', 'Student information has been deleted');
    }

 
}
