@extends('layouts.app')

@section('title', 'Our Team — Fmonitor Institute')

@section('content')
    <div>
        <h2>Leadership & Management</h2>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:12px">
            <div class="card">
                <strong>Dr. Gichuru Maina, PhD</strong>
                <div style="color:var(--muted);margin-top:6px">Managing Director</div>
                <p style="margin-top:6px;color:var(--muted)">Experienced researcher and M&E specialist.</p>
            </div>
            <div class="card">
                <strong>Mr. Robert Kimani</strong>
                <div style="color:var(--muted);margin-top:6px">Director of Training</div>
                <p style="margin-top:6px;color:var(--muted)">Capacity building and course design expert.</p>
            </div>
            <div class="card">
                <strong>Ms. Agnes Muriithi</strong>
                <div style="color:var(--muted);margin-top:6px">Chief Operations Officer</div>
                <p style="margin-top:6px;color:var(--muted)">Operations and logistics leader.</p>
            </div>
        </div>
    </div>
@endsection
