@extends('Frontend.master')

@section('title')
    Contact | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/5.jpg')}} @endsection

@section('page_name') Contact @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    @include('Frontend.component.map')

    @include('Frontend.component.form')

@endsection
