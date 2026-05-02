<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function index()
    {
        return view('majors.index'); 
    }
}
