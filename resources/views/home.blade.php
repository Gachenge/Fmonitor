@extends('layouts.app')

@section('title', 'Home — Fmonitor Institute')

@section('content')
    <div class="hero-card">
        <div class="kicker">Professional Training & Consultancy</div>
        <h1>Transforming Knowledge into Impact</h1>
        <p class="lead">Fmonitor Institute offers practical, evidence-based professional courses and consultancy services
            for individuals and organizations across sectors.</p>

        <div style="margin-top:18px">
            <a class="btn btn-primary" href="/courses">View Courses</a>
            <a class="btn btn-ghost" href="/contact">Contact Us</a>
        </div>

        <div class="stat-list" style="margin-top:28px">
            <div class="stat">
                <strong>2015</strong>
                <div style="color:var(--muted);font-size:13px">Affiliate since</div>
            </div>
            <div class="stat">
                <strong>50+</strong>
                <div style="color:var(--muted);font-size:13px">Courses & workshops</div>
            </div>
            <div class="stat">
                <strong>100+</strong>
                <div style="color:var(--muted);font-size:13px">Clients served</div>
            </div>
        </div>
    </div>

    <section style="display:grid;grid-template-columns:1fr 360px;gap:24px;margin-top:28px;align-items:start">
        <div>
            <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:12px">
                <div class="prog">
                    <h3>Results-Based M&E</h3>
                    <p style="color:var(--muted);margin-top:8px">Design and implementation of monitoring systems, evaluation
                        and impact assessments. Includes practical tools and templates.</p>
                    <a href="/courses" class="btn" style="margin-top:12px;border:1px solid #e6eef8">Learn more</a>
                </div>
                <div class="prog">
                    <h3>Resource Mobilization</h3>
                    <p style="color:var(--muted);margin-top:8px">Fundraising strategies, proposal development and donor
                        engagement for NGOs and agencies.</p>
                    <a href="/courses" class="btn" style="margin-top:12px;border:1px solid #e6eef8">Learn more</a>
                </div>
                <div class="prog">
                    <h3>Data & Analysis</h3>
                    <p style="color:var(--muted);margin-top:8px">Training in Excel, SPSS, STATA, Power BI and data
                        visualization for decision-making.</p>
                    <a href="/courses" class="btn" style="margin-top:12px;border:1px solid #e6eef8">Learn more</a>
                </div>
                <div class="prog">
                    <h3>Leadership & Management</h3>
                    <p style="color:var(--muted);margin-top:8px">Practical leadership skills, strategic planning, and team
                        management for professionals.</p>
                    <a href="/courses" class="btn" style="margin-top:12px;border:1px solid #e6eef8">Learn more</a>
                </div>
            </div>

            <section style="margin-top:18px;display:grid;grid-template-columns:1fr 1fr;gap:12px">
                <div style="background:var(--card);padding:14px;border-radius:10px;border:1px solid #e6eef8">
                    <h4>Vision</h4>
                    <p style="color:var(--muted);margin-top:6px">To be a leading center of excellence in professional
                        training and consultancy, empowering individuals and organizations with transformative skills and
                        solutions that drive sustainable impact.</p>
                    <a href="/about" class="btn" style="margin-top:8px;border:1px solid #e6eef8">Read more</a>
                </div>
                <div style="background:var(--card);padding:14px;border-radius:10px;border:1px solid #e6eef8">
                    <h4>Mission</h4>
                    <p style="color:var(--muted);margin-top:6px">To provide high-quality, practical, and innovative training
                        and consultancy services that empower professionals and organizations across diverse fields to
                        achieve measurable results, sustainable growth, and lasting impact.</p>
                    <a href="/about" class="btn" style="margin-top:8px;border:1px solid #e6eef8">Read more</a>
                </div>
            </section>

            <section style="margin-top:18px">
                <h4>Upcoming trainings</h4>
                <ul style="color:var(--muted);margin-top:8px">
                    <li>Results-Based M&E — 15 Jan 2026 (In-person)</li>
                    <li>Data & Analysis with Power BI — 28 Feb 2026 (Virtual)</li>
                    <li>Resource Mobilization — 10 Mar 2026 (Hybrid)</li>
                </ul>
            </section>

            <section style="margin-top:18px">
                <h4>Testimonials</h4>
                <div style="display:grid;gap:10px;margin-top:8px">
                    <div class="test" style="padding:12px">
                        <div style="font-style:italic">“The course was practical and directly applicable — we redesigned our
                            M&E framework the following month.”</div>
                        <div style="margin-top:8px;font-weight:700">— Daniel Otieno, Program Manager</div>
                    </div>
                    <div class="test" style="padding:12px">
                        <div style="font-style:italic">“Highly recommended for development professionals — clear practical
                            tools and follow-up support.”</div>
                        <div style="margin-top:8px;font-weight:700">— Mercy Njeri, M&E Specialist</div>
                    </div>
                </div>
            </section>
        </div>

        <aside style="height:100%">
            <div
                style="background:linear-gradient(90deg,rgba(255,90,122,0.06),rgba(255,184,107,0.03));padding:16px;border-radius:12px;border:1px solid rgba(255,90,122,0.06)">
                <div style="font-weight:700">Next Open Day</div>
                <div style="color:var(--muted);margin-top:6px">Jan 15, 2026 — Campus Tour & Workshops</div>
                <a href="#"
                    style="margin-top:12px;color:var(--accent);display:inline-block;text-decoration:none">Reserve a spot
                    →</a>
            </div>

            <div style="background:var(--card);padding:16px;border-radius:12px;border:1px solid #e6eef8;margin-top:12px">
                <div style="font-weight:700">Request an in-house course</div>
                <div style="color:var(--muted);margin-top:6px">We offer tailored in-house training for organizations.
                    Contact us for a proposal.</div>
                <a href="/contact" class="btn"
                    style="margin-top:12px;border:1px solid #e6eef8;display:inline-block">Request proposal</a>
            </div>
        </aside>
    </section>

@endsection
