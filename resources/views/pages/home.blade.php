@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="container">
        <h1 class="hero-title fade-in delay-1">
            Transforming Business Ideas into Digital Reality
        </h1>

        <p class="hero-subtitle fade-in delay-2">
            Expert IT Consulting & Software Development for Modern Businesses
        </p>

        <div class="hero-buttons fade-in delay-3">
            <a href="{{ route('contact') }}" class="btn primary">Request Consultation</a>
            <a href="{{ route('services') }}" class="btn secondary">Explore Solutions</a>
        </div>
    </div>
</section>

<section class="section testimonials">
    <div class="container">
        <h2 class="section-title">What Our Clients Say</h2>

        <div class="testimonial-slider fade-in">
            <div class="testimonial active">
                <p>“Digisoft helped us digitize our operations efficiently.”</p>
                <strong>— ABC Trading Corp</strong>
            </div>
            <div class="testimonial">
                <p>“Professional team and excellent support.”</p>
                <strong>— XYZ Manufacturing</strong>
            </div>
            <div class="testimonial">
                <p>“Highly recommended for ERP and POS systems.”</p>
                <strong>— Retail Solutions Inc.</strong>
            </div>
        </div>
    </div>
</section>


@endsection
