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
    <link rel="apple-touch-icon" href="{{ asset('images/fmonitor.jpeg') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

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
    <a href="https://wa.me/2547XXXXXXXX"
   class="whatsapp-float"
   target="_blank"
   rel="noopener"
   aria-label="Chat with us on WhatsApp">
    <svg viewBox="0 0 32 32" width="26" height="26" fill="currentColor">
        <path d="M19.11 17.2c-.27-.14-1.6-.79-1.85-.88-.25-.09-.43-.14-.61.14-.18.27-.7.88-.86 1.06-.16.18-.32.2-.59.07-.27-.14-1.13-.42-2.15-1.34-.8-.71-1.34-1.6-1.5-1.87-.16-.27-.02-.42.12-.55.12-.12.27-.32.41-.48.14-.16.18-.27.27-.45.09-.18.05-.34-.02-.48-.07-.14-.61-1.48-.84-2.03-.22-.53-.45-.46-.61-.46h-.52c-.18 0-.48.07-.73.34-.25.27-.96.94-.96 2.29s.98 2.66 1.12 2.84c.14.18 1.93 2.95 4.68 4.13.65.28 1.16.45 1.56.58.65.21 1.25.18 1.72.11.52-.08 1.6-.65 1.83-1.28.23-.63.23-1.17.16-1.28-.07-.11-.25-.18-.52-.32zM16 3C8.83 3 3 8.83 3 16c0 2.55.74 5.02 2.14 7.13L3 29l5.99-2.08A12.93 12.93 0 0 0 16 29c7.17 0 13-5.83 13-13S23.17 3 16 3z"/>
    </svg>
</a>

    <!-- <button id="backToTop" aria-label="Back to top">↑</button> -->
</body>

</html>
