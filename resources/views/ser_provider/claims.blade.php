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
    <form action="/prov/upload_claims" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="card">
                    <div class="Patient-data mt-4 pl-2">
                        <div class="mb-4">
                            <h5><i class="fas fa-user mr-3"></i> <span style="font-weight:800">Patient Info</span></h5>
                        </div>
                        <table class="table table-striped border-0">
                            <thead>
                            <tr>
                                <td>name</td>
                                <td><input type="text" name="patient_name" id="patient-name"placeholder="patient name" class="form-control"></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>ID Number</td>
                                <td><input type="text" name="patient_id" id="patient-id"placeholder="ID number" value="" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Upload ID</td>
                                <td><input type="file" name="upload_id" id="file-id" value="" class="form-control"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr style="font-weight: bold;">
                    <div class="Patient-data mt-3 pl-2">
                        <div class="mb-4">
                            <h5><i class="fas fa-user mr-3"></i> <span style="font-weight:800">Services Info</span></h5>
                        </div>
                        <table class="table table-striped border-0">
                            <tbody>
                                <tr>
                                    <td>Service Date</td>
                                    <td><input type="date" name="service_date" id="service-date"placeholder="Service Date" class="form-control"></td>
                                </tr>
                            <tr>
                                <td>Service Type</td>
                                <td>
                                    <select name="service_type" id="service_type" class="form-control">
                                        <option value="Emergency">Emergency</option>
                                        <option value="In_Patient">In Patient</option>
                                        <option value="Out_Patient">Out Patient</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Service Descrption</td>
                                <td>
                                    <textarea name="service_description" id="service_description" class="form-control" style="height: 100px;"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="pt-3">Service Attachment</td>
                                <td><input type="file" name="service_attach" id="service-attachment" value="" class="form-control"></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="text-right">
                            <input type="submit" name="save" value="save" id="save" class="btn btn-success ml-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
