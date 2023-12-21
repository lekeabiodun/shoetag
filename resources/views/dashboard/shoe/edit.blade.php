@extends('layouts.dashboard')


@section('header')
<a class="navbar-brand text-dark" href="#">Edit Shoe</a>
@endsection

@section('content')
<div class="body-page">
    
    <div class="container">
        <form action="{{ url('dashboard/shoes/' . $shoe->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $shoe->name }}">
            </div>
            <div class="form-group">
                <label for="image">image </label>
                <input type="file" class="form-control" id="image" name="image" value="{{ $shoe->image }}" required>
                <!-- @error('image') <span class="text-danger">{{ $message }}</span> @enderror -->
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ $shoe->brand }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $shoe->price }}">
            </div>
            <button type="submit" class="btn btn-primary  mx-auto">Update</button>
            <a href="{{ url('dashboard/shoes/') }}" class="btn btn-warning">Cancel</a>
        </form>
    </div>
</div>
@endsection