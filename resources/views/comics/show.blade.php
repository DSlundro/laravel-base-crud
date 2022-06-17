@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="container pt-1">
        <div class="row my-5">
            <div class="col-2">
                <div class="comics-img">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </div> 
            </div>
            <div class="col-10 d-flex flex-column py-4">
                <div class="d-flex flex-column gap-3">
                    <h3 class="text-uppercase">{{ $comic['title'] }}</h3>
                    <p>{{$comic->description}}</p>
                </div>

                <div class="col-12 d-flex gap-4 py-4">
                    <div>Price: <b>$ {{$comic['price']}}</b></div>
                    <div class="text-uppercase"><b>available</b></div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="bg-light pt-4 pb-5 border-top border-bottom border-gray">
        <div class="container">
            <div class="row ">
                <div class="col pb-5">
                    <h3 class="mb-4">Specs</h3>
                    <div class="row row m-0 py-2 align-items-center border-top  border-gray">
                        <div class="col-3">
                            <h6>Series:</h6>
                        </div>
                        <div class="col-9">
                            <p class=" m-0">
                                {{$comic['series']}}
                            </p>
                        </div>
                    </div>
                    <div class="row row m-0 py-2 align-items-center border-top  border-gray">
                        <div class="col-3">
                            <h6>Type:</h6>
                        </div>
                        <div class="col-9">
                            <p class=" m-0">
                                {{$comic['type']}}
                            </p>
                        </div>
                    </div>
                    <div class="row row m-0 align-items-center py-2 border-top  border-gray">
                        <div class="col-3">
                            <h6>U.S. Price:</h6>
                        </div>
                        <div class="col-9">
                            <p class=" m-0">
                                {{$comic['price']}}
                            </p>
                        </div>
                    </div>
                    <div class="row row align-items-center m-0 py-2 border-top  border-bottom border-gray">
                        <div class="col-3">
                            <h6>On sale date:</h6>
                        </div>
                        <div class="col-9">
                            <p class=" m-0">
                                {{$comic['sale_date']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop