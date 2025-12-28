<header>
    
    <a href="{{ url('/') }}" class="brand-link">
        <div class="brand" style="display:flex;align-items:center;gap:12px;">
            <div class="logo">
               <img src="{{ asset('images/fmonitor.jpeg') }}" alt="Fmonitor Institute logo">
            </div>
            <div>
                <div style="font-weight:700; text-decoration: none;">Fmonitor Institute</div>
                <div style="font-size:12px;color:var(--muted); text-decoration: none;">Empowering curious minds</div>
            </div>
        </div>
    </a>

    <button class="nav-toggle" aria-label="Toggle navigation">☰</button>

    <nav>
    <a href="{{ route('college') }}#programs">Programs</a>
    <a href="{{ route('college') }}#contact">Contact</a>
    <a href="{{ route('college') }}">Home</a>
    <a href="{{ route('about') }}">About us</a>
    <a href="{{ route('team') }}">Our Team</a>
</nav>

</header>
