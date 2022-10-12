<?php

namespace App\Http\Controllers;

use App\Models\{Episode, Season};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpisodesController extends Controller
{
    public function index(Season $season)
    {
        return view('episodes.index', ['episodes' => $season->episodes]);
    }

    public function update(Request $request, Season $season)
    {
        $watchedEpisodes = $request->episodes;

        DB::beginTransaction();

        try {
            $season->episodes->each(function (Episode $episode) use ($watchedEpisodes) {
                $episode->watched = in_array($episode->id, $watchedEpisodes);
            });

            $season->push();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return to_route('episodes.index', $season->id)->with('fail', 'Erro ao salvar!');
        }

        return to_route('episodes.index', $season->id)->with('success', 'Salvo com sucesso!');
    }
}
