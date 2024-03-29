<?php

namespace App\Listeners;

use App\Events\SeriesCreated as EventsSeriesCreated;
use App\Mail\SeriesCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailAboutSeriesCreated implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EventsSeriesCreated $event)
    {
        $mail = new SeriesCreated($event->seriesName, $event->seriesId, $event->seriesSeasonsAmount, $event->seriesEpisodesAmount);

        $users = User::all();

        foreach ($users as $key => $user) {
            $when = now()->addSeconds($key * 5);

            Mail::to($user->email)->later($when, $mail);
        }
    }
}
