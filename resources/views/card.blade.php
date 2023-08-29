@extends('layout.main')

@section('fumetti')
    <ul>
        <li>{{ $comic->title }}</li>
        <li>{{ $comic->description }}</li>
        <li>{{ $comic->price }}</li>
    </ul>
@endsection
