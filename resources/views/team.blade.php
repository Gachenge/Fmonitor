@extends('layouts.app')

@section('title', 'Our Team — Fmonitor Institute')

@section('content')
    <div>
<div class="team-grid">
            <div class="card">
                <div class="card-top">
                     <img
        src="{{ asset('images/profilePic.webp') }}"
        alt="Campus life"
        class="hero-image rounded"
    >
                </div>
                <strong>Dr. Gichuru Maina, PhD</strong>
                <div style="color:var(--muted);margin-top:6px">Managing Director</div>
                <p style="margin-top:6px;color:var(--muted)">Experienced researcher and M&E specialist.</p>
            </div>
            <div class="card">
                 <div class="card-top">
                     <img
        src="{{ asset('images/profilePic.webp') }}"
        alt="Campus life"
        class="hero-image rounded"
    >
                </div>
                <strong>Mr. Robert Kimani</strong>
                <div style="color:var(--muted);margin-top:6px">Director of Training</div>
                <p style="margin-top:6px;color:var(--muted)">Capacity building and course design expert.</p>
            </div>
            <div class="card">
                 <div class="card-top">
                     <img
        src="{{ asset('images/profilePic.webp') }}"
        alt="Campus life"
        class="hero-image rounded"
    >
                </div>
                <strong>Ms. Agnes Muriithi</strong>
                <div style="color:var(--muted);margin-top:6px">Chief Operations Officer</div>
                <p style="margin-top:6px;color:var(--muted)">Operations and logistics leader.</p>
            </div>
        </div>
    </div>
@endsection
