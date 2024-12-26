<?php

namespace App\Http\Controllers;

class FallbackController extends Controller
{
    public function fallback()
    {
        return view('fallback');
    }
}
