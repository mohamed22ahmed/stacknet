@extends('admin.index')
@section('content')
<div class="container-fluid bg-white">
    <div class="row py-3 mb-4 task-border align-items-center" style="overflow: auto;">
        <table class="table text-center">
            <tr>
                <th>#</th>
                <th>From</th>
                <th>Type</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
            @foreach ($requests as $index=>$request)
                <tr class="padding-table">
                    <td class="td">{{ $index+1 }}</td>
                    <td class="td">AXA</td>
                    {{--  <td class="td">{{ $request->company_id }}</td>  --}}
                    <td class="td">{{ $request->type }}</td>
                    <td class="">
                        <a href="#" class="mr-2 btn btn-info btn-sm">Show Details</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.agree_direct_request',$request->id) }}" class="mr-2 btn btn-info btn-sm">Send Direct</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
