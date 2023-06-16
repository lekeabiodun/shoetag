@extends('layouts.app')

@section('csstyle')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('content')
<div class="content mb-5">
    <div class="blog-head">
        <h1 class="blog-head-1"> MY STORE </h1>
    </div>
    <div class="my-4 d-flex justify-content-end mx-4">
        <a href="{{ url('/blog/create') }}" class="btn btn-primary">Create Shoe</a>
    </div>
    <div class="blog-content">
        <div class="blog-content-box row">
            @foreach($blogs as $blog)
            <div class="box-1 mt-5 col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <img src='{{ asset("/storage/" . $blog->image) }}' alt="" srcset="">
                <div class="middle-box">
                    <h6> {{ $blog->name}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection