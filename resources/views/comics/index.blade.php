@extends('layouts.app')

@section('content')
<div class="container text-primary py-3">

    <div class="row">
        <div class="col-12 mt-3">
            <div class="pull-left">
                <h2>Comics</h2>
            </div>
        </div>
    </div>
    <div class="row text-start">
        <div class="pull-right py-4">
            <a href="{{route('comics.create')}}" class="btn btn-primary"> Add New Comic</a>
        </div>
    </div>

    <table class="table text-white">
        <tr>
            <th>ID</th>
            <th>Img</th>
            <th>Title</th>
            <th class="desc">Description</th>
            <th>Rlease Date</th>
            <th>Series</th>
            <th>Type</th>
            <th>Price</th>
            <th>Options</th>
        </tr>

        @foreach( $comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td><img src="{{$comic->thumb}}" alt=""></td>
            <td>{{$comic->title}}</td>
            <td class="desc">{{$comic->description}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->price}}</td>
            <td>
                <a href="{{ route('comics.show', $comic->id) }}">View</a>
                Edit
                Delete
            </td>
        </tr>
        @endforeach
    </table>    

</div>
@stop
