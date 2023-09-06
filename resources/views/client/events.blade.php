@extends('layouts.app')

@section('title', 'События')

@section('page-scripts')
    <script src="{{asset('js/page-main.js')}}"></script>
@endsection

@section('content')
    @include('_partials._client_parts.events_global_title', ['title' => 'места и события', 'subtitle' => 'Помогаем увидеть обычные события под новым углом'])
    @if (count($events) > 0)
        @include('_partials._client_parts.main_event', ['event' => $events[0]])
        @include('_partials._client_parts.events_filter', ['title' => 'Гид по событиям в Иркутске', 'categories' => $categories, 'cards' => $events])
    @endif
    @include('_partials._client_parts.companies_slider', ['title' => 'в каталоге 158 активных событий известных компаний'])
    @include('_partials._client_parts.reviews', ['title' => 'Отзывы'])
    @include('_partials._client_parts.event_form', ['title' => 'Предложение дня: если вы нашли новости,', 'subtitle' => 'пожалуйста, верните их и получите награду!', 'button_type' => 'circle'])
@endsection