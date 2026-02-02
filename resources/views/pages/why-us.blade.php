@extends('layouts.main')

@section('title', 'Why Us')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="section-title">Why Choose Digisoft?</h1>

        <div class="service-grid">
            <div class="card fade-in">
                <i class="fas fa-user-shield icon"></i>
                <h3>Expertise</h3>
                <p>Certified IT professionals.</p>
            </div>

            <div class="card fade-in">
                <i class="fas fa-cogs icon"></i>
                <h3>Custom Solutions</h3>
                <p>Tailored to your business needs.</p>
            </div>

            <div class="card fade-in">
                <i class="fas fa-tags icon"></i>
                <h3>Affordable Pricing</h3>
                <p>Quality without compromise.</p>
            </div>

            <div class="card fade-in">
                <i class="fas fa-headset icon"></i>
                <h3>24/7 Support</h3>
                <p>We’ve got your back.</p>
            </div>
        </div>
    </div>
</section>

@endsection
