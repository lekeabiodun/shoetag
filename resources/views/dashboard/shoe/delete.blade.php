@extends('layouts.dashboard')


@section('header')
<a class="navbar-brand text-dark" href="#">Delete Shoe</a>
@endsection

@section('content')
<div class="body-page">
    
    <div class="container">
        <form action="{{ url('dashboard/shoes/' . $shoe->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <!-- <label for="name">Name </label> -->
                <input type="hidden" class="form-control" id="name" name="name" value="{{ $shoe->name }}">
            </div>
            <h1>Are you sure you want to delete {{ $shoe->name}} </h1>
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ url('dashboard/shoes/') }}" class="btn btn-primary">Cancel</a>
        </form>
    </div>
</div>
@endsection