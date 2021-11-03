@extends('layouts.app')

@section('title', 'Create')

@section('content')
<div class="container">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" value="{{ $comic->title }}" type="text" class="form-control" id="title" placeholder="Insert the comic title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="6" placeholder="Insert the comic description">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input name="image_url" value="{{ $comic->image_url }}" type="text" class="form-control" id="image_url" placeholder="Insert the image URL">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input name="series" value="{{ $comic->series }}" type="text" class="form-control" id="series" placeholder="Insert the comic series">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input name="type" value="{{ $comic->type }}" type="text" class="form-control" id="type" placeholder="Insert the comic type">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input name="sale_date" value="{{ $comic->sale_date }}" type="text" class="form-control" id="sale_date" placeholder="Insert the comic sale date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" value="{{ $comic->price }}" type="text" class="form-control" id="price" placeholder="Insert the comic price">
        </div>

        <button class="btn btn-primary" type='submit'>Update comic</button>
    </form>
</div>
@endsection
