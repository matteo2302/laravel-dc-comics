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
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">thumb</label>
        <input type="text" class="form-control" name="description" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">price</label>
        <input type="number" class="form-control" name="price" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">series</label>
        <input type="text" class="form-control" name="series" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">sale date</label>
        <input type="date" class="form-control" name="sale_date" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">type</label>
        <input type="text" class="form-control" name="type" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
<button><a href="{{ route('comics.index') }}">home</a></button>
