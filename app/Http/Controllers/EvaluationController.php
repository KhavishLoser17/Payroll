<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EvaluationController extends Controller
{
    public function showEvaluations()
    {
        // Fetch data from the API
        $response = Http::get('https://hr2.easetravelandtours.com/api/v1/get-evaluation');

        // Check if the API call was successful
        if ($response->successful()) {
            $evaluations = $response->json();
        } else {
            // Handle error if API request fails
            $evaluations = [];
        }

        // Pass the evaluations data to the view
        return view('admin.hr1-evaluation', compact('evaluations'));
    }
}
