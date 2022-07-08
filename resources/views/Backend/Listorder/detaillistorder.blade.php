@extends('layouts.backend-dashboard.app')

@section('content')
    <div class="container">
        <div class="container">
        <table class="table table-bordered">
        <tr>
            <th width="100px">Code Order</th>
            <th width="30px">:</th>
            <th>{{ $listorder->code_order }}</th>
        </tr>
        <tr>
            <th width="100px">Package Id</th>
            <th width="30px">:</th>
            <th>{{ $listorder->package_id }}</th>
        </tr>
        <tr>
            <th width="100px">Total Price</th>
            <th width="30px">:</th>
            <th>{{ $listorder->total_price }}</th>
        </tr>
        <tr>
            <th width="100px">User Name</th>
            <th width="30px">:</th>
            <th>{{ $listorder->user_name }}</th>
        </tr>
        <tr>
            <th width="100px">User Phone</th>
            <th width="30px">:</th>
            <th>{{ $listorder->user_phone }}</th>
        </tr>
        <tr>
            <th width="100px">User Address</th>
            <th width="30px">:</th>
            <th>{{ $listorder->user_address }}</th>
        </tr>
        <tr>
            <th><a href="{{url('/backend/listorder/index')}}" class="btn btn-succes tbn-sm">Back</a></th>
        </tr>
    </table>
        </div>
    </div>
@endsection