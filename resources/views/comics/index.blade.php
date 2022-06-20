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

    <div class="alerts">
        <div class="d-flex justify-content-center">
            <div class="text-center" style="width: 200px;">
                @if (session('created'))
                <div class="alert alert-success">
                    {{ session('created') }}
                </div>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="text-center" style="width: 200px;">
                @if (session('edited'))
                <div class="alert alert-success">
                    {{ session('edited') }}
                </div>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="text-center" style="width: 200px;">
                @if (session('deleted'))
                <div class="alert alert-danger">
                    {{ session('deleted') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <table class="table text-white">
        <tr>
            <th>ID</th>
            <th>Img</th>
            <th>Title</th>
            <th>Description</th>
            <th>Rlease Date</th>
            <th>Series</th>
            <th>Type</th>
            <th>Price</th>
            <th>Options</th>
        </tr>

        @foreach( $comics as $comic)
        <tr class="">
            <td class="fs-5 fw-bold">{{$comic->id}}</td>
            <td><img src="{{$comic->thumb}}" alt=""></td>
            <td>{{$comic->title}}</td>
            <td class="desc text-justify">{{mb_strimwidth($comic->description, 0, 300, "...")}}</td>
            <td class="date">{{$comic->sale_date}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td class="price">$ {{$comic->price}}</td>
            <td class="buttons">
                <!-- SHOW -->
                <button type="button" class="btn btn-primary ">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        View
                    </a>
                </button>
                <!-- EDIT -->
                <button type="button" class="btn btn-warning">
                    <a href="{{route('comics.edit',$comic->id)}}">
                        Edit
                    </a>
                </button>
                <!-- DELETE -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-comic-{{ $comic->id }}">
                    Delete
                </button>

                <!-- Modal -->
                <div class="modal fade" id="delete-comic-{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$comic->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><span class="text-secondary">{{$comic->title}}</span>" </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-secondary text-center">
                                Are you sure?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form action="{{route('comics.destroy',$comic->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </td>
        </tr>
        @endforeach
    </table>    

</div>
@stop
