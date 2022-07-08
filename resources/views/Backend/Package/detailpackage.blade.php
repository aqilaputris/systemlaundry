@extends('layouts.backend-dashboard.app')

@section('content')
    <table class="table">
        <tr>
            <th width="100px">Type</th>
            <th width="30px">:</th>
            <th>{{ $package->type }}</th>
        </tr>
        <tr>
            <th width="100px">Name</th>
            <th width="30px">:</th>
            <th>{{ $package->name }}</th>
        </tr>
        <tr>
            <th width="100px">Price</th>
            <th width="30px">:</th>
            <th>{{ $package->price }}</th>
        </tr>
        <tr>
            <th><a href="{{url('/backend/package/index')}}" class="btn btn-succes tbn-sm">Back</a></th>
        </tr>
    </table>
@endsection