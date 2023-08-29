@extends('layout.main')

@section('fumetti')
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a></li>
        @endforeach
    </ul>
@endsection
