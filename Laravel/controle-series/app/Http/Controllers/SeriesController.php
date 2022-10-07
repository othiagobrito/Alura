<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = ['The Big Bang Theory', 'Dexter', 'Family Guy'];
        return view('series.index', compact('series'));
    }
}
