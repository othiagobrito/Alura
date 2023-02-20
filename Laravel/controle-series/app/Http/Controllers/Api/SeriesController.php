<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        return response()->json(Series::all(), 200);
    }

    public function store(SeriesFormRequest $request)
    {
        return response(Series::create($request->all()), 201);
    }
}
