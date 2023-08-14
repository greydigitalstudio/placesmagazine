@extends('layouts.app')

@section('title', 'Избранные события')


@section('content')
    <div>Избранные события</div>
    <div>
        {{ $events }}
    </div>
    <div>
        {{ $tags }}
    </div>
@endsection