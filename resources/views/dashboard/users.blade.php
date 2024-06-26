@extends('layouts.dashboard')

@section('style')
<link rel="stylesheet" href="{{ url('css/users.css') }}">
@endsection

@section('header')
<a class="navbar-brand text-dark" href="#">USERS</a>
@endsection

@section('content')
<div class="body-page">
    <div class="body-tab">
        <table class="table table-bordered">
            <thead>
                <td>S/N</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr style=" text-align: center;">
                    <td style=" text-align: left;"> {{ $loop->index + 1}} </td>
    
                    <td style=" text-align: left;">
                        {{ $user->name}}
                    </td>
                    <td style=" text-align: left;">
                        {{ $user->email }}
                    </td>
                    <td style=" text-align: left;">
                        {{ $user->password }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection