@extends('layouts.backend-dashboard.app')
@section('title','Dashboard')

@section('content')
    @include('Posts.html')
@endsection

@section('extra_javascript')
    @include('Posts.javascript')
@endsection