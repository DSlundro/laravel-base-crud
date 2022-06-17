@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="bg-blue relative">
        <div class="container position-relative">
            <div class="comics-img position-absolute">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            <div class="text-book px-2">comic book</div>
            <div class="text-gallery px-2">text gallery</div>
            </div> 
        </div>
    </div>

    <div class="container">
        <div class="row  my-5">

            <div class="col-8 mb-5">
                <h3 class="text-uppercase">{{ $comic['title'] }}</h3>
                <div class="row th-green my-4 m-0 ">
                    <div class="col-9 py-3 d-flex justify-content-between ">
                        U.S. Price : {{$comic['price']}}
                        <div class="text-uppercase">available</div>
                    </div>
                    <div class="col-3 py-3 text-center">
                        Check Avaiability
                    </div>
                        
                </div>
                <div class="col-12 m-0">
                    {{$comic['description']}}
                </div>
            </div>

            <div class="col-4 text-end mb-5">
                <h6 class="text-uppercase ">advertisement</h6>
                <img class="rewards"src="{{asset('img/adv.jpg')}}" alt="">
            </div>
            
        </div>
    </div>
    <div class="bg-light pt-4 pb-5 border-top border-bottom border-gray">
        <div class="container">
            <div class="row ">
                <div class="col-12 pb-5">
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
                    <div class="row row m-0 align-items-center py-2 border-top  border-gray">
                        <div class="col-3">
                            <h6>Type</h6>
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

@endsection