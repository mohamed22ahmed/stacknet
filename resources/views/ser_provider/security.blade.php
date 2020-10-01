@extends('ser_provider.app')
@section('content')
<div class="container-fluid mt-5 pt-5">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="card">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row pl-4">
                            <div class="col-xm-6">
                                <div class="mr-4">
                                    <img src="{{ asset('ser_provider/img/doc1.jpg') }}" alt="" class="rounded-circle" style="width: 50px;">
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
                        <a href="{{ route('prov.profile') }}" class="ml-2">Profile</a>
                        <a href="{{ route('prov.security') }}" class="ml-2"> Security</a>
                        <a href="{{ route('prov.responsible_person') }}" class="ml-2"> Responsible Person</a>
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
                <div class="responsible-person-data mt-4 pl-2">
                    <div class="mb-4">
                        <i class="fas fa-user mr-3"></i> Account Security
                    </div>
                    <form action="" class="form-group">
                        <table class="table table-striped border-0">
                            <thead>
                              <tr>
                                <td>password</td>
                                <td><input type="text" name="pass-profile" id="pass-profile" value="123456789" class="form-control"></td>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Confirm password</td>
                                    <td><input type="text" name="con-pass-profile" id="con-pass-profile" value="123456789" class="form-control"></td>
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
