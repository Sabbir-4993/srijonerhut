@extends('Frontend.master')

@section('title')
    Gallery | Srijoner Hut
@endsection

@section('bg') {{asset('assets/images/background/5.jpg')}} @endsection

@section('page_name') Gallery @endsection

@section('content')

    @include('Frontend.layouts.__breadcrumb')

    @include('Frontend.component.event_gallery')

    @include('Frontend.component.newsletter')
@endsection
