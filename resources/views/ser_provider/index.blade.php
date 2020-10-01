@extends('ser_provider.app')
@section('button')
    <button data-toggle="modal" data-target="#new-contract" title="New Contract" data-html="true" data-placement="top" class="btn btn-danger btn-sm rounded-circle position-fixed" style="bottom: 100px;right: 50px;z-index: 9999; width: 50px; height: 50px;"> + </button>
@endsection
@section('content')
<div class="container-fluid mt-5 pt-5">
    <div class="row mb-5">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
                <div class="col-xl-8 col-12 mb-4 mb-xl-0">
                    <div style="height:400px;overflow: auto;" class="mb-3 mt-4">
                        <table class="table table-striped bg-light text-center">
                            <thead>
                                <tr class="text-muted">
                                    <th>#</th>
                                    <th>Company</th>
                                    <th>Contract Date</th>
                                    <th>Responsible Person</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Axa</td>
                                    <td>15-2-2020</td>
                                    <td>Ahmed Mohamed</td>
                                    <td><span class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="You Deactivate this because it not doing his right job" style="cursor:help;">Un Active</span></td>
                                    <td style="display: none;"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#unActive" >Deactivate Company</button></td>
                                    <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Active">activate Company</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alico</td>
                                    <td>15-2-2020</td>
                                    <td>Mohamed Ahmed</td>
                                    <td><span class="btn btn-success btn-sm" style="cursor: none;">Active</span></td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#unActive">Deactivate Company</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Egycare</td>
                                    <td>15-2-2020</td>
                                    <td>Ahmed Mohamed</td>
                                    <td>
                                        <span class="btn btn-danger btn-sm" data-toggle="tooltip" title="You Deactivate this because it not doing his right job" style="cursor:help;">Un Active</span>
                                    </td>
                                    <td style="display: none;"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#unActive" >Deactivate Company</button></td>
                                    <td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Active">activate Company</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Globmid</td>
                                    <td>15-2-2020</td>
                                    <td>Ahmed Mohamed</td>
                                    <td><span class="btn btn-success btn-sm" style="cursor: none;">Active</span></td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#unActive">Deactivate Company</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Axa</td>
                                    <td>15-2-2020</td>
                                    <td>Ahmed Mohamed</td>
                                    <td><span class="btn btn-success btn-sm" style="cursor: none;">Active</span></td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#unActive">Deactivate Company</button></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Axa</td>
                                    <td>15-2-2020</td>
                                    <td>Ahmed Mohamed</td>
                                    <td><span class="btn btn-success btn-sm" style="cursor: none;">Active</span></td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#unActive">Deactivate Company</button></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <!---- Pagination ---->
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" class="page-link py-2 px-3">
                                    <span>&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link py-2 px-3">
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link py-2 px-3">
                                    <span>2</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link py-2 px-3">
                                    <span>3</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link py-2 px-3">
                                    <span>&raquo;</span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <div class="col-xl-4 col-12" style="overflow: scroll;">

                    <div class="card p-2 mb-3" style="height: 400px;overflow: auto;">
                        <form action="" class="form-group" class="w-100 mb-5">
                            <input type="search" name="company-search" id="company-search" class="form-control" placeholder="search for company">
                        </form>

                        <a href="{{ route('prov.company_profile') }}">
                            <div class="card-content pb-3 pt-3">
                                <div class="d-flex" style="flex-wrap: wrap;">
                                    <div style="width:20%" class="mr-2">
                                        <img src="{{ asset('ser_provider/img/doc1.jpg') }}" alt="" class="rounded-circle" style="width: 50px;">
                                    </div>
                                    <div style="width:70%">
                                        <p>
                                            Axa <br>
                                            <span class="text-success">Insurane Company</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('prov.company_profile') }}">
                            <div class="card-content pb-3 pt-3">
                                <div class="d-flex" style="flex-wrap: wrap;">
                                    <div style="width:20%" class="mr-2">
                                        <img src="{{ asset('ser_provider/img/doc1.jpg') }}" alt="" class="rounded-circle" style="width: 50px;">
                                    </div>
                                    <div style="width:70%">
                                        <p>
                                            Globmid <br>
                                            <span class="text-success">Insurane Company</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('prov.company_profile') }}">
                            <div class="card-content pb-3 pt-3">
                                <div class="d-flex" style="flex-wrap: wrap;">
                                    <div style="width:20%" class="mr-2">
                                        <img src="{{ asset('ser_provider/img/doc1.jpg') }}" alt="" class="rounded-circle" style="width: 50px;">
                                    </div>
                                    <div style="width:70%">
                                        <p>
                                            Alico <br>
                                            <span class="text-success">Insurane Company</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('prov.company_profile') }}">
                            <div class="card-content pb-3 pt-3">
                                <div class="d-flex" style="flex-wrap: wrap;">
                                    <div style="width:20%" class="mr-2">
                                        <img src="{{ asset('ser_provider/img/doc1.jpg') }}" alt="" class="rounded-circle" style="width: 50px;">
                                    </div>
                                    <div style="width:70%">
                                        <p>
                                            EgyCare <br>
                                            <span class="text-success">Insurane Company</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('prov.company_profile') }}">
                            <div class="card-content pb-3 pt-3">
                                <div class="d-flex" style="flex-wrap: wrap;">
                                    <div style="width:20%" class="mr-2">
                                        <img src="{{ asset('ser_provider/img/doc1.jpg') }}" alt="" class="rounded-circle" style="width: 50px;">
                                    </div>
                                    <div style="width:70%">
                                        <p>
                                            Axa <br>
                                            <span class="text-success">Insurane Company</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('prov.company_profile') }}">
                            <div class="card-content pb-3 pt-3">
                                <div class="d-flex" style="flex-wrap: wrap;">
                                    <div style="width:20%" class="mr-2">
                                        <img src="{{ asset('ser_provider/img/doc1.jpg') }}" alt="" class="rounded-circle" style="width: 50px;">
                                    </div>
                                    <div style="width:70%">
                                        <p>
                                            Axa <br>
                                            <span class="text-success">Insurane Company</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="sign-out">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Want To Leave ?</div>
                <button type="button" class="close" data-dismiss="modal">&times</button>
            </div>
            <div class="modal-body">
                Press logout to leave
            </div>
            <div class="modal-footer">
                <button class="btn btn-info btn-sm" data-dismiss="modal">Stay here</button>
                <button class="btn btn-danger btn-sm" data-dismiss="modal">Logout</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="unActive">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Are You Sure ?</div>
                <button type="button" class="close" data-dismiss="modal">&times</button>
            </div>
            <div class="modal-body">
                Write The Reason Of this
                <form action="" class="form-group mt-3">
                    <textarea name="unactive" id="unactive" class="form-control" placeholder="description" style="height: 100px;"></textarea>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info btn-sm" data-dismiss="modal">Still Active</button>
                <button class="btn btn-danger btn-sm" data-dismiss="modal">Un Active</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Active">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Are You Sure ?</div>
                <button type="button" class="close" data-dismiss="modal">&times</button>
            </div>
            <div class="modal-body">
                Reason Is Sloved ??
            </div>
            <div class="modal-footer">
                <button class="btn btn-info btn-sm" data-dismiss="modal">Still DeActive</button>
                <button class="btn btn-danger btn-sm" data-dismiss="modal">Active</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="new-contract">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Make New Contract </div>
                <button type="button" class="close" data-dismiss="modal">&times</button>
            </div>
            <div class="modal-body">
                <form action="" class="form-group mt-3">
                    <select name="new-company" id="new-company" class="form-control">
                        <option value="Axa">Axa</option>
                        <option value="Globmid">Globmid</option>
                        <option value="Alico">Alico</option>
                        <option value="Egycare">Egycare</option>
                        <option value="Axa">Axa</option>
                    </select>
                    <div class="text-center mt-3">
                        <input type="submit" value="Make Contract" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
