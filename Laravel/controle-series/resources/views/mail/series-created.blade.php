@component('mail::message')
# {{ $series->name }} criada!

A série '{{ $series->name }}' com {{ $series->seasons->count() }} temporadas e {{ $series->seasons()->with('episodes')->first()->episodes->count() }} foi criada.

@component('mail::button', ['url' => route('seasons.index', $series->id)])
    Ver série
@endcomponent

@endcomponent