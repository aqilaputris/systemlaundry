@extends('layouts.backend-dashboard.app')

@section('content')
    <table class="table">
        <tr>
            <th width="100px">Name</th>
            <th width="30px">:</th>
            <th>{{ $user->name }}</th>
        </tr>
        <tr>
            <th width="100px">Email</th>
            <th width="30px">:</th>
            <th>{{ $user->email }}</th>
        </tr>
        <tr>
            <th><a href="{{url('/backend/user/index')}}" class="btn btn-succes tbn-sm">Back</a></th>
        </tr>
    </table>
@endsection