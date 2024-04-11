<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use Illuminate\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courses = Course :: all();
        return view ('course.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view 
    {
        return view ('course.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request): RedirectResponse
    {
        $input = $request->all();
        Course::create($input);
        return redirect('course')->with('flash_message','course added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view 
    {
        try {
            $courses = Course::findOrFail($id);
            return view('course.show')->with('course', $courses);
        } catch (ModelNotFoundException $e) {
           
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::find($id);
        return view('course.edit')->with('course', $courses);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('course')->with('flash_message', 'course information has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Course::destroy($id);
        return redirect('course')->with('flash_message', 'course information has been deleted');
    }
}
