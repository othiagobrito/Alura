<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $seriesRepository)
    {
        # code...
    }

    public function index()
    {
        return response()->json(Series::all(), 200);
    }

    public function store(SeriesFormRequest $request)
    {
        return response($this->seriesRepository->add($request), 201);
    }

    public function show(int $id)
    {
        return response()->json(Series::whereId($id)->with('seasons.episodes')->first(), 200);
    }
}
