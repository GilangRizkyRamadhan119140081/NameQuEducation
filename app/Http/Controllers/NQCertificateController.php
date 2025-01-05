<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NQCertificateController extends Controller
{
    public function index(Request $request)
    {
        return view('nqcertificate.nqcertificate');
    }
}
