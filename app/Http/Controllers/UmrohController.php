<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmrohController extends Controller
{
    public function index(Request $request)
    {
        return view('umroh.umroh');
    }
}
