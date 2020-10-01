@extends('main_pages.app')

@section('title')
    Contact US
@endsection

@section('content')
<div class="Contact">
    @if(session('message'))
        <a class="alert alert-success">{{ session('message') }}</a>
    @endif
    <div class="container">
        <div class="contact-content text-center">
            <div class="contact-content__title w-100">
                HAVE SOME QUESTIONS?
            </div>
            <div class="location-content mt-3">
                <span><i class="fas fa-globe mr-3 globe-icon"></i></span> <span class="mr-5">LOCATION</span> Assuit : Assuit University
            </div>
        </div>
        <div class="contact-operations">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 d-flex justify-content-center mb-5 contact-img">
                    <img src="{{ asset('home/images/letter.svg') }}" alt="" style="width: 320px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 d-flex justify-content-center mb-5">
                    <form method="POST" class="form-gtoup" style="padding-top: 4rem;">
                        @csrf
                        <input type="text" class="form-control mb-4 contact-input" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
                        @if($errors->first('first_name'))
                        <span style="color:red">{{ $errors->first('first_name') }}</span>
                        @endif
                        <input type="text" class="form-control mb-4 contact-input" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                        @if($errors->first('last_name'))
                        <span style="color:red">{{ $errors->first('last_name') }}</span>
                        @endif
                        <input type="email" class="form-control mb-4 contact-input" placeholder="Your Email" name="email" value="{{ old('email') }}">
                        @if($errors->first('email'))
                            <span style="color:red">{{ $errors->first('email') }}</span>
                        @endif
                        <textarea name="question" id="" class="textarea-contact" placeholder="Your Question">{{ old('question') }}</textarea><br>
                        @if($errors->first('question'))
                        <span style="color:red">{{ $errors->first('question') }}</span>
                        @endif
                        <input type="submit" name="" id="" class="form-control submit-contact-btn" onclick="success6()">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="main-slider__social">
        <ul class="ul">
            <li class=" li twitter">
                <a href="#">
                    Twitter
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class=" li facebook">
                <a href="#">
                    Facebook
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li class=" li google">
                <a href="#">
                    Google-Plus
                    <i class="fab fa-google-plus" aria-hidden="true"></i>
                </a>
            </li>
            <li class="li insta">
                <a href="#">
                    Instagram
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>

    </div>
@endsection
