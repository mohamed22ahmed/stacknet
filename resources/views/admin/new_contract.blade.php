@extends('admin.index')
@section('content')
<div class="container-fluid bg-white">
    <div class="row py-3 mb-4 task-border align-items-center" style="overflow: auto;">
        <table class="table text-center">
            <tr>
                <th>#</th>
                <th>From</th>
                <th>To</th>
                <th>Type</th>
                <th>Action</th>
            </tr>

            <tr class="padding-table">
                <td class="td">1</td>
                <td class="td">Morgan Hospital</td>
                <td class="td">Axa</td>
                <td class="td">
                    Contract
                </td>
                <td>
                    <a href="#" class="mr-2 btn btn-info btn-sm">Send Direct</a>
                </td>
            </tr>

            <tr class="padding-table">
                <td class="td">2</td>
                <td class="td">Morgan Hospital</td>
                <td class="td">Axa</td>
                <td class="td">
                    Contract
                </td>
                <td>
                    <a href="#" class="mr-2 btn btn-info btn-sm">Send Direct</a>
                </td>
            </tr>

            <tr class="padding-table">
                <td class="td">3</td>
                <td class="td">Morgan Hospital</td>
                <td class="td">Axa</td>
                <td class="td">
                    Contract
                </td>
                <td>
                    <a href="#" class="mr-2 btn btn-info btn-sm">Send Direct</a>
                </td>
            </tr>

        </table>
    </div>
</div>
@endsection
