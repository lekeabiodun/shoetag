@extends('layouts.app')

@section('csstyle')
<link rel="stylesheet" href="{{ url('css/.css') }}">
@endsection

@section('content')
<div class="p-sm-5 pt-5 pl-4 pr-4 pb-5" style="background-color: #f2f2f2;">
    <form action="{{ url('blog/create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Image </label>
            <input type="file" class="form-control" id="image" name="image">
            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="name">Name </label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection