@extends('company.app')
@section('content')
<!--- Company Ptofile 1- Data Header ---->
<div class="container-fluid mt-5 pt-5">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row pl-4">
                            <div class="col-xm-6">
                                <div class="mr-4">
                                    <img src="{{ asset('storage/company/'.session('img')) }}" alt="" class="rounded-circle" style="width: 50px;">
                                </div>
                            </div>
                            <div class="col-xm-6">
                                <a href="#">
                                    Elrahab <br>
                                    <span class="text-success">Hospital</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7  text-center company-btn pt-2">
                        <a href="{{ route('comp.profile') }}" class="ml-2">Profile</a>
                        <a href="{{ route('comp.security') }}" class="ml-2"> Security</a>
                        <a href="{{ route('comp.responsible_person') }}" class="ml-2"> Responsible Person</a>
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
                <div class="responsible-person-data mt-4 pl-2">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Account Security
                    </div>
                    <form action="/comp/security_update" class="form-group" method="post">
                        @csrf
                        <table class="table table-striped border-0">
                            <thead>
                                <tr>
                                    <td>password</td>
                                    <td><input type="password" name="password" id="pass-profile" class="form-control"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Confirm password</td>
                                    <td><input type="password" name="password_confirm" id="con-pass-profile" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right">
                            <input type="submit" value="save changes" id="save" name="save" class="btn btn-info">
                            <input type="reset" class="btn btn-danger" name="reset" id="reset" value="reset & cancel">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
