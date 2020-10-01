@extends('company.app')
@section('content')
<!--- Company Ptofile 1- Data Header ---->
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
                    <div class="col-md-8 ml-auto  text-right company-btn pt-2">
                        <a href="specific-company-Requests.html" class="mr-2">All InComming Requests <span class="badge bg-white ml-3 mt-0 text-danger" style="font-size: 10px;"> 2 New </span> </a>
                        <a href="index.html" class="mr-2">Profile</a>
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
                        <div class="col-md-4">
                            <h5 class="pt-2" style="color: #3f51b5;">Lets Start ---></p>
                        </div>
                        <div class="col-md-8 text-right  pt-2">
                            <a href="{{ route('comp.direct_stacknet') }}" class="mr-2 btn-hover "> Direct Stacknet </a>
                            <a href="{{ route('comp.medical_network') }}" class="mr-2  btn-hover-active">Medical Network Managment</a>
                        </div>
                    </div>
                </div>
                <div class="direct-stack-data mt-4 pl-2">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Search For You Want.
                    </div>
                    <form action="allProviders.html" class="form-group">
                        <table class="table table-striped border-0">
                            <thead>
                              <tr>
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
                            </thead>
                            <tbody>
                              <tr>
                                <td>Area</td>
                                <td><input type="text" name="aria" id="aria" value="" class="form-control" placeholder="write area"></td>
                              </tr>
                              <tr>
                                <td>Specialization</td>
                                <td>
                                    <select name="governorate" id="governorate" class="form-control">
                                        <option value="Cairo">Hospital</option>
                                        <option value="Alexandria">Clinic</option>
                                        <option value="Aswan">Pharmacy</option>
                                        <option value="Lab">Lab</option>
                                        <option value="other">Other</option>
                                    </select>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                        <div class="text-right">
                            <input type="submit" value="Search" id="save" name="save" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
