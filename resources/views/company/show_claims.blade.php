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
                                <a href="#">
                                    {{ session('name') }} <br>
                                    <span class="text-success">Insurance Company</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8  text-center company-btn pt-2">
                        <a href="{{ route('comp.show_claims') }}" class="mr-2">Show Claims</a>
                        <a href="#" class="mr-2">Message</a>
                        <a href="{{ route('comp.all_incoming_requests') }}" class="mr-2">All InComming Requests</a>
                        <a href="{{ route('comp.make_medical_request') }}"  class="mr-2">Make Request</a>
                        <a href="#" data-toggle="modal" data-target="#complain" class="mr-2">Complain</a>
                        <a href="{{ route('comp.provider_profile') }}" class="mr-2">Profile</a>
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
                <div class="accepted-requests mt-5  pl-2">
                    <div class="mb-5">
                        <i class="fas fa-user mr-3"></i> All Claims Requests From <span>ElEman Hospital</span>
                    </div>

                    @foreach ($claims as $in=>$claim)
                        <div class="container-fluid bg-white">
                            <div class="row py-3 mb-4 task-border align-items-center">
                                <div class="col-1">
                                    <span>{{ $in+1 }}</span>
                                </div>
                                <div class="col-sm-9 col-8">
                                    <span class="blue-color bold">Name :-</span> <span class="mr-4">{{ $claim->service_type }}</span>
                                </div>
                                <div class="col-1">
                                    <a href="#"
                                    data-toggle="tooltip"
                                    title="edit"
                                    data-html="true"
                                    data-placement="top">
                                    <div class="col-md-7  text-center company-btn pt-2">
                                        <button class="mr-2" data-toggle="modal" data-target="#complain">Complain</button>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
