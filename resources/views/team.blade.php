@extends('layouts.app')

@section('title', 'Our Team — Fmonitor Institute')

@section('content')
<section class="team wrap">
    <div class="team-grid-asymmetric">
        <!-- Left Column: Two smaller profiles -->
        <div class="team-left">
            <div class="card">
                <img src="{{ asset('images/profilePic.webp') }}" alt="Mr. Robert Kimani" class="team-image rounded">
                <strong>Mr. Robert Kimani</strong>
                <div class="role">Director of Training</div>
                <p class="desc">Capacity building and course design expert.</p>
            </div>
            <div class="card">
                <img src="{{ asset('images/profilePic.webp') }}" alt="Ms. Agnes Muriithi" class="team-image rounded">
                <strong>Ms. Agnes Muriithi</strong>
                <div class="role">Chief Operations Officer</div>
                <p class="desc">Operations and logistics leader.</p>
            </div>
        </div>

        <!-- Right Column: Main profile -->
        <div class="team-right">
            <div class="card main-card">
                <img src="{{ asset('images/profilePic.webp') }}" alt="Dr. Gichuru Maina, PhD" class="team-image rounded">
                <strong>Dr. Gichuru Maina, PhD</strong>
                <div class="role">Managing Director</div>
                <p class="desc">
                    Dr. Gichuru Francis is an accomplished educationist, researcher, and international consultant with a PhD in Curriculum and Instruction. He is a Certified Monitoring and Evaluation (M&E) Professional with extensive experience in capacity building, research, and advisory services across diverse development and academic contexts.
                </p>
                <p class="desc">
                    He brings strong expertise in Monitoring and Evaluation, resource mobilization and fundraising, curriculum development, and program design, supporting organizations to strengthen performance, accountability, and learning. Dr. Gichuru has worked with a wide range of NGOs, government institutions, academic institutions, and development partners at national and international levels.
                </p>
                <p class="desc">
                    In addition to consultancy work, he is a university lecturer and researcher, actively engaged in teaching, mentoring, and applied research. His professional approach combines academic rigor with practical, results-oriented solutions, making him a highly sought-after trainer and advisor in professional short courses and development programs.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
