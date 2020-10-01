@extends('ser_provider.app')
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
                                    <img src="{{ asset('storage/company/'.session('company_photo')) }}" alt="" class="rounded-circle" style="width: 50px;">
                                </div>
                            </div>
                            <div class="col-xm-6">
                                <a href="{{ route('prov.company_profile') }}">
                                    AXA <br>
                                    <span class="text-success">Company</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10  text-center company-btn pt-3 d-flex justify-content-sm-center justify-content-md-end" style="flex-wrap: wrap;">
                        <a href="{{ route('prov.claims') }}" class="mr-2">Upload Claims</a>
                        <a href="#" class="mr-2">Message</a>
                        <a href="{{ route('prov.all_incoming_requests') }}" class="mr-2">All InComming Requests <span class="badge bg-white ml-3 mt-0 text-danger" style="font-size: 10px;"> <span>{{ $request_num ?? '0' }}</span> New </span></a>
                        <a href="{{ route('prov.accepted_requests') }}" class="mr-2">Your Requests</a>
                        <a href="{{ route('prov.make_request') }}"  class="mr-2">Make Request</a>
                        <a href="{{ route('prov.company_profile') }}" class="mr-2">Profile</a>
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
                        <div class="col-md-6 text-center">
                            <a href="{{ route('prov.accepted_requests') }}">
                                New Requests: <span>4</span>
                            </a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="{{ route('prov.all_incoming_requests') }}">
                                All Incomming Requests: <span>{{ $request_num ?? '0' }}</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="new-requests mt-5  pl-2">
                    <div class="mb-5">
                        <i class="fas fa-user mr-3"></i> All Incomming Requests From <span>Axa</span> Company
                    </div>


                    @foreach ($requests as $in=>$request)
                        <div class="container-fluid bg-white">
                            <div class="row py-3 mb-4 task-border align-items-center">
                                <div class="col-1">
                                    <span>{{ $in+1 }}</span>
                                </div>
                                <div class="col-sm-6 col-5">
                                    <span class="blue-color bold">Name :-</span> <span class="mr-4">{{ $request->type }}</span>
                                </div>
                                <div class="col-5 ml-auto">
                                    <div class="col-md-7 ml-auto  text-center company-btn pt-2">
                                        <a class="mr-2 mt-2 btn" href="/prov/accept_request/{{ $request->id }}">Accept</a>
                                        <a class="mr-2 mt-2 btn" href="/prov/refuse_request/{{ $request->id }}">Refuse</a>
                                        <a class="mr- mt-2 btn" href="{{ route('prov.request_details_from_company') }}">Details</a>
                                    </div>
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
