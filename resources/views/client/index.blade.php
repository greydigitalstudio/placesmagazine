@extends('layouts.app')

@section('title', 'Главная')

@section('page-scripts')
    <script src="{{asset('js/page-main.js')}}"></script>
@endsection

@section('content')
    @include('_partials._client_parts.main_banner')
    @include('_partials._client_parts.guide', ['title' => 'ГИД ПО СОБЫТИЯМ В ИРКУТСКЕ', 'cards' => $events])
    @include('_partials._client_parts.where_to_go', ['title' => 'Куда сходить на этой неделе?', 'cards' => $events])
    @include('_partials._client_parts.companies_slider', ['title' => 'в каталоге 158 активных событий известных компаний'])
    @include('_partials._client_parts.main_event', ['title' => 'Главное событие недели', 'event' => $events[0]])
    <div>
        {{ $events }}
    </div>
    <div>
        {{ $tags }}
    </div>
@endsection