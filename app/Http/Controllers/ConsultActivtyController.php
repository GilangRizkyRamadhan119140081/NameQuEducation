<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultActivtyController extends Controller
{
    public function index(Request $request)
    {
        return view('consultactivty.consultactivty');
    }
}
