@extends('layouts.app')

@section('title', 'Fmonitor Institute')
@section('fullwidth')
<section class="hero">
    <div class="hero-inner">
        <div class="hero-content">
            <div class="kicker">Undergraduate • Graduate • Online</div>

            <h1>Future-ready education for every learner</h1>

            <p class="lead">
                Join small cohorts, learn from industry-experienced faculty, and build a career-ready
                portfolio through hands-on projects and internships.
            </p>

            <div class="hero-actions">
                <a class="btn btn-primary" href="#admissions">Apply Now</a>
                <a class="btn btn-ghost" href="#programs">Explore Programs</a>
            </div>

            <!-- ✅ STATS GRID -->
            <div class="stat-list">
                <div class="stat">
                    <div class="stat-icon">👩‍🏫</div>
                    <strong>12:1</strong>
                    <div class="stat-sub">Student–faculty ratio</div>
                </div>

                <div class="stat">
                    <div class="stat-icon">🎯</div>
                    <strong>95%</strong>
                    <div class="stat-sub">Placement within 6 months</div>
                </div>

                <div class="stat">
                    <div class="stat-icon">🤝</div>
                    <strong>120+</strong>
                    <div class="stat-sub">Industry partners</div>
                </div>
            </div>
        </div>

        <!-- IMAGE SIDE -->
        <aside class="hero-aside">
            <div class="card-back"></div>
            <img
                src="{{ asset('images/graduates.jpg') }}"
                alt="Horizon College Campus"
                class="hero-image"
            >
        </aside>
    </div>
</section>

@endsection
@section('content')

    <section id="programs" class="programs">
        <div class="prog">
            <svg viewBox="0 0 24 24" fill="none" class="prog-icon" aria-hidden="true">
                <path d="M12 2L3 7v6c0 5 4 9 9 9s9-4 9-9V7l-9-5z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h3>Computer Science</h3>
            <p class="muted">Software engineering, AI & data science with hands-on labs and industry projects.</p>
        </div>

        <div class="prog">
            <svg viewBox="0 0 24 24" fill="none" class="prog-icon" aria-hidden="true">
                <path d="M4 7h16M4 12h10M4 17h16" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h3>Business & Entrepreneurship</h3>
            <p class="muted">Startup incubator, mentorship, and real-world consulting projects.</p>
        </div>

        <div class="prog">
            <svg viewBox="0 0 24 24" fill="none" class="prog-icon" aria-hidden="true">
                <path d="M12 2l3 7h7l-5.5 4 2 7L12 17l-6.5 3 2-7L2 9h7l3-7z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h3>Arts & Design</h3>
            <p class="muted">Portfolio-led studio practice, exhibitions, and industry collaborations.</p>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="test-cards">
            <div class="test">
                <div class="quote">“The instructors challenged me and helped me build a portfolio that landed my
                    first role — couldn’t recommend Horizon more.”</div>
                <div class="author">
                    <div class="avatar">JS</div>
                    <div>
                        <div class="author-name">Jamie Smith</div>
                        <div class="author-role">Software Engineer, Alum</div>
                    </div>
                </div>
            </div>

            <div class="test">
                <div class="quote">“Small classes and hands-on projects made learning practical — I launched a
                    startup with peers from the entrepreneurship course.”</div>
                <div class="author">
                    <div class="avatar">AR</div>
                    <div>
                        <div class="author-name">Aisha Rahman</div>
                        <div class="author-role">Founder, Alum</div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="apply-aside">
            <div class="aside-title">Ready to apply?</div>
            <div class="aside-sub">Applications are open for the Spring term. Scholarships available for eligible
                students.</div>
            <a class="btn btn-primary" href="#admissions">Start Your Application</a>
        </aside>
    </section>

    <div class="cta-strip" id="contact">
        <div>
            <div class="cta-title">Have questions?</div>
            <div class="cta-sub">Contact admissions to schedule a one-on-one advising call.</div>
        </div>
        <div>
            <a class="btn btn-outline" href="mailto:admissions@horizon.edu">admissions@fmonitor.edu</a>
        </div>
    </div>
@endsection