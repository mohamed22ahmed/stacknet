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

<!--- Company Profile Content --->
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="card">
                <div class="card-data">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('prov.accepted_requests') }}">
                                All Requests From You : <span>4</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="accepted-requests mt-5  pl-2">
                    <div class="mb-5">
                        <i class="fas fa-user mr-3"></i> All  Requests From You To <span>Axa</span>
                    </div>
                    <!--- All Accepted Requests-->
                    <!--- Num 1 --->
                    <div class="container-fluid bg-white">
                        <div class="row py-3 mb-4 task-border align-items-center" style="overflow: auto;">
                            <table class="table text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                                @foreach ($requests as $in=>$request)
                                    <tr>
                                        <td>{{ $in+1 }}</td>
                                        <td>{{ $request->type }}</td>
                                        <td>{{ $request->created_at }}</td>
                                        <td><span class="badge badge-{{ $request->status==1?'success':'danger' }}">{{ $request->status==1?'Success':' Not confirmed yet' }}</span></td>
                                        <td class="company-btn"><a href="{{ route('comp.request_details') }}" class="mr-2">Show Details</a></td>
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
