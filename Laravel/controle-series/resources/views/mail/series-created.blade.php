@component('mail::message')
# {{ $seriesName }} criada!

A série '{{ $seriesName }}' com {{ $seriesSeasonsAmount }} temporadas e {{ $seriesEpisodesAmount }} foi criada.

@component('mail::button', ['url' => route('seasons.index', $seriesId)])
    Ver série
@endcomponent

@endcomponent