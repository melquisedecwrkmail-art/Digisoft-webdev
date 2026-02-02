@extends('layouts.main')

@section('title', 'Contact')

@section('content')
<section class="contact">
    <h1>Get in Touch</h1>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf

        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="phone" placeholder="Phone Number">
        <textarea name="message" placeholder="Your Message" required></textarea>

        <button type="submit" class="btn primary">Send Message</button>
    </form>
</section>
@endsection
