<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function payroll(){
        return view('admin.payroll');
    }
}
