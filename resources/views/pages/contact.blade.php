@extends('layouts.app')

@section('content')
<div class="container">
    <div class="contact-box mt-3 ml-2 row">
        <div class="info-box col-4 bg-primary"> 
        </div>
        <div class="text-box col-8 bg-white"> 
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
            </form>
            
        </div>
    </div>
</div>

@endsection
