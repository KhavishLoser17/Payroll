<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function tax(){
        return view('admin.tax');
    }
}


