@extends('layouts.dashboard')


@section('header')
<a class="navbar-brand text-dark" href="#">Create Shoe</a>
@endsection

@section('content')
<div class="body-page">
    
    <div class="container">
        <form action="{{ url('dashboard/shoes') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="name">image </label>
                <input type="file" class="form-control" id="image" name="image" >
                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand') }}">
                @error('brand') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
                @error('price') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection