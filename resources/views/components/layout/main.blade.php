<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/custom.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navigation">
    <ul>
        <li><a href="{{ route('home') }}"
               class="{{ Request::route()->getName() === 'home' ? "active" : "" }}">
                Home</a></li>
        <li><a href="{{ route('static.profile') }}"
               class="{{ Request::route()->getName() === 'static.profile' ? "active" : "" }}">
                Profile</a></li>
        <li><a href="{{ route('dashboard') }}"
            class="{{ Request::route()->getName() === 'dashboard' ? "active" : "" }}">
                Dashboard</a></li>
        <li><a href="{{ route('faqs.index') }}"
               class="{{ Request::route()->getName() === 'faqs.index' ? "active" : "" }}">
                FAQ</a></li>
        <li><a href="{{ route('posts.index') }}"
               class="{{ Request::route()->getName() === 'posts.index' ? "active" : "" }}">
                Blog</a></li>
    </ul>
</nav>


<!-- Header with image -->
<div class="header">
    <div class="container">
        <h1>{{ $title }}</h1>
    </div>
</div>

<!--Aside Menu-->
<div class="aside">
    <ul>
        <li><a href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754#111-course-and-examination-regulations"
               target="_blank" rel="noopener noreferrer">The HZ HBO-ICT Course and Examination Regulations (CER)</a></li>
        <li><a href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754#chapter-2-implementation-regulation-hz-cer"
               target="_blank" rel="noopener noreferrer">The Implementation Regulations (IR) of the HBO-ICT program</a></li>
        <li><a href="https://learn.hz.nl/my/" target="_blank" rel="noopener noreferrer">Learn environment</a></li>
        <li><a href="https://portal.hz.nl/" target="_blank" rel="noopener noreferrer">MyHZ study progress</a></li>
        <li><a href="https://github.com/HZ-HBO-ICT" target="_blank" rel="noopener noreferrer">The GitHub environment of
                the study program</a></li>
    </ul>
</div>

<div class="border"></div>

{{ $slot }}

</body>

<!--Footer-->
<footer>
    <div class="footer-section">
        <a href="https://hz.nl/">
            <img src="{{ asset('images/hz-logo.png') }}" class="hz-logo" alt="HZ logo">
        </a>
        <div class="icons">
            <a href="https://github.com/pana0008" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://open.spotify.com/user/yl0t176973zmipe423c66toeu?si=fcc0686478ec42f8&nd=1&dlsi=183d4ab580a74b36"
               target="_blank"><i class="fa-brands fa-spotify"></i></a>
        </div>
        <div class="footer-nav">
            <ul>
                <li><a href="{{ route('home') }}"
                       class="{{ Request::route()->getName() === 'home' ? "active" : "" }}">
                        Home</a></li>
                <li><a href="{{ route('static.profile') }}"
                       class="{{ Request::route()->getName() === 'static.profile' ? "active" : "" }}">
                        Profile</a></li>
                <li><a href="{{ route('dashboard') }}"
                       class="{{ Request::route()->getName() === 'dashboard' ? "active" : "" }}">
                        Dashboard</a></li>
                <li><a href="{{ route('faqs.index') }}"
                       class="{{ Request::route()->getName() === 'faqs.index' ? "active" : "" }}">
                        FAQ</a></li>
                <li><a href="{{ route('posts.index') }}"
                       class="{{ Request::route()->getName() === 'posts.index' ? "active" : "" }}">
                        Blog</a></li>
            </ul>
        </div>
    </div>
</footer>
</html>
