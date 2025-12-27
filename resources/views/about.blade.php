@extends('layouts.app')

@section('title', 'About — Fmonitor Institute')

@section('fullwidth')
<section class="hero">
    <div class="hero-inner">
        <div class="hero-content">
            <div class="kicker">About us</div>
            <p class="lead">Fmonitor Institute is a professional training and consultancy organization based in Nairobi, Kenya, specializing
            in capacity building, professional development, and applied skills training. We are an affiliate of Frankmonitor
            Consulting Limited (est. 2015).</p>
        </div>

        <!-- IMAGE SIDE -->
        <aside class="hero-aside">
    <div class="card-back"></div>

    <img
        src="{{ asset('images/graduates.jpg') }}"
        alt="Campus life"
        class="hero-image"
    >
</aside>

    </div>
</section>
<section class="about">
    <div class="about-grid">
        <div class="about-card">
            <div class="about-icon">👁️</div>
            <strong>Vision</strong>
            <p>
                To be a leading center of excellence in professional training and consultancy, empowering individuals and
                organizations with transformative skills and solutions that drive sustainable impact.
            </p>
        </div>

        <div class="about-card">
            <div class="about-icon">🎯</div>
            <strong>Mission</strong>
            <p>
                To provide high-quality, practical, and innovative training and consultancy services that empower professionals
                and organizations across diverse fields to achieve measurable results, sustainable growth, and lasting impact.
            </p>
        </div>

        <div class="about-card">
            <div class="about-icon">🤝</div>
            <strong>Core Values</strong>
            <ul>
                <li>Innovation</li>
                <li>Impact-Driven</li>
                <li>Collaboration</li>
                <li>Professionalism</li>
                <li>Inclusivity</li>
            </ul>
        </div>
    </div>
</section>

@endsection
