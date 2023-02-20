<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(int $id)
    {
        $series = Series::find($id);

        return $series ? response()->json($series->seasons, 200) : response()->json(['message' => 'Series not found'], 404);
    }
}
