<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcwidController extends Controller
{
    public function index()
    {

    }

    public function getScript()
    {
        return response()->view('baseScript')
            ->withHeaders([
                'Content-Type' => 'application/javascript',
                'Cache-Control' => 'max-age=3600',
            ]);
    }

    public function webHookProcess()
    {

    }
}
