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
                <div class="hospital-data mt-4 pl-2 ">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Make Request To STACKNET
                    </div>
                    <div class="task-border">
                        <form action="{{ route('comp.make_stacknet_request_post') }}" method="post" class="form-group">
                            @csrf
                            <table class="table border-0 ">
                                <thead>
                                    <tr>
                                        <td class="pt-4">Type</td>
                                        <td>
                                            <select name="type"  class="form-control selcect-request">
                                                <option value="Select">Select Request Type</option>
                                                <option value="Case-Investigation">Case-Investigation</option>
                                                <option value="Directly-Support">Directly Customer Support </option>
                                                <option value="Contract">Contracting</option>
                                                <option value="Deployment">Deployment</option>
                                                <option value="Presentation">Presentation</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <!-- Apper If you selecy case investigation or directly customer support-->
                                    <div class="case-invest directly-customer-support">
                                        <tr class="case-investigation-appear" style="display: none;">
                                            <td>Service Provider Name</td>
                                            <td><input type="text" name="provider-name" id="provider-name" class="form-control" placeholder="Service Provider Name"></td>
                                        </tr>
                                        <tr class="case-investigation-appear" style="display: none;">
                                            <td>Service Provider Governorate</td>
                                            <td><input type="text" name="provider-governorate" id="provider-governorate" class="form-control" placeholder="Service Provider Governorate"></td>
                                        </tr>
                                        <tr class="case-investigation-appear" style="display: none;">
                                            <td>Service Provider Area</td>
                                            <td><input type="text" name="provider-area" id="provider-area" class="form-control" placeholder="Service Provider Area ( Full Address )"></td>
                                        </tr>
                                        <tr class="case-investigation-appear" style="display: none;">
                                            <td>Patient Name</td>
                                            <td><input type="text" name="patient-name" id="patient-name" class="form-control" placeholder="Patient Name"></td>
                                        </tr>
                                        <tr class="case-investigation-appear" style="display: none;">
                                            <td>ID Number</td>
                                            <td><input type="text" name="patient-name" id="patient-name" class="form-control" placeholder="Patient ID Number"></td>
                                        </tr>
                                        <tr class="case-investigation-appear" style="display: none;">
                                            <td>Mobile Number</td>
                                            <td><input type="tel" name="patient-number" id="patient-number" class="form-control" placeholder="Patient Mobile Number"></td>
                                        </tr>
                                        <tr class="case-investigation-appear" style="display: none;">
                                            <td>Description</td>
                                            <td><input type="tel" name="patient-description" id="patient-description" class="form-control" placeholder="Description"></td>
                                        </tr>

                                    </div>
                                    <!--- Appear If You Select Contracting Request-->
                                    <div class="contract-request">
                                        <tr class="contract-appear" style="display: none;">
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
                                        <tr class="contract-appear" style="display: none;">
                                            <td>Area</td>
                                            <td><input type="text" name="aria" id="aria" value="" class="form-control" placeholder="write area"></td>
                                        </tr>
                                        <tr class="contract-appear" style="display: none;">
                                            <td>Address With Details</td>
                                            <td><input type="text" name="address" id="address" value="" class="form-control" placeholder="Ex:- 75 Eltahrir St - Cairo - Egypt "></td>
                                        </tr>
                                        <tr class="contract-appear" style="display: none;">
                                            <td>Specialization</td>
                                            <td>
                                                <select name="specialization-contract" id="specialization-contract" class="form-control special-select">
                                                    <option value="Hospital-special">Hospital</option>
                                                    <option value="pharmacy-special">Pharmacy</option>
                                                    <option value="clinic-special">Clinic</option>
                                                    <option value="Lab">Lab</option>
                                                    <option value="Others">Other</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--- Appear If Only Select Other -->
                                        <tr class="other-appears" style="display: none;">
                                            <td>Specialization</td>
                                            <td><input type="text" name="other" id="other" class="form-control" placeholder="write Specialization"></td>
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
