@extends('layouts.frontendlayout')

@section('content')

    <!-- start notification -->
    @include('layouts.notifications')
    <!-- end notification -->


    <!-- start home -->
    @include('Front.home')
    <!-- end home -->

    <!-- start about -->
    @include('Front.about')
    <!-- end about -->

    <!-- start team -->
    @include('Front.team')
    <!-- end team -->

    <!-- start service -->
    @include('Front.service')
    <!-- end service -->

    <!-- start projects -->
    @include('Front.projects')
    <!-- end projects -->



    <!-- start contact -->
    @include('Front.contact')
    <!-- end contact -->

    <!-- start copyright -->
    @include('Front.footer')
    <!-- end copyright -->
@endsection
