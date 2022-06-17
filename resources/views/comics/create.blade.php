@extends('layouts.app')

@section('content')
<div class="py-3 bg-primary text-white text-center">
    <div class="container">
        <h1 class="display-3">New Comic</h1>
    </div>
</div>
<div class="container py-5" style="max-width: 700px !important;">
    <form class="bg-light p-3" method="post" action="{{route('comics.store')}}">
    @csrf
        <div class="form-group">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="select title">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="select series">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="select image">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="sale_date" class="form-label">Date Release</label>
                <input type="date" name="sale_date" id="sale_date" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Insert type">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" max="100" aria-describedby="helpprice">
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea type="text" name="description" id="description" class="form-control" placeholder="description" rows="5"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add New Comic</button>
    </form>
</div>
@endsection