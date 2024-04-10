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
        //get all documents
        $documents = Document::all();
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
