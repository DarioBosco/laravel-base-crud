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
                <th>Controls</th>
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
                <td class="controls">
                    <a class="btn btn-info "href="{{route('comics.show', $comic->id)}}">Details</a>
                    <a class="btn btn-warning "href="{{route('comics.edit', $comic->id)}}">Edit</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
