@extends('layouts.app')

@section('title', 'События')


@section('content')
    <div>События</div>
    <div>
        {{ $events }}
    </div>
    <div>
        {{ $tags }}
    </div>
@endsection