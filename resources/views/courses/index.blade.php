@extends('layouts.app')

@section('title', 'Courses — Fmonitor Institute')

@section('content')
    <div style="display:flex;flex-direction:column;gap:12px">
        <h2>Courses & Training</h2>
        <p style="color:var(--muted)">Browse our professional short courses. Click a course for details and registration.</p>

        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-top:12px">
            <div class="prog">
                <h4>Results-Based M&E</h4>
                <p style="color:var(--muted);margin-top:8px">Overview, learning objectives, participants, duration, and
                    certification.</p>
            </div>
            <div class="prog">
                <h4>Resource Mobilization</h4>
                <p style="color:var(--muted);margin-top:8px">Proposal writing, donor mapping and fundraising strategies.</p>
            </div>
        </div>
    </div>
@endsection
