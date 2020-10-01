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
                <div class="hospital-data mt-4 pl-2 ">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Make Request To <span>ElEman</span> Hospital
                    </div>
                    <div class="task-border">
                        <form action="/comp/make_medical" class="form-group" method="post">
                            @csrf
                            <table class="table border-0 ">
                                <thead>
                                    <tr>
                                        <td class="pt-4">Type</td>
                                        <td>
                                            <select name="type"  class="form-control selcect-request">
                                                <option value="Select">Select Request Type</option>
                                                <option value="Case-Investigation">Case-Investigation</option>
                                                <option value="coding-item">Item Coding (Code New Service)</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <div class="case-invest">
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

                                    <div class="coding-item">
                                        <tr class="coding-item-appear" style="display: none;">
                                            <td>Item / Services Name</td>
                                            <td><input type="text" name="patient-name" id="patient-name" class="form-control" placeholder="Patient Name"></td>
                                        </tr>
                                        <tr class="coding-item-appear" style="display: none;">
                                            <td>Specialization</td>
                                            <td>
                                                <select name="specialization" id="specialization" class="form-control specialization">
                                                    <option value="select-Specialize">Select Specialization</option>
                                                    <option value="hospital">hospital</option>
                                                    <option value="pharmacy">pharmacy</option>
                                                    <option value="clinic">clinic</option>
                                                    <option value="Lab">Lab</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <div class="Pharmacy">
                                            <tr class="pharmacy-item-appear" style="display: none;">
                                                <td>Item Code</td>
                                                <td>
                                                    <input type="text "placeholder="Item Code" name="item-code" id="item-code" class="form-control">
                                                </td>
                                            </tr>
                                            <tr class="pharmacy-item-appear" style="display: none;">
                                                <td>Type</td>
                                                <td>
                                                    <select name="item-type" id="item-type" class="form-control">
                                                        <option value="local">Local</option>
                                                        <option value="Imported">Imported</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </div>

                                        <div class="hospital">
                                            <tr class="hospital-item-appear" style="display: none;">
                                                <td>Required</td>
                                                <td>
                                                    <select name="item-type" id="item-type" class="form-control">
                                                        <option value="local">Doctor</option>
                                                        <option value="Imported">Specialist</option>
                                                        <option value="Imported">professional</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </div>

                                        <tr class="coding-item-appear" style="display: none;">
                                            <td>Attachment</td>
                                            <td>
                                                <input type="file" class="form-control" name="service-attach" id="service-attach">
                                            </td>
                                        </tr>
                                        <tr class="coding-item-appear" style="display: none;">
                                            <td>Cost</td>
                                            <td><input type="text" name="service-cost" id="service-cost" class="form-control" placeholder="Service Cost"></td>
                                        </tr>
                                        <tr class="coding-item-appear" style="display: none;">
                                            <td>Description</td>
                                            <td><input type="tel" name="service-description" id="service-description" class="form-control" placeholder="Service Description"></td>
                                        </tr>
                                    </div>
                                    <tr>
                                        <td></td>
                                        <td class="text-right">
                                            <input type="reset" name="reset" id="reset" class="btn btn-danger" value="Reset">
                                            <input type="submit" name="done" id="done" class="btn btn-info" value="Done">
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
