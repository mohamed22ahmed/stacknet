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
                                    Stacknet <br>
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
                            <a href="{{ route('comp.requests_from_you') }}">
                                All Request From You: <span>3</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hospital-data mt-4 pl-2 ">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Request Info From You
                    </div>
                    <div class="task-border">
                        <table class="table border-0 ">
                            <thead>
                              <tr>
                                <th>Type</th>
                                <td>Case Investigation</td>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Hospital Name</th>
                                    <td>ElEman Hospital</td>
                                </tr>
                                <tr>
                                    <th>Governorate</th>
                                    <td>Cairo</td>
                                </tr>
                                <tr>
                                    <th>Specialization</th>
                                    <td>Hospital</td>
                                </tr>
                                <tr>
                                    <th>Patient Name</th>
                                    <td>Mohamed Ahmed Mahmoud</td>
                                </tr>
                                <tr>
                                    <th>Patient Name</th>
                                    <td>Mohamed Ahmed Mahmoud</td>
                                </tr>
                                <tr>
                                    <td>ID Number</td>
                                    <td>230124521289</td>
                                </tr>
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>01126257042</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>We Want Service Attachment For This Patient</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>ElEman Hospital Replied To You <span class="badge badge-success ml-3">Success</span> </td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
                </div>

                <!--- Replied From Hospital --->
                <div class="hospital-data mt-4 pl-2 ">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Replied Message Info From <span>Stacknet</span>
                    </div>
                    <div class="task-border">
                        <table class="table border-0 ">
                            <thead>
                              <tr>
                                <th>Type</th>
                                <td>Case Investigation</td>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>ElEman Hospital</td>
                                </tr>
                                <tr>
                                    <th>Patient Name</th>
                                    <td>Mohamed Ahmed Mahmoud</td>
                                </tr>
                                <tr>
                                    <td>ID Number</td>
                                    <td>230124521289</td>
                                </tr>
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>01126257042</td>
                                </tr>
                                <tr>
                                    <td>Attachment</td>
                                    <td class="company-btn">
                                        <a href="img/Abdelrahim-Cv.pdf" download="company.pdf">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>This Patient Take This Service From Us</td>
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
                                <td>Replied</td>
                                <td class="company-btn msg-btn"><span class="span">Send Message</span></td>
                              </tr>
                              <tr style="display: none;" class="msg">
                                  <td>Write Message</td>
                                  <td>
                                      <form action="" class="form-group">
                                        <textarea name="replied-msg" id="replied-msg" class="form-control" placeholder="Write Your Message" style="height: 100px;"></textarea>
                                        <input type="submit" name="send" id="send" class="company-input mt-2" value="Send">
                                      </form>
                                  </td>
                              </tr>
                              <tr>
                                <td>Your Satisfy</td>
                                <td class="company-btn evaluaion-btn"><span class="span">Add Evaluation</span></td>
                              </tr>
                              <tr class="evaluaion-msg" style="display: none;">
                                  <td>
                                      your Evaluation
                                  </td>
                                  <td>
                                    <form action="" class="form-group">
                                        <select name="satisfy" id="satisfy" class="form-control">
                                            <option value="Excellent">Excellent</option>
                                            <option value="very-good">Very Good</option>
                                            <option value="good">Good</option>
                                            <option value="bad">bad</option>
                                            <input type="submit" name="send-satisfy" id="sendsatisfy" class="company-input mt-2" value="Send">
                                        </select>
                                    </form>
                                  </td>
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
