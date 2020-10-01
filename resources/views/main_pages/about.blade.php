@extends('main_pages.app')

@section('title')
    About Us
@endsection

@section('content')
<div style="background-color: #f5f9fa; padding-bottom: 8rem; padding-top: 15rem;">
    <div class="slider__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 slider__content-con d-flex justify-content-center">
                    <div>
                        <div class="h1-con" style="font-size: 48px;margin-bottom: 1rem; ">
                            About <span style="color:#40aacf;">STACKNET</span>
                        </div>
                        <div class="def-con">
                           Lets Know How We Are ?!!
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img src="{{ asset('home/images/IMG_About2-02.svg') }}" alt=""  data-toggle="modal" data-target="#modal1"  style="cursor: pointer; width:80%;">
                </div>
            </div>
        </div>
    </div>

    <!---- Social Icon ---->
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

<div class="our-story">
    <div class="container">
        <div class="contact-content__title w-100 text-center">
            Our Story
        </div>
        <div class="d-flex justify-content-center mt-5 ">
            <div class="our-story--paragraph">
                StackNet is a Management Services Organization (MSO) comprised of healthcare professionals serving the
                rapid growth of its IPAs and Medical Groups provides comprehensive administrative support to Independent
                Physicians Associations (IPAs) , healthcare companies (TPAs) and medical groups, pursuing both quality
                patient-care and profitability. StackNet helping numerous IPAs , TPAs and medical groups achieve their
                financial goals and organizational success by facilitating transactions and communications among all of
                them. As health care industry continues to evolve, StackNet remains at the forefront, anticipating changes
                and their impacts to the clients, believes in a solid infrastructure and technology, which ensure the delivery
                of an integrated health care system with the highest efficiency and accuracy.

            </div>
        </div>
    </div>
</div>


<div class="our-team">
    <div class="container">
        <div class="contact-content__title w-100 text-center">
            Who is Behind the Magic?
        </div>
        <div class="mt-5">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('home/images/hany.jpg') }}" style="width: 250px;">
                    <div class="text-center mt-5">
                        <h3>Hanny Abdelkareem</h3>
                        <p>Founder | Operation Manager</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <img src="{{ asset('home/images/Abdo.jpg') }}" style="width: 250px ;">
                    <div class="text-center mt-5">
                        <h3> Abdelrahim Aref </h3>
                        <p>Co-Founder | Operation Manager</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <img src="{{ asset('home/images/memo.jpg') }}" style="width: 250px;" >
                    <div class="text-center mt-5">
                        <h3> Mohamed Ahmed </h3>
                        <p>Co-Founder | Back-end Web Developer</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('home/images/Group.png') }}" class="w-100">
                    <div class="text-center mt-5">
                        <h3>Hanny Abdelkareem</h3>
                        <p>Founder | Operation Manager</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('home/images/Group.png') }}" class="w-100">
                    <div class="text-center mt-5">
                        <h3>Hanny Abdelkareem</h3>
                        <p>Founder | Operation Manager</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('home/images/Group.png') }}" class="w-100">
                    <div class="text-center mt-5">
                        <h3>Hanny Abdelkareem</h3>
                        <p>Founder | Operation Manager</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
