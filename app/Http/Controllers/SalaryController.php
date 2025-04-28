<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function salary(){
        return view('admin.salary');
    }
}
