@extends('company.app')

@section('content')
    <div class="container-fluid mt-5 pt-5">
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row pl-4">
                                <div class="col-xm-6">
                                    <div class="mr-4">
                                        <img src="{{ asset('storage/company/'.session('img')) }}" alt="" class="rounded-circle" style="width: 50px;">
                                    </div>
                                </div>
                                <div class="col-xm-6">
                                    <a href="{{ route('comp.index') }}">
                                        {{ session('name') }} <br>
                                        <span class="text-success">Insurance Company</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 ml-auto  text-right company-btn pt-2">
                            <a href="{{ route('comp.all_incoming_requests') }}" class="mr-2">All InComming Requests <span class="badge bg-white ml-3 mt-0 text-danger" style="font-size: 10px;"> 2 New </span> </a>
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
                            <div class="col-md-4">
                                <h5 class="pt-2 text-center" style="color: #3f51b5;">Lets Start ---></p>
                            </div>
                            <div class="col-md-8 text-right pt-2">
                                <a href="{{ route('comp.direct_stacknet') }}" class="mr-2 btn-hover"> Direct Stacknet </a>
                                <a href="{{ route('comp.medical_network') }}" class="mr-2 btn-hover">Medical Network Managment</a>
                            </div>
                        </div>
                    </div>
                    <div class="providers-box mt-4 pl-2">
                        <div class="mb-4">
                            <i class="fas fa-user mr-3"></i> All <span>Hospital</span> you contracted with
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 ml-auto">
                                <div class="row mb-5">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <a href="{{ route('comp.provider_profile') }}">
                                            <div class="card">
                                                <img src="{{ asset('company/img/4.jpg') }}" class="w-100" alt="" style="height: 200px;">
                                                <div class="provider-content mt-4">
                                                    <table class="table table-striped border-0">
                                                        <tr>
                                                            <th>name: </th>
                                                            <td>ElEman Hospital</td>
                                                        </tr>
                                                        <tr>
                                                            <th>governorate: </th>
                                                            <td>Cairo</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Specialize: </th>
                                                            <td>Hospital</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Area: </th>
                                                            <td>Ain Shams</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact Person: </th>
                                                            <td>Ahmed Mohamed</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone: </th>
                                                            <td>01126257042</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <a href="{{ route('comp.provider_profile') }}">
                                            <div class="card">
                                                <img src="{{ asset('company/img/2.jpg') }}" class="w-100" alt="" style="height: 200px;">
                                                <div class="provider-content mt-4">
                                                    <table class="table table-striped border-0">
                                                        <tr>
                                                            <th>name: </th>
                                                            <td>ElEman Hospital</td>
                                                        </tr>
                                                        <tr>
                                                            <th>governorate: </th>
                                                            <td>Cairo</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Specialize: </th>
                                                            <td>Hospital</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Area: </th>
                                                            <td>Ain Shams</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact Person: </th>
                                                            <td>Ahmed Mohamed</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone: </th>
                                                            <td>01126257042</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <a href="{{ route('comp.provider_profile') }}">
                                            <div class="card">
                                                <img src="{{ asset('company/img/3.jpg') }}" class="w-100" alt="" style="height: 200px;">
                                                <div class="provider-content mt-4">
                                                    <table class="table table-striped border-0">
                                                        <tr>
                                                            <th>name: </th>
                                                            <td>ElEman Hospital</td>
                                                        </tr>
                                                        <tr>
                                                            <th>governorate: </th>
                                                            <td>Cairo</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Specialize: </th>
                                                            <td>Hospital</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Area: </th>
                                                            <td>Ain Shams</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Contact Person: </th>
                                                            <td>Ahmed Mohamed</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone: </th>
                                                            <td>01126257042</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
