@extends('layouts.app')

@section('title', 'Comics')

@section('content')
@dump($comics)
<h1>Contenuto Comics</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
            <th scope="col">Details</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th>{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->price}}</td>
            <td>
                <a class="btn btn-info "href="{{route('comics.show', $comic->id)}}">Details</a>
                <a class="btn btn-warning "href="">Edit</a>
                <a class="btn btn-danger "href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
