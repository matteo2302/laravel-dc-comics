@extends('layout.main')
<form action="{{ route('comics.store') }}" method="POST" novalidate>
    @csrf
    <div>
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">descrtiption</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="number" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" name="series" id="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale date</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" name="type" id="type">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>
<button><a href="{{ route('comics.index') }}">home</a></button>
