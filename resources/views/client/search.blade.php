@extends('layouts.app')

@section('title', 'Поиск')


@section('content')
    <div>Поиск</div>
    <div>
        {{ $events }}
    </div>
    <div>
        {{ $tags }}
    </div>
@endsection