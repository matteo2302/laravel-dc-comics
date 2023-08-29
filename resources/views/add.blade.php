@extends('layout.main')
<form action="{{ route('comics.index') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">title</label>
        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">descrtiption</label>
        <input type="text" class="form-control" name="description" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
<button><a href="{{ route('comics.index') }}">home</a></button>
