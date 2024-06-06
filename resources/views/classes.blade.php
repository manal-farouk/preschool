
@extends('layouts.main')
@section('header')


    <!-- Page Header End -->
    @include('includes.headerClasses')
    <!-- Page Header End -->


    <!-- classes Start -->
    @include('includes.classes')
    <!-- classes End -->

       <!-- Appointment Start -->
       @include('includes.appointment')
       <!-- Appointment End -->

  <!-- Testimonial Start -->
  @include('includes.testimonial')
  <!-- Testimonial End -->


@endsection
