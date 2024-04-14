<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Document;

class ChartController extends Controller
{
    //
    public function displayChart()
    {
        // Perform calculations and retrieve data from the database
        $chartData = Student::all(); 
        
        // Pass data to the view
        return view('charts', ['chartData' => $chartData]);
    }

    public function countChart()
    {
        // Retrieve data and calculate total number of documents by category
        $documentCounts = Document::select('course', \DB::raw('COUNT(*) as total'))
            ->groupBy('name')
            ->get();

        // Pass data to the view
        return view('charts', ['documentCounts' => $documentCounts]);
    }
}
