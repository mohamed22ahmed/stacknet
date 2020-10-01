@extends('company.app')

@section('content')
<div class="container-fluid mt-5 pt-5">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="card pb-5">
                <div class="row">
                    <div class="col-md-2">
                        <div class="row pl-4 pt-3">
                            <div class="col-xm-6">
                                <div class="mr-4">
                                    <img src="{{ asset('storage/company/'.session('img')) }}" alt="" class="rounded-circle" style="width: 50px;">
                                </div>
                            </div>
                            <div class="col-xm-6">
                                <a href="#">
                                    ElEman <br>
                                    <span class="text-success">Hospital</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10  text-center company-btn pt-3 d-flex justify-content-sm-center justify-content-md-end" style="flex-wrap: wrap;">
                        <a href="{{ route('comp.show_claims') }}" class="mr-2">Show Claims</a>
                        <a href="#" class="mr-2">Message</a>
                        <a href="{{ route('comp.all_incoming_requests') }}" class="mr-2">All InComming Requests <span class="badge bg-white ml-3 mt-0 text-danger" style="font-size: 10px;"> <span>2</span> New </span></a>
                        <a href="{{ route('comp.requests_from_you') }}" class="mr-2">Your Requests</a>
                        <a href="{{ route('comp.make_medical_request') }}"  class="mr-2">Make Request</a>
                        <a href="{{ route('comp.provider_profile') }}" class="mr-2">Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--- Company Profile Content --->
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="card">
                <div class="card-data">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('comp.requests_from_you') }}">
                                All Your Requests And Replied: <span>3</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hospital-data mt-4 pl-2">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Hospital Info
                    </div>
                    <table class="table table-striped border-0">
                        <thead>
                          <tr>
                            <td>name</td>
                            <td>ElEman Hospital</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Governorate</td>
                            <td>Cairo</td>
                          </tr>
                          <tr>
                            <td>Specialize</td>
                            <td>Hospital</td>
                          </tr>
                          <tr>
                            <td>Area</td>
                            <td>Ain Shams - Ahmed Orabt St.</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="responsible-person-data mt-4 pl-2">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Responsible Person
                    </div>
                    <table class="table table-striped border-0">
                        <thead>
                          <tr>
                            <td>name</td>
                            <td>Ahmed Mohamed</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>email</td>
                            <td>ahmed@gmail.com</td>
                          </tr>
                          <tr>
                            <td>phone</td>
                            <td>01126257044</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
