<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
    $data = "asep";

    return view('pages.dashboard', compact('data'));
    }

    
}
