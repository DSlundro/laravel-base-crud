@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{$comic->thumb}}" alt="" style="width: 300px">
            </div>
            <div class="col">
                <h1>{{$comic->title}}</h1>
                <p>{{$comic->description}}</p>
                <span><b>{{$comic->series}}</b></span>
                <span class="px-3">{{$comic->type}}</span>
                <span>{{$comic->sale_date}}</span>
                <h4 class="py-3">$ {{$comic->price}}</h4>
            </div>
        </div>
    </div>
@stop