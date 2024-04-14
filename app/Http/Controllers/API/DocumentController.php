<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all documents grouped by course and under each course, group by course unit
        $documents = Document::all()->groupBy('course')->map(function ($course) {
            return $course->groupBy('course_unit')->map(function ($unit) {
                return $unit->map(function ($document) {
                    // Modify the file_path to be a clickable URL
                    $document->file_path = url($document->file_path);
                    return $document;
                });
            });
        });

        return response()->json(['success' => true, 'data' => $documents]);
    }


    public function downloadDocument($id)
    {
        $document = Document::find($id);

        //get the document path from the databas
        return response()->json(
            [
                'success' => true,
                'data' => [
                    'file_path' => $document->file_path,
                    'file_name' => $document->file_name,
                ],
            ]
        );
    }
}
