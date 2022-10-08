<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::getSeries();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $series = Series::create($request->all());

        return to_route('series.index')->with('success', "Série {$series->name} adicionada com sucesso!");
    }

    public function destroy(Series $series)
    {
        if (!$series) {
            return back()->with('fail', 'Erro: Série não encontrada!');
        }

        $series->delete();

        return back()->with('success', "Série {$series->name} apagada com sucesso!");
    }
}
