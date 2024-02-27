@extends('layouts.frontendlayout')

@section('content')




    <!-- start notification -->
    @include('layouts.notifications')
    <!-- end notification -->


<!-- start home -->
    @include('Frontend.home')
    <!-- end home -->

    <!-- start about -->
    @include('Frontend.about')
    <!-- end about -->

    <!-- start team -->
    @include('Frontend.team')
    <!-- end team -->

    <!-- start service -->
    @include('Frontend.service')
    <!-- end service -->

    <!-- start projects -->
    @include('Frontend.projects')
    <!-- end projects -->



    <!-- start contact -->
    @include('Frontend.contact')
    <!-- end contact -->

    <!-- start copyright -->
    @include('Frontend.footer')
    <!-- end copyright -->
@endsection
