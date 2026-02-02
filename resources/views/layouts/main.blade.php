<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">

<!-- SEO Meta -->
<meta name="description" content="Digisoft Business Solution Inc. - IT Consulting & Software Development">
<meta name="keywords" content="ERP, POS, Software Development, IT Consulting">
<meta property="og:title" content="Digisoft Business Solution Inc.">
<meta property="og:description" content="Transforming business ideas into digital solutions">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<header class="navbar">
    <div class="logo">Digisoft</div>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('why-us') }}">Why Us</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <p>© {{ date('Y') }} Digisoft Business Solution Inc.</p>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
