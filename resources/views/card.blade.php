@extends('layout.main')

@section('fumetti')
    <ul>
        <li>{{ $comic->title }}</li>
        <li>{{ $comic->description }}</li>
        <li>{{ $comic->price }}</li>
    </ul>
    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>delete</button>
    </form>
@endsection
