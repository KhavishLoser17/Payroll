<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ScheduleController extends Controller
{
    public function getSeminarSchedule()
    {
        $response = Http::get('https://hr2.easetravelandtours.com/api/v1/seminar-schedule/get');

        if ($response->successful()) {
            $seminars = $response->json();
            return view('admin.hr1-schedule', compact('seminars'));
        } else {
            return abort(500, 'Failed to fetch seminar schedule');
        }
    }
}
