<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompetentController extends Controller
{
    public function fetchCompetent()
    {
        $response = Http::get('https://hr2.easetravelandtours.com/api/v1/get-competent');

        if ($response->successful()) {
            $data = $response->json();
            return view('admin.hr1', compact('data'));
        } else {
            return abort(500, 'Failed to fetch data from API');
        }
    }
}
