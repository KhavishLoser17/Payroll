<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReimbursementController extends Controller
{
    public function disbursement(){
        return view('admin.disbursement');
    }
}
