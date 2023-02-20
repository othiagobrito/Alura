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
    public function __construct(public string $seriesName, public int $seriesId, public int $seriesSeasonsAmount, public int $seriesEpisodesAmount)
    {
        $this->subject = "Série {$seriesName} criada";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {       
        return $this->markdown('mail.series-created');
    }
}
