<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Fmonitor Institute')</title>

    @if (class_exists(\Illuminate\Foundation\Vite::class))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endif

    <link rel="icon" type="image/png" href="{{ asset('images/fmonitor.jpeg') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/fmonitor.jpeg') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>

<body>
    <div class="wrap">
        <header>
            <div class="brand">
                <div class="logo"><img src="{{ asset('images/fmonitor.jpeg') }}" alt="Fmonitor Institute logo"
                        style="width:56px;height:56px;display:block;border-radius:10px"></div>
                <div>
                    <div style="font-weight:700">Fmonitor Institute</div>
                    <div style="font-size:12px;color:var(--muted)">Empowering curious minds</div>
                </div>
            </div>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/courses') }}">Courses</a>
                <a href="{{ url('/services') }}">Services</a>
                <a href="{{ url('/team') }}">Our Team</a>
                <a href="{{ url('/clients') }}">Clients</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </nav>
        </header>

        <main style="margin-top:18px">@yield('content')</main>

        <footer style="margin-top:40px;padding-top:28px;border-top:1px solid #e6eef8;color:var(--muted)">
            <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap">
                <div>
                    <div style="font-weight:700">Fmonitor Institute</div>
                    <div style="color:var(--muted);margin-top:6px">123 College Ave, Nairobi • (555) 123-4567</div>
                </div>
                <div style="color:var(--muted);font-size:13px">© 2026 Fmonitor Institute — All rights reserved</div>
            </div>
        </footer>
    </div>
</body>

</html>
