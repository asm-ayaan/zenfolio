@extends('frontend.layouts.app')

@section('contents')

    @include('frontend.home.sections.hero-section')
    <!-- Services Section -->
    @include('frontend.home.sections.service-section')

    <!-- Experience Section -->
    @include('frontend.home.sections.experience-section')


    <!-- Skills Section -->
    @include('frontend.home.sections.skills-section')

    <!-- Work Section -->
    @include('frontend.home.sections.work-section')

    <!-- Testimonials Section -->
    @include('frontend.home.sections.testimonial-section')

    <!-- Contact Section -->
    @include('frontend.home.sections.contact-section')
    
@endsection
