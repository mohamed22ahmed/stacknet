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
                                    <img src="{{ asset('company/img/doc1.jpg') }}" alt="" class="rounded-circle" style="width: 50px;">
                                </div>
                            </div>
                            <div class="col-xm-6">
                                <a href="#">
                                    SACKNET <br>
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

<!--- Company Profile Content --->
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="card">
                <div class="card-data">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('comp.requests_to_stacknet') }}">
                                All Requests From You To Stacknet : <span>4</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="accepted-requests mt-5  pl-2">
                    <div class="mb-5">
                        <i class="fas fa-user mr-3"></i> All  Requests From You To Stacknet
                    </div>
                    <!--- All Accepted Requests-->
                    <!--- Num 1 --->
                    <div class="container-fluid bg-white">
                        @php
                            $i=1;
                        @endphp
                        <div class="row py-3 mb-4 task-border align-items-center" style="overflow: auto;">
                            <table class="table text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                                @foreach($requests as $request)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $request->type }}</td>
                                        <td>{{ $request->created_at }}</td>
                                        <td><span class="badge badge-{{ $request->status==1?'success':'danger' }}">{{ $request->status==1?'Success':'No Reply Yet' }}</span></td>
                                        <td class="company-btn"><a href="{{ route('comp.request_details_to_stacknet') }}" class="mr-2">Show Details</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
