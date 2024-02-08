<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    //
    public function PharmacistDashboard(){
        return view('pharmacist.index');
    }
}
