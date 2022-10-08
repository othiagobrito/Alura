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
        Series::create($request->all());

        return to_route('series.index')->with('success', 'Série adicionada com sucesso!');
    }

    public function destroy($id)
    {
        $serie = Series::find($id);

        if (!$serie) {
            return back()->with('fail', 'Erro: Série não encontrada!');
        }

        $serie->delete();

        return back()->with('success', 'Série apagada com sucesso!');
    }
}
