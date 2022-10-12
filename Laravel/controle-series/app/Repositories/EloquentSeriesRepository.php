<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\{Episode, Season, Series};
use Illuminate\Support\Facades\DB;

class EloquentSeriesRepository implements SeriesRepository
{
    public function add(SeriesFormRequest $request): Series
    {
        return DB::transaction(function () use ($request, &$series) {
            $series = Series::create($request->all());

            $seasons = [];

            for ($i = 1; $i <= $request->seasons; $i++) { 
                $seasons[] = [
                    'series_id' => $series->id,
                    'number' => $i,
                ];
            }

            Season::insert($seasons);

            $episodes = [];

            foreach ($series->seasons as $season) {
                for ($j = 1; $j <= $request->episodes; $j++) { 
                    $episodes[] = [
                        'season_id' => $season->id,
                        'number' => $j,
                    ];
                }
            }

            Episode::insert($episodes);

            return $series;
        }, 5);

        // Outra forma:
        // DB::beginTransaction(); , DB::commit(); , DB::rollBack();
    }
}
