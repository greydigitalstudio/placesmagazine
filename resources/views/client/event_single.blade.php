@extends('layouts.app')

@section('title', 'Главная')


@section('content')
    {{ $event->name }}
    <br />
    {{ $event->price }}
    <br />
    {{ $event->description }}
    <br />
    {!! $event->content !!}
    <br />
    {{ $event->recomended }}
    <br />
    <img src="{{ asset('storage/uploads/') . '/' . $event->main_photo }}" alt="{{ $event->name }}" width="100%">
    <br />
    {{ $event->popular }}
    <br />
    <strong>{{ date('j F', strtotime($event->event_datetime)) }}</strong> <span>c {{ date('H:i', strtotime($event->event_datetime)) }} до {{ date('H:i', strtotime($event->endtime)) }}</span>
    <br />
    {{ $event->occasion }}
    <br />
    {{ $event->min_guests }}
    <br />
    {{ $event->max_guests }}
    <br />
    {{ $event->transfer }}
    <br />
    {{ $event->place }}
    <br />
    {{ $event->checked }}
    <br />
    {{ $event->pg }}
    <br />
    {{ $event->address }}
@endsection