@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<div class="card">
    <img src="{{$comic->image_url}}" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text" id="id"><span>ID:</span> {{$comic->id}}</p>
        <p class="card-text" id="title"><span>Title:</span> {{$comic->title}}</p>
        <p class="card-text" id="description"><span>Description:</span> {{$comic->description}}</p>
        <p class="card-text" id="series"> <span>Series:</span> {{$comic->series}}</p>
        <p class="card-text" id="type"><span>Type:</span> {{$comic->type}}</p>
        <p class="card-text" id="sale_date"><span>Sale Date:</span> {{$comic->sale_date}}</p>
        <p class="card-text" id="price"><span>Price:</span> {{$comic->price}}</p>
    </div>
</div>
@endsection
