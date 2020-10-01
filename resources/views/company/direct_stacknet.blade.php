@extends('company.app')
@section('content')
<!--- Company Ptofile 1- Data Header ---->
<div class="container-fluid mt-5 pt-5">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="card pb-5">
                <div class="row">
                    <div class="col-md-2">
                        <div class="row pl-4 pt-3">
                            <div class="col-xm-6">
                                <div class="mr-4">
                                    <img src="{{ asset('company/img/doc1.jpg') }}" alt="" class="rounded-circle" style="width: 50px;">
                                </div>
                            </div>
                            <div class="col-xm-6">
                                <a href="#">
                                    STACKNET <br>
                                    <span class="text-success">Company</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10  text-center company-btn pt-3 d-flex justify-content-sm-center justify-content-md-end" style="flex-wrap: wrap;">
                        <a href="#" class="mr-2">Message</a>
                        <a href="{{ route('comp.requests_to_stacknet') }}" class="mr-2">Your Requests</a>
                        <a href="{{ route('comp.make_stacknet_request') }}"  class="mr-2">Make Request</a>
                        <a href="{{ route('comp.profile') }}" class="mr-2">Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="card">
                <div class="card-data">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('comp.requests_to_stacknet') }}">
                                All Your Requests And Replied: <span>3</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hospital-data mt-4 pl-2">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> STACKNET Info
                    </div>
                    <table class="table table-striped border-0">
                        <thead>
                          <tr>
                            <td>name</td>
                            <td>STACKNET</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Governorate</td>
                            <td>Assuit</td>
                          </tr>
                          <tr>
                            <td>Specialize</td>
                            <td>Medical Insurance Managment</td>
                          </tr>
                          <tr>
                            <td>Area</td>
                            <td>Egypt - Assuit - Assuit university , EELU Building , sixth floor
                            </td>
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
                            <td>Hany Hassan</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>email</td>
                            <td>stacknet11@gmail.com</td>
                          </tr>
                          <tr>
                            <td>phone</td>
                            <td>01156965554</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
