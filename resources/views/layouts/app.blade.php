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
    <div class="wrap" style="width:100%; max-width:none; padding:0; margin:0; display:flex; flex-direction:column; min-height:100vh;">
        @include('partials.header')
        
@yield('fullwidth')

        <main>
            <div class="container" style="max-width:1100px; margin:0 auto; padding:20px 20px;">
                @yield('content')
            </div>
        </main>

        @include('partials.footer')
    </div>
</body>

</html>
