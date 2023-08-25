@extends('layout.main')

@section('fumetti')
    @foreach ($fumetti as $fumetto)
        <ul>
            <li>{{ $fumetto->title }}</li>
            <li>{{ $fumetto->description }}</li>
            <li>{{ $fumetto->price }}</li>
        </ul>
    @endforeach
@endsection
