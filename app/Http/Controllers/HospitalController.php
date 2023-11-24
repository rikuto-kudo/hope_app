<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    //
    public function index(Hospital $hospital)
    {
        return view('hospital.index')->with(['hospitals' => $hospital->get()]);
    }
}
