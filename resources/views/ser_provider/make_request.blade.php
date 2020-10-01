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
                <div class="hospital-data mt-4 pl-2 ">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Make Request To <span>Axa</span>
                    </div>
                    <div class="task-border">
                        <form action="{{ route('prov.make_request_post') }}" method="POST" class="form-group">
                            @csrf
                            <table class="table border-0 ">
                                <thead>
                                    <tr>
                                        <td class="pt-4">Type</td>
                                        <td>
                                            <select name="type"  class="form-control selcect-request">
                                                <option value="Select">Select Request Type</option>
                                                <option value="Case-Investigation">Claim Form</option>
                                                <option value="Contract">Update Price List</option>
                                                <option value="Deployment">Deployment</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <!--- Appear If You Select update price list  Request -->
                                    <div class="contract-request">
                                        <tr class="contract-appear" style="display: none;">
                                            <td>Attachment</td>
                                            <td><input type="file" name="attach" id="attach" value="" class="form-control"></td>
                                        </tr>
                                        <tr class="contract-appear" style="display: none;">
                                            <td>Description</td>
                                            <td><input type="tel" name="contract-description" id="contract-description" class="form-control" placeholder="Description and All Information About This Service Provider"></td>
                                        </tr>
                                    </div>

                                    <!--- This Appear If You Select Deployment --->
                                    <div class="deployment-request">
                                        <tr class="deploy-appear" style="display: none;">
                                            <td>Governorate</td>
                                            <td>
                                                <select name="governorate" id="governorate" class="form-control">
                                                    <option value="Cairo">Cairo</option>
                                                    <option value="Alexandria">Alexandria</option>
                                                    <option value="Aswan">Aswan</option>
                                                    <option value="Asyut">Asyut</option>
                                                    <option value="Beheira">Beheira</option>
                                                    <option value="Beni_Suef">Beni Suef</option>
                                                    <option value="Dakahlia">Dakahlia</option>
                                                    <option value="Damietta">Damietta</option>
                                                    <option value="Faiyum">Faiyum</option>
                                                    <option value="Gharbia">Gharbia</option>
                                                    <option value="Giza">Giza</option>
                                                    <option value="Ismailia">Ismailia</option>
                                                    <option value="Kafr_El_Sheikh">Kafr El Sheikh</option>
                                                    <option value="Luxor">Luxor</option>
                                                    <option value="Matruh">Matruh</option>
                                                    <option value="Minya">Minya</option>
                                                    <option value="Monufia">Monufia</option>
                                                    <option value="New-Valley">New Valley</option>
                                                    <option value="North-Sinai">North Sinai</option>
                                                    <option value="Port-Said">Port Said</option>
                                                    <option value="Qalyubia">Qalyubia</option>
                                                    <option value="Qena">Qena</option>
                                                    <option value="Red-Sea">Red-Sea</option>
                                                    <option value="Sharqia">Sharqia</option>
                                                    <option value="Sohag">Sohag</option>
                                                    <option value="South-Sinai">South Sinai</option>
                                                    <option value="Suez">Suez</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="deploy-appear" style="display: none;">
                                            <td>Specialization</td>
                                            <td>
                                                <select name="specialization-contract" id="specialization-contract" class="form-control special-select">
                                                    <option value="Hospital-special">Hospital</option>
                                                    <option value="pharmacy-special">Pharmacy</option>
                                                    <option value="clinic-special">Clinic</option>
                                                    <option value="Lab">Lab</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--- Appear If Only Select Other -->
                                        <tr class="other-appear" style="display: none;">
                                            <td>Specialization</td>
                                            <td><input type="text" name="others" id="others" class="form-control" placeholder="write Specialization"></td>
                                        </tr>
                                        <tr class="deploy-appear" style="display: none;">
                                            <td>Service Provider Name</td>
                                            <td><input type="text" name="service-provider-name" id="service-provider-name" class="form-control" placeholder="Service Provider Name"></td>
                                        </tr>
                                        <tr class="deploy-appear" style="display: none;">
                                            <td>Service Provider Name</td>
                                            <td><input type="text" name="service-provider-name" id="service-provider-name" class="form-control" placeholder="Service Provider Name"></td>
                                        </tr>
                                        <tr class="deploy-appear" style="display: none;">
                                            <td>Employees Count</td>
                                            <td><input type="text" name="employees-count" id="employees-count" class="form-control" placeholder="Employees Count"></td>
                                        </tr>
                                        <tr class="deploy-appear" style="display: none;">
                                            <td>Description</td>
                                            <td>
                                                <textarea  name="desc-employ" id="desc-employ" class="form-control" placeholder="All Info About Your Employees Like:- name (names:- ahmed,mohamed,mahmoud)" style="height: 80px;"></textarea>
                                            </td>
                                        </tr>
                                    </div>

                                    <!--- This Appear If You Select Presentation --->
                                    <div class="presentation-request">
                                        <tr class="presentation-appear" style="display: none;">
                                            <td> Client Name</td>
                                            <td><input type="text" name="client-name" id="client-name" class="form-control" placeholder="Client Name"></td>
                                        </tr>
                                        <tr class="presentation-appear" style="display: none;">
                                            <td>Contact Person</td>
                                            <td><input type="text" name="contact-person" id="contact-person" class="form-control" placeholder="Contact Person"></td>
                                        </tr>
                                        <tr class="presentation-appear" style="display: none;">
                                            <td>Telephone Number</td>
                                            <td><input type="tel" name="tel-person" id="tel-person" class="form-control" placeholder="Telephone Number"></td>
                                        </tr>
                                        <tr class="presentation-appear" style="display: none;">
                                            <td>Detailed Address</td>
                                            <td><input type="text" name="address-person" id="address-person" class="form-control" placeholder="Address With Details"></td>
                                        </tr>
                                        <tr class="presentation-appear" style="display: none;">
                                            <td>Employee Count</td>
                                            <td><input type="text" name="employ-count" id="employ-count" class="form-control" placeholder="Address With Details"></td>
                                        </tr>
                                        <tr class="presentation-appear" style="display: none;">
                                            <td>Date Of Visit</td>
                                            <td><input type="date" name=visit-date id="visit-date" class="form-control" placeholder="Date Of Visit"></td>
                                        </tr>
                                        <tr class="presentation-appear" style="display: none;">
                                            <td>Presentation Attachment</td>
                                            <td><input type="file" name="presentation-attatch" id="presentation-attatch" class="form-control" placeholder="Presentation Attatchment"></td>
                                        </tr>
                                        <tr class="presentation-appear" style="display: none;">
                                            <td>Description</td>
                                            <td>
                                                <textarea  name="desc-employ" id="desc-employ" class="form-control" placeholder="All Info About Your Employees Like:- name (names:- ahmed,mohamed,mahmoud)" style="height: 80px;"></textarea>
                                            </td>
                                        </tr>
                                    </div>
                                    <tr>
                                        <td></td>

                                        <td class="text-right">
                                            <input type="reset" class="btn btn-danger" name="reset" id="reset" value="Rest">
                                            <input type="submit" class="btn btn-info" name="done" id="done" value="Done">
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
