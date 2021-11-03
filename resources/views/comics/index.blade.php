@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Series</th>
                <th>Type</th>
                <th>Price</th>
                <th>Details</th>

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
</div>
@endsection
