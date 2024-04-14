<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\View\View; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException; 



class DocumentController extends Controller
{
    //fetching documents from database 
    public function index()
    {
        // Retrieve all documents from the database
        $documents = Document::all();

        // Pass the documents to a view and return the view
        return view('document.index', ['documents' => $documents]);
    }
    
    //upload documents
   
    public function upload(Request $request)
    {
        
        // Validate the uploaded files
        $request->validate([
            'file_path.*' => 'required|file|max:10240', 
            'course' => 'required|string', 
        ]);
    
        $file = $request->file('file_path');
        // // Loop through each uploaded file
        // foreach ($request->file('file_path') as $file) {
            $extension = $file->extension();
            // Store each uploaded file in the storage directory
            $fileName = time() . '_' . rand(100,1000).'.'.$extension;
            //$filePath = $file->storeAs('uploads', $fileName); 
            $storage = \Storage::disk('public')->putFileAs(
                'documents/',
                $file,
                $fileName);
            if(!$storage)
            {
                return redirect()->back();
            }
            // Save the file details in the database
            $document = new Document();
            $document->file_name = $file->getClientOriginalName(); // Store the original file name
            $document->file_path = 'storage/documents/'.$fileName;
            $document->course = $request->input('course'); // Retrieve course from request
            $document->course_unit = $request->input('course_unit'); // If you have course_unit field, you can set it here
            $document->save();
      
    
        // Optionally, you can return a response or redirect
        return redirect('/document');
    }

    
    //create student 
    public function create(): View 
    {
        return view('document.create'); 
    }

    //store the student information
    public function store (Request $request): RedirectResponse
    {
        $input = $request->all();
        Document::create($input);
        return redirect('document')->with('flash_message','document added successfully');
    }

    //show student info by id
   
    public function show(string $id): view 
    {
        try {
            $document = Document::findOrFail($id);
            return view('document.show')->with('document', $document);
        } catch (ModelNotFoundException $e) {
           
            return abort(404);
        }
    }

    // Edit student form
    public function edit(string $id)
    {
        $document = Document::find($id);
        return view('document.edit')->with('document', $document);
    }

    // Update student info
    public function update(Request $request, string $id)
    {
        $document = Document::find($id);
        $input = $request->all();
        $document->update($input);
        return redirect('document')->with('flash_message', 'document information has been updated');
    }

    //delete student 
    public function destroy(string $id):RedirectResponse
    {
        Document::destroy($id);
        return redirect('document')->with('flash_message', 'document information has been deleted');
    }
    
    
}
