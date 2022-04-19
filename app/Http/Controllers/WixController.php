<?php

namespace App\Http\Controllers;

class WixController extends Controller
{
    public function auth()
    {
        return view('auth')
            ->withHeaders('X-Frame-Options', 'SAMEORIGIN');
    }

    public function index()
    {
        return view('admin');
    }
}
