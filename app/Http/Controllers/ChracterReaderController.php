<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChracterReaderController extends Controller
{
    public function index(Request $request)
    {
        return view('chracterreader.chracterreader');
    }
}
