@extends('Frontend.master')

@section('title')
    Schedule | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/5.jpg')}} @endsection

@section('page_name') Schedule @endsection

@section('content')

@include('Frontend.layouts.__breadcrumb')

@include('Frontend.component.schedule')

@include('Frontend.component.newsletter')

@endsection
