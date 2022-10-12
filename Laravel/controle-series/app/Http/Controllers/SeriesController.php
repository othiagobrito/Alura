<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\{Series, Season, Episode};
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
        //
    }

    public function index()
    {
        $series = Series::all();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function edit(Series $series)
    {
        return view('series.edit', compact('series'));
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('success', "Série {$series->name} atualizada com sucesso!");
    }

    public function store(SeriesFormRequest $request)
    {
        $series = $this->repository->add($request);

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
