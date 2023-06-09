@extends('layouts.dashboard')


@section('header')
<a class="navbar-brand text-dark" href="#">TABLE</a>
@endsection

@section('content')
<div class="body-page">
    <div class="my-4 d-flex justify-content-end mx-4">
        <a href="{{ url('/dashboard/shoes/create') }}" class="btn btn-primary">Create Shoe</a>
    </div>
    <div class="container TABLE" style="overflow-x: scroll;">
        <table class="table table-bordered mt-3 bg-whiteX">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Shoe names</th>
                    <th>Image</th>
                    <th>Shoe Brand</th>
                    <th>Shoe Price</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($shoes as $shoe)
                <tr style=" text-align: center;">
                    <td style=" text-align: left;"> {{ $loop->index + 1}} </td>
                
                    <td style=" text-align: left;">
                        {{ $shoe->name}} 
                    </td>  
                    <td style="">
                        <img src='{{ asset("/storage/" . $shoe->image) }}' width = 50 height = 50 title=' {{ $shoe->image }}' style="border-radius: 10px;">
                    </td>
                    <td style=" text-align: left;">
                        {{ $shoe->brand }}
                    </td>
                    <td style=" text-align: left;">
                        {{ $shoe->price }}
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ url('dashboard/shoes/' . $shoe->id . '/edit') }}" type='button'class='btn btn-sm btn-warning'>Edit</a>
                            <a href="{{ url('dashboard/shoes/' . $shoe->id . '/delete') }}" type='button' class='btn btn-sm btn-danger ml-3'>Delete</a>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection