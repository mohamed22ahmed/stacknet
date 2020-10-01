@extends('main_pages.app')

@section('title')
    Stack Net
@endsection

@section('content')
<div class="slider">
    <div class="slider__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 slider__content-con">
                    <div class="h1-con">
                        Stacknet Company For Medical Insurance
                    </div>
                    <div class="def-con" style="margin-bottom: 7rem;">
                        StackNet is a Management Services Organization work in medical insurance field between service providers and healthcare companies
                    </div>
                    <a href="/about" class="btn-vedio">
                        Show More
                    </a>

                </div>
                <div class="col-lg-6 mt-3">
                    <img src="{{ asset('home/images/developers-white2-01.svg') }}" class="w-100" style="cursor: pointer;">
                </div>
            </div>
        </div>
    </div>

</div>

<div class="why-we" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex justify-content-center text-center">
                <div class="card card-x p-4 d-flex align-items-center" style="flex-direction:column">
                    <img src="{{ asset('home/images/designers-blue-01.svg') }}" alt="" style="width:200px">
                    <h2> facilitating transactions and communications </h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center text-center">
                <div class="card card-x p-4 d-flex align-items-center" style="flex-direction:column">
                    <img src="{{ asset('home/images/developers-white2-01.svg') }}" alt="" style="width:200px">
                    <h2 class="mt-5 pt-3" >Organizing the payment movement</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-center text-center">
                <div class="card card-x p-4 d-flex align-items-center" style="flex-direction:column">
                    <img src="{{ asset('home/images/founders-blue-01.svg') }}" alt="" style="width:130px">
                    <h2 class="mt-5 pt-3">Quick and fast procedures</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="courses" id="services">
    <div class="title">
        <h1>Let's show what stacknet provide for you </h1>
        <p>You're going to have facilitate with your bussiness !!</p>
    </div>

    <div class="search-section" style="margin-top: 10rem !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <img src="{{ asset('home/images/main_picture_fonders4-01.svg') }}" alt="">
                        <h1>Marketing</h1>
                        <p class="pl-3">
                            the service providers healthcare companies and the market in general over the social media platforms Based on our last work experience in medical insurance field.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <img src="{{ asset('home/images/developers-white2-01.svg') }}" alt="">
                        <h1>PAYMENT-Financial administration</h1>
                        <p class="pl-3">Organizing the payment movement by collecting ,reviewing claims,following up status , collecting from companies and making transferring to service providers after deducting our percentage
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <img src="{{ asset('home/images/main_picture_fonders_details4-01.svg') }}" alt="">
                        <h1>Networking operations</h1>
                        <p class="pl-3">Supervisor on the service provider to check the service level , avoid the fraud cases and to create a new medical network
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <img src="{{ asset('home/images/mob.png') }}" alt="" class="w-100 mt-5">
                        <h1 class="pt-5"> Technical administration</h1>
                        <p class="pl-3">Collecting and describing the operation instructions of all healthcare companies , making a training sessions for provider’s exist and new staffs. And sending them the working documents for all companies</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <img src="{{ asset('home/images/customer.png') }}" alt="" class="w-100">
                        <h1 class="pt-5">Directly customer supported</h1>
                        <p class="pl-3">Because not all problems faced by the patient being solved through the call centre plus the disability (educational or healthy) ,it had to be a directly customer support .(an area manager moving directly to patient solving
                            him his problem.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card card-x p-4 text-center">
                        <img src="{{ asset('home/images/presentation.png') }}" class="w-100" alt="">
                        <h1 class="mt-5 pt-5">Presentation</h1>
                        <p class="pl-3">
                            Making a presentation to the healthcare company’s new clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="steps why-we">
    <div class="container">
        <div class="title">
            <h1>Get Started in 3 Easy Steps</h1>
            <p class="mt-3">You're going to have facilitate with your bussiness all you need to follow the comming steps only and enjoy !!</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <img src="{{ asset('home/images/one.png') }}" alt="" style="height:180px" class="shadow">
                <h3 class="mt-5 pt-3">Click Get Start In Landing Page</h3>
            </div>
            <div class="col-lg-1 col-md-1">
                <div class="text-center pt-5 ml-3 " style="margin-top:6rem">
                    <img src="{{ asset('home/images/arrow-01.svg') }}" alt="" style="width:100px">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <img src="{{ asset('home/images/Stack V.png') }}" alt="" style="height:200px" class="">
                <h3 class="mt-5 pt-3">click Join in form page to register your data and wait for stacknet responding</h3>
            </div>
            <div class="col-lg-1 col-md-1">
                <div class="text-center pt-5 ml-3 " style="margin-top:6rem">
                    <img src="{{ asset('home/images/arrow-01.svg') }}" alt="" style="width:100px">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <img src="{{ asset('home/images/last.png') }}" alt="" style="height:180px" class="shadow">
                <h3 class="mt-5 pt-3">Click Get Start In Landing Page</h3>
            </div>

        </div>

    </div>

</div>


<!-------- Whatsap Contacting ---------->
<div class="whatsap" style="margin-top:15rem ; margin-bottom:15rem">
    <div class="container">
        <div class="title">
            <h1>Send Whatsapp Messages Without Saving to Contacts</h1>
            <p class="mt-3">Simply type the recipients Whatsapp messenger phone number below to get in touch with Stacknet</p>
        </div>
        <div class=" d-flex justify-content-center w-100 mt-5 pt-3" style="flex-wrap: wrap;">
            <input type="email" name="subscribe" id="" placeholder="Your Phone Number" class="contact-footer__input mr-3 mt-3">
            <button class="contact-footer__button mt-3">Send</button>
        </div>
        <div class="mt-5 pt-5">
            <img src="{{ asset('home/images/whatsup-new.svg') }}" alt="" class="">
        </div>

    </div>

</div>


@endsection
