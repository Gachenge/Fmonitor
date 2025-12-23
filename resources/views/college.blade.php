<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fmonitor Institute</title>
    @if (class_exists(\Illuminate\Foundation\Vite::class))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endif
    <!-- Site icons: prefer PNG, keep SVG as fallback -->
    <link rel="icon" type="image/png" href="{{ asset('images/fmonitor.jpeg') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/fmonitor.jpeg') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <Link>
    </Link>
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
                <a href="#programs">Programs</a>
                <a href="#testimonials">Testimonials</a>
                <a href="#contact">Contact</a>
            </nav>
        </header>

        <section class="hero">
            <div class="hero-card">
                <div class="kicker">Undergraduate • Graduate • Online</div>
                <h1>Future-ready education for every learner</h1>
                <p class="lead">Join small cohorts, learn from industry-experienced faculty, and build a career-ready
                    portfolio through hands-on projects and internships.</p>

                <div style="margin-top:18px">
                    <a class="btn btn-primary" href="#admissions">Apply Now</a>
                    <a class="btn btn-ghost" href="#programs">Explore Programs</a>
                </div>

                <div class="stat-list">
                    <div class="stat">
                        <strong>12:1</strong>
                        <div style="color:var(--muted);font-size:13px">Student–faculty ratio</div>
                    </div>
                    <div class="stat">
                        <strong>95%</strong>
                        <div style="color:var(--muted);font-size:13px">Placement within 6 months</div>
                    </div>
                    <div class="stat">
                        <strong>120+</strong>
                        <div style="color:var(--muted);font-size:13px">Industry partners</div>
                    </div>
                </div>
            </div>

            <aside style="display:flex;flex-direction:column;gap:14px">
                <div
                    style="background:linear-gradient(180deg,#eef8ff,white);padding:18px;border-radius:12px;border:1px solid #e6eef8">
                    <div style="font-weight:700">Next Open Day</div>
                    <div style="color:var(--muted);margin-top:6px">Jan 15, 2026 — Campus Tour & Workshops</div>
                    <a href="#"
                        style="margin-top:12px;color:var(--accent);display:inline-block;text-decoration:none">Reserve a
                        spot →</a>
                </div>

                <div style="background:var(--card);padding:18px;border-radius:12px;border:1px solid #e6eef8">
                    <div style="font-weight:700">Request Information</div>
                    <div style="color:var(--muted);margin-top:8px">Admissions packet, scholarships, and course guides
                        delivered by email.</div>
                    <a class="btn" href="#contact" style="margin-top:12px;border:1px solid #e6eef8">Request Info</a>
                </div>
            </aside>
        </section>

        <section id="programs" class="programs">
            <div class="prog">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 2L3 7v6c0 5 4 9 9 9s9-4 9-9V7l-9-5z" stroke="currentColor" stroke-width="1.2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h3 style="margin-top:10px">Computer Science</h3>
                <p style="color:var(--muted);margin-top:8px">Software engineering, AI & data science with hands-on labs
                    and industry projects.</p>
            </div>
            <div class="prog">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M4 7h16M4 12h10M4 17h16" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <h3 style="margin-top:10px">Business & Entrepreneurship</h3>
                <p style="color:var(--muted);margin-top:8px">Startup incubator, mentorship, and real-world consulting
                    projects.</p>
            </div>
            <div class="prog">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 2l3 7h7l-5.5 4 2 7L12 17l-6.5 3 2-7L2 9h7l3-7z" stroke="currentColor"
                        stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h3 style="margin-top:10px">Arts & Design</h3>
                <p style="color:var(--muted);margin-top:8px">Portfolio-led studio practice, exhibitions, and industry
                    collaborations.</p>
            </div>
        </section>

        <section id="testimonials" class="testimonials">
            <div class="test-cards">
                <div class="test">
                    <div style="font-style:italic;">“The instructors challenged me and helped me build a portfolio that
                        landed my first role — couldn’t recommend Horizon more.”</div>
                    <div class="author">
                        <div class="avatar">JS</div>
                        <div>
                            <div style="font-weight:700">Jamie Smith</div>
                            <div style="color:var(--muted);font-size:13px">Software Engineer, Alum</div>
                        </div>
                    </div>
                </div>
                <div class="test">
                    <div style="font-style:italic;">“Small classes and hands-on projects made learning practical — I
                        launched a startup with peers from the entrepreneurship course.”</div>
                    <div class="author">
                        <div class="avatar">AR</div>
                        <div>
                            <div style="font-weight:700">Aisha Rahman</div>
                            <div style="color:var(--muted);font-size:13px">Founder, Alum</div>
                        </div>
                    </div>
                </div>
            </div>

            <aside
                style="background:var(--card);padding:20px;border-radius:12px;border:1px solid #e6eef8;height:max-content">
                <div style="font-weight:700">Ready to apply?</div>
                <div style="color:var(--muted);margin-top:8px">Applications are open for the Spring term. Scholarships
                    available for eligible students.</div>
                <a class="btn btn-primary" href="#admissions" style="margin-top:12px;display:inline-block">Start Your
                    Application</a>
            </aside>
        </section>

        <div class="cta-strip" id="contact">
            <div>
                <div style="font-weight:700">Have questions?</div>
                <div style="color:var(--muted);margin-top:6px">Contact admissions to schedule a one-on-one advising
                    call.</div>
            </div>
            <div>
                <a class="btn" href="mailto:admissions@horizon.edu">admissions@horizon.edu</a>
            </div>
        </div>

        <footer>
            <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap">
                <div>
                    <div style="font-weight:700">Horizon College</div>
                    <div style="color:var(--muted);margin-top:6px">123 College Ave, Nairobi • (555) 123-4567</div>
                </div>
                <div style="color:var(--muted);font-size:13px">© 2026 Fmonitor Institute — All rights reserved</div>
            </div>
        </footer>
    </div>
</body>

</html>
