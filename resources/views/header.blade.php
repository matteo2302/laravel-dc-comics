@extends('layout.main')

@section('fumetti')
    @foreach ($fumetti as $fumetto)
        <ul>
            <li><a href="{{ route('card/$index') }}"></a>{{ $fumetto->title }}</li>
        </ul>
    @endforeach
@endsection
