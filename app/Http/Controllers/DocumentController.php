<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    //fetching documents from database 
    public function index()
    {
        // Retrieve all documents from the database
        $documents = Document::all();

        // Pass the documents to a view and return the view
        return view('documents.index', ['documents' => $documents]);
    }
    
    //upload documents
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|file|max:10240', 
            'course' => 'required|string', // Add validation rule for the course
        ]);
    
        // Store the uploaded file in the storage directory
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName); 
    
        // Save the file path, name, and course in the database
        $document = new Document();
        $document->file_name = $file->getClientOriginalName(); // Store the original file name
        $document->file_path = $filePath;
        $document->course = $request->input('course'); // Retrieve course from request
        $document->save();
    
        // Optionally, you can return a response or redirect
        return response()->json(['message' => 'File uploaded successfully', 'file_path' => $filePath]);
    }
    
    
}
