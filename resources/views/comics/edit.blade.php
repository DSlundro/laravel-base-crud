@extends('layouts.app')

@section('content')
<div class="py-3 bg-primary text-white text-center">
    <div class="container">
        <h1 class="display-3 fw-bold glitch">{{$comic->title}}</h1>
    </div>
</div>
<div class="container py-5" style="max-width: 700px !important;">
    <form class="bg-light p-3" method="post" action="{{route('comics.update', $comic->id)}}">
    @csrf
    @method('PUT')

        <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->

        <div class="form-group">
            <div class="mb-3">
                <label for="title" class="form-label">Title*</label>
                <input 
                type="text" 
                name="title" 
                id="title" 
                placeholder="select title" 
                class="form-control @error('title') is-invalid @enderror" 
                value="{{$comic->title}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="series" class="form-label">Series*</label>
                <input 
                type="text" 
                name="series" 
                id="series" 

                placeholder="select series" 
                class="form-control @error('series') is-invalid @enderror" 
                value="{{$comic->series}}">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
        <div class="mb-3">
                <label for="thumb" class="form-label">Title*</label>
                <input 
                type="text" 
                name="thumb" 
                id="thumb" 
                placeholder="select thumb" 
                class="form-control @error('thumb') is-invalid @enderror" 
                value="{{$comic->thumb}}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="sale_date" class="form-label">Date Release*</label>
                <input 
                type="date" 
                name="sale_date" 
                id="sale_date"
                class="form-control @error('sale_date') is-invalid @enderror" 
                value="{{$comic->sale_date}}">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
            <label for="type" class="form-label">Title*</label>
                <input 
                type="text" 
                name="type" 
                id="type" 
                placeholder="select type" 
                class="form-control @error('type') is-invalid @enderror" 
                value="{{$comic->type}}">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="price" class="form-label">Price*</label>
                <input 
                type="number" 
                name="price" 
                id="price" 
                step="0.01" max="100"
                class="form-control @error('price') is-invalid @enderror" 
                value="{{$comic->price}}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="description" class="form-label">Description*</label>
                <textarea 
                type="text" 
                name="description" 
                id="description" 
                placeholder="description" 
                rows="5"
                class="form-control @error('description') is-invalid @enderror">{{$comic->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <p class="fw-bold mt-0">* required</p>
        <button type="submit" class="btn btn-primary">Add New Comic</button>
    </form>
</div>
@endsection