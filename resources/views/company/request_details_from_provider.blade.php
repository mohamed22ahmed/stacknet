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
                <div class="card-data">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('comp.all_incoming_requests') }}">
                                All Requests To You : <span>4</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hospital-data mt-4 pl-2 ">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Request Info From <span>{{ session('name') }}</span> Company
                    </div>
                    <div class="task-border">
                        <table class="table border-0 ">
                            <thead>
                              <tr>
                                <th>Type</th>
                                <td>Deployment</td>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>Employee Count</th>
                                <td>3</td>
                              </tr>
                              <tr>
                                <th>Specialization</th>
                                <td>How To Deal With Contracts</td>
                              </tr>
                              <tr>
                                <th>Name Of All Trainees</th>
                                <td>Ahmed Mohamed , Mohammed Kamal , Ahmed Hassan</td>
                              </tr>
                              <tr>
                                <th>Description</th>
                                <td>We Want To Deploy These Employee For how to deal with contracts</td>
                              </tr>
                              <tr>
                                <th>Attachment For These Emplyee Data (pdf Extention)</th>
                                <td class="company-btn">
                                    <a href="img/Abdelrahim-Cv.pdf" download="company.pdf">
                                        Download
                                    </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>

                <!--- Replied From Hospital --->
                <div class="hospital-data mt-4 pl-2 ">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Replied Message From You
                    </div>
                    <div class="task-border">
                        <table class="table border-0 ">
                            <tbody>
                                <tr>
                                    <th>Message</th>
                                    <td>
                                        <form action="" class="form-group">
                                            <textarea name="reply" id="reply" class="form-control" style="height: 100px;" placeholder="Your Message"></textarea>
                                            <input type="submit" name="send-reply" id="send-reply" value="Send" class="company-input text-right">
                                        </form>
                                    </td>
                                    <!--- This Message Appear When YOu Replyed (text appear :- Message You Write as company)-->
                                    <td style="display: none;">
                                        All Is Done
                                    </td>
                                </tr>
                                <tr>
                                    <th>Attachmet If Exists</th>
                                    <td><input type="file" name="file-attach" id="file-attach" class="form-control"></td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
                </div>


                <!--- Addetional Actions From You --->
                <div class="hospital-data mt-4 pl-2 ">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Additional Actions</span>
                    </div>
                    <div class="task-border">
                        <table class="table border-0 ">
                            <tbody>
                              <tr>
                                <td>Complain To Stacknet</td>
                                <td class="company-btn" data-toggle="modal" data-target="#complain"><span class="span">Send Complain</span></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
