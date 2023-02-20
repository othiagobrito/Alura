<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\{Episode, Series};
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function index(int $id)
    {
        $series = Series::find($id);

        return $series ? response()->json($series->episodes, 200) : response()->json(['message' => 'Series not found'], 404);
    }

    public function update(int $id, Request $request)
    {
        $episode = Episode::find($id);

        if (! $episode) {
            return response()->json(['message' => 'Episode not found'], 404);
        }

        $episode->watched = $request->watched;
        $episode->save();

        return response()->json($episode, 200);
    }
}
