<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::all();
        
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = new Series();

        $serie->name = $request->name;
        $serie->save();

        return redirect('series');
    }
}
