@extends('layouts.app')

@section('csstyle')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="">
    <!-- <div class="contact-box mt-3 row">
        <div class="info-box col-xs-12 col-lg-4 bg-primary">
            <h3>Contact Us</h3>
            <p>We're open for any suggestion or just to have a chart</p>
            <div class="info-content">
                <div class="info-box-text mt-sm-2 mt-lg-4 mb-1 col-sm-3 col-lg-12">
                    <div class="info-gridd">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                    </div>
                    <div class="info-text">
                        <h6>Address: <span>196 West 21th Street, Sulia 721 New York NY 10016</span></h6>
                    </div>
                </div>
                <div class="info-box-text mt-sm-2 mt-lg-4 mb-1  col-sm-3 col-lg-12">
                    <div class="info-gridd">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </div>
                    <div class="info-text">
                        <h6>Phone: <span>+1235 2355 98</span></h6>
                    </div>
                </div>
                <div class="info-box-text mt-sm-2 mt-lg-4 mb-1  col-sm-3 col-lg-12">
                    <div class="info-gridd">
                        <div class="icon">
                            <i class="fa-solid fa-paper-plane"></i>
                        </div>
                    </div>
                    <div class="info-text">
                        <h6>Email: <span>info@yoursshoe.com</span></h6>
                    </div>
                </div>
                <div class="info-box-text mt-sm-2 mt-lg-4 mb-1  col-sm-3 col-lg-12">
                    <div class="info-gridd">
                        <div class="icon">
                            <i class="fa-solid fa-paper-plane"></i>
                        </div>
                    </div>
                    <div class="info-text">
                        <h6>Website: <span>yoursite.com</span></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-box col-xs-12 col-lg-8 bg-white">
            <h3>Get in touch</h3>
            <form action="" class="fill-contact">
                <div class="fill-space row">
                    <div class="fill-space-name col-sm-12 col-lg-6">
                        <label for="">FULL NAME</label><br>
                        <input type="text" name="fname" id="fname" placeholder="Name"><br>
                    </div>
                    <div class="fill-space-email col-sm-12 col-lg-6">
                        <label for="">EMAIL ADDRESS</label><br>
                        <input type="email" name="email" id="email" placeholder="Email"><br>
                    </div>
                </div>
                <label for="">SUBJECT</label><br>
                <input type="text" name="subject" id="subject" placeholder="Subject"><br>
                <label for="">MESSAGE</label><br>
                <textarea name="message" id="message" cols="50" rows="4" class="p-2" placeholder="Message"></textarea>
                <button class="btn btn-primary mt-1">Send Message</button>
            </form>

        </div>
    </div> -->

    <h2>contacts messages</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SN</th>
                <th>Firstname</th>
                <th>Email Address</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td> {{ $loop->index + 1}} </td>
                <td>{{ $contact->fname}}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection