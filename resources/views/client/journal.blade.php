@extends('layouts.app')

@section('title', 'Журнал')


@section('content')
    <div>Журнал</div>
    <div>
        {{ $events }}
    </div>
    <div>
        {{ $tags }}
    </div>
@endsection