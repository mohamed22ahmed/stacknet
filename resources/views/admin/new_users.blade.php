@extends('admin.index')
@section('content')
<div class="container-fluid bg-white">
    <div class="row py-3 mb-4 task-border align-items-center" style="overflow: auto;">
        @php
            $i=1;
        @endphp
        <table class="table text-center">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Specialization</th>
                <th>Date</th>
                <th>mobile</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            @foreach($providers as $provider)
                <tr class="padding-table">
                    <td class="td">{{ $i++ }}</td>
                    <td class="td">{{ $provider->name }}</td>
                    <td class="td">Hospital</td>
                    <td class="td">{{ $provider->created_at }}</td>
                    <td class="td">Cairo</td>
                    <td class="td">{{ $provider->phone }}</td>
                    <td class="">
                        <a href="{{ route('admin.accept_provider',$provider->id) }}" class="mr-2 btn btn-info btn-sm">Accept</a>
                        <a href="{{ route('admin.accept_provider',$provider->id) }}" class="mr-2 btn btn-danger btn-sm">Refuse</a>
                    </td>
                </tr>
            @endforeach
            @foreach($companies as $company)
                <tr class="padding-table">
                    <td class="td">{{ $i++ }}</td>
                    <td class="td">{{ $company->name }}</td>
                    <td class="td">Medical Insurence</td>
                    <td class="td">{{ $company->created_at }}</td>
                    <td class="td">Cairo</td>
                    <td class="td">{{ $company->phone }}</td>
                    <td class="">
                        <a href="{{ route('admin.accept_company',$company->id) }}" class="mr-2 btn btn-info btn-sm">Accept</a>
                        <a href="{{ route('admin.accept_company',$company->id) }}" class="mr-2 btn btn-danger btn-sm">Refuse</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
