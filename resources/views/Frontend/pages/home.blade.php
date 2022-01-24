@extends('Frontend.master')

@section('title')
    Srijoner Hut - Bengali Film Festival
@endsection


@section('content')

    <!-- Banner Section -->

    @include('Frontend.component.banner')

    <!--End Banner Section -->



    <!-- Coming Soon -->

    @include('Frontend.component.coming_soon')

    <!-- End Coming Soon -->



    <!-- About Section -->

    @include('Frontend.component.about')

    <!--End About Section -->



    <!-- Features Section Two -->

    @include('Frontend.component.our_feature')

    <!--End Features Section -->



    <!-- Speakers Section -->

    @include('Frontend.component.performers')

    <!-- End Speakers Section -->



    <!-- Fun Fact Section -->

    @include('Frontend.component.counter')

    <!--End Fun Fact Section -->



    <!-- schedule Section -->

    @include('Frontend.component.schedule')

    <!--End schedule Section -->



    <!-- Pricing Section -->



    <!--End Pricing Section -->



    <!-- Video Section -->

    @include('Frontend.component.video')

    <!--End Video Section -->



    <!-- Why Choose Us -->


    <!-- End Why Choose Us -->



    <!--Clients Section-->

    @include('Frontend.component.clients')

    <!--End Clients Section-->



    <!-- Register Section -->



    <!--End Register Section -->


    {{--    @include('Frontend.component.gallery_slide')--}}

    <!-- News Section -->

    {{--    @include('Frontend.component.blog')--}}

    <!--End News Section -->

@endsection

