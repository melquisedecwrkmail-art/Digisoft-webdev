@extends('layouts.main')

@section('title', 'Services')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="section-title">Our Solutions</h1>

        <div class="service-grid">
            <div class="card fade-in">
                <i class="fas fa-network-wired icon"></i>
                <h3>ERP Systems</h3>
                <p>Comprehensive ERP solutions for streamlined operations.</p>
            </div>

            <div class="card fade-in">
                <i class="fas fa-calculator icon"></i>
                <h3>Accounting Systems</h3>
                <p>BIR CAS & EIS compliant accounting solutions.</p>
            </div>

            <div class="card fade-in">
                <i class="fas fa-book icon"></i>
                <h3>QuickBooks Desktop</h3>
                <p>Seamless QuickBooks integration.</p>
            </div>

            <div class="card fade-in">
                <i class="fas fa-cash-register icon"></i>
                <h3>POS Systems</h3>
                <p>Modern POS for retail and service businesses.</p>
            </div>

            <div class="card fade-in">
                <i class="fas fa-users icon"></i>
                <h3>HRIS</h3>
                <p>Human Resource Information Systems.</p>
            </div>
        </div>
    </div>
</section>
@endsection
