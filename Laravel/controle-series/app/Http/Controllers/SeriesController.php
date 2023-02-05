<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticator;
use App\Http\Requests\SeriesFormRequest;
use App\Mail\SeriesCreated;
use App\Models\{Series};
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
        $this->middleware(Authenticator::class)->except('index');
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

        $mail = new SeriesCreated($series->name, $series->id, $series->seasons->count(), $series->seasons()->with('episodes')->first()->episodes->count());

        Mail::to(auth()->user()->email)->send($mail);

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
