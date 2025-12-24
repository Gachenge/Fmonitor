@extends('layouts.app')

@section('title', 'Contact — Fmonitor Institute')

@section('content')
<div style="background:var(--card); padding:30px; border-radius:12px; border:1px solid #e6eef8; max-width:800px; margin:0 auto;">
    <h2>Contact Us</h2>

    <div style="margin-top:16px; color:var(--muted); line-height:1.6;">
        <p>Email: <a href="mailto:admissions@fmonitor.co.ke">admissions@fmonitor.co.ke</a></p>
        <p>Phone: <a href="tel:+25551234567">(555) 123-4567</a></p>
        <p>Location: Nairobi, Kenya</p>
    </div>

    <hr style="margin:24px 0; border-color:#e6eef8;">

    <div>
        <h3 style="margin-bottom:12px;">Connect with us on social media</h3>
        <div style="display:flex; gap:16px; align-items:center;">
            <a href="https://www.linkedin.com/in/fmonitor" target="_blank" style="color:var(--accent); font-size:20px;">LinkedIn</a>
            <a href="https://www.facebook.com/fmonitor" target="_blank" style="color:var(--accent); font-size:20px;">Facebook</a>
            <a href="https://www.twitter.com/fmonitor" target="_blank" style="color:var(--accent); font-size:20px;">Twitter</a>
            <a href="https://www.instagram.com/fmonitor" target="_blank" style="color:var(--accent); font-size:20px;">Instagram</a>
        </div>
    </div>
</div>
@endsection
