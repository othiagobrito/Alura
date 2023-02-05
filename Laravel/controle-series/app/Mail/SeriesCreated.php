<?php

namespace App\Mail;

use App\Models\Series;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SeriesCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public string $seriesName = 'Teste', public int $seriesId = 1, public int $seriesSeasonsAmount = 1, public int $seriesEpisodesAmount = 1)
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $series = Series::find(1);
        
        return $this->markdown('mail.series-created', compact('series'));
    }
}
