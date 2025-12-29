@extends('layouts.app')

@section('title', 'About — Fmonitor Institute')

@section('fullwidth')

<!-- HERO / SHORT ABOUT US -->
<section class="hero-about">
    <div class="hero-inner wrap">
        <!-- Left: Image with emerging card effect -->
        <aside class="hero-image-aside">
            <div class="card-back"></div>
            <img src="{{ asset('images/graduates.jpg') }}" alt="Campus life" class="hero-image">
        </aside>

        <!-- Right: Short About -->
        <div class="hero-content-side">
            <div class="kicker">About us</div>
            <p class="lead">
                Fmonitor Institute is a professional training and consultancy organization based in Nairobi, Kenya,
                specializing in capacity building, professional development, and applied skills training. We are an affiliate
                of Frankmonitor Consulting Limited (est. 2015).
            </p>
        </div>
    </div>
</section>

<!-- COMPANY PROFILE -->
<section class="profile wrap">
    <h2>Who we are</h2>
    <p>
        Fmonitor Institute is an affiliate of Frankmonitor Consulting Limited, a limited liability company duly registered in Kenya under the Companies Act (Cap 486) of the Laws of Kenya. The company was incorporated in 2015 under registration number CPR/2015/182173 and has since established a strong reputation in delivering high-quality training, research, and consultancy services across multiple sectors.
    </p>
    <p>
        Over the years, Frankmonitor Consulting Limited and Fmonitor Institute have successfully served clients across diverse regions, including Switzerland, India, Kenya, Malawi, Rwanda, Burundi, Uganda, Tanzania, South Sudan, Namibia, Botswana, Liberia, The Gambia, Eswatini (Swaziland), South Africa, Zimbabwe, Ethiopia, Somaliland, Eritrea, and beyond.
    </p>
    <p>
        Based in Nairobi, Kenya, Fmonitor Institute is a professional training and consultancy organization providing industry-relevant short professional courses and advisory services to individuals, institutions, NGOs, government agencies, and private sector organizations.
    </p>
    <p>
        The Institute specializes in Monitoring and Evaluation, Resource Mobilization and Fundraising, Leadership and Management, Gender-Responsive Programming, Risk Management, and Data Analysis and Software Training, among other capacity-building programs designed to meet evolving professional and organizational needs.
    </p>
</section>

<!-- MISSION / VISION / CORE VALUES -->
<section class="about1 wrap">
    <div class="about-grid">
        <div class="about-card">
            <div class="about-icon">👁️</div>
            <strong>Vision</strong>
            <p>
                To be a leading center of excellence in professional training and consultancy, empowering individuals and organizations with transformative skills and solutions that drive sustainable impact.
            </p>
        </div>

        <div class="about-card">
            <div class="about-icon">🎯</div>
            <strong>Mission</strong>
            <p>
                To provide high-quality, practical, and innovative training and consultancy services that empower professionals and organizations across diverse fields to achieve measurable results, sustainable growth, and lasting impact.
            </p>
        </div>

        <div class="about-card">
            <div class="about-icon">🤝</div>
            <strong>Core Values</strong>
            <ul>
                <li>Innovation – We embrace creativity, technology, and continuous improvement in our solutions.</li>
                <li>Impact-Driven – We focus on results that create real, measurable change for clients and communities.</li>
                <li>Collaboration – We believe in strong partnerships and knowledge sharing.</li>
                <li>Professionalism – We maintain competence, reliability, and respect in all engagements.</li>
                <li>Inclusivity – We value diversity and ensure our programs are accessible and relevant to all.</li>
            </ul>
        </div>
    </div>
</section>

@endsection
