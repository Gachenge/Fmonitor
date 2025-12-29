@extends('layouts.app')

@section('title', 'Fmonitor Institute')
@section('fullwidth')
<section class="hero hero--fullbg">
    <div class="hero-bg"
    style='background-image: url("{{ asset("images/hero.jpeg") }}");'></div>

    <div class="hero-inner hero-inner--centered">
        <div class="hero-content hero-content--centered">
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
    </div>
</section>

@endsection
@section('content')
        <div class="kicker">Some of our courses</div>
 <section id="programs" class="programs-carousel">
    <div class="carousel-wrapper">
        <button class="carousel-nav prev" aria-label="Previous">&#10094;</button>

        <div class="carousel-track">
            <!-- Slide 1 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Results-Based Monitoring and Evaluation (RBM&E)</h3>
                    <p class="muted">Learn how to plan, track, and measure results using outcomes, indicators, and performance frameworks to improve project effectiveness.</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Resource Mobilization and Fundraising</h3>
                    <p class="muted">Build practical skills to identify funding opportunities, write winning proposals, and develop sustainable fundraising strategies.</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Risk Management</h3>
                    <p class="muted">Understand how to identify, assess, and manage risks to protect projects, organizations, and strategic objectives.</p>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Strategic Management</h3>
                    <p class="muted">Develop skills to design, implement, and evaluate strategies that drive organizational growth and long-term success.</p>
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Leadership and Management</h3>
                    <p class="muted">Strengthen leadership capabilities and management practices to lead teams effectively and achieve organizational goals.</p>
                </div>
            </div>

            <!-- Slide 6 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Data Analysis Software Training (SPSS, STATA, Excel, Power BI, etc.)</h3>
                    <p class="muted">Gain hands-on training in data analysis tools to collect, analyze, visualize, and interpret data for informed decision-making.</p>
                </div>
            </div>

            <!-- Slide 7 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Project Performance Evaluation</h3>
                    <p class="muted">Learn how to assess project efficiency, effectiveness, relevance, and sustainability using evaluation frameworks and tools.</p>
                </div>
            </div>

            <!-- Slide 8 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>M&E for Community Projects</h3>
                    <p class="muted">Build skills to design and implement M&E systems tailored to community-based and grassroots development projects.</p>
                </div>
            </div>

            <!-- Slide 9 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Project Management, Monitoring and Evaluation</h3>
                    <p class="muted">Master the full project cycle—from planning and implementation to monitoring, evaluation, and reporting.</p>
                </div>
            </div>

            <!-- Slide 10 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Monitoring and Evaluation for Humanitarian Interventions</h3>
                    <p class="muted">Develop M&E skills suited for emergency and humanitarian contexts, focusing on accountability, learning, and results.</p>
                </div>
            </div>

            <!-- Slide 11 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Monitoring and Evaluation for Effective Governance Programs</h3>
                    <p class="muted">Learn how to track and evaluate governance initiatives to promote transparency, accountability, and service delivery.</p>
                </div>
            </div>

            <!-- Slide 12 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Impact Evaluation for Evidence-Based Development</h3>
                    <p class="muted">Understand impact evaluation methods to measure long-term outcomes and inform policy and development decisions.</p>
                </div>
            </div>

            <!-- Slide 13 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Participatory Monitoring and Evaluation</h3>
                    <p class="muted">Learn participatory approaches that actively engage stakeholders and communities in tracking and evaluating projects.</p>
                </div>
            </div>

            <!-- Slide 14 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Project Monitoring and Evaluation with Data Management and Analysis</h3>
                    <p class="muted">Gain practical skills in managing M&E data, analyzing results, and producing evidence-based reports.</p>
                </div>
            </div>

            <!-- Slide 15 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Project Design Using Logframe Approach</h3>
                    <p class="muted">Learn how to design clear, results-focused projects using logical frameworks, indicators, and assumptions.</p>
                </div>
            </div>

            <!-- Slide 16 -->
            <div class="carousel-slide">
                <div class="prog">
                    <h3>Gender Responsive Monitoring and Evaluation</h3>
                    <p class="muted">Develop skills to integrate gender perspectives into M&E systems for inclusive and equitable development outcomes.</p>
                </div>
            </div>
        </div>

        <button class="carousel-nav next" aria-label="Next">&#10095;</button>
    </div>
</section>

        <div class="kicker">What our clients are saying</div>
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
        <div class="kicker">Contact us</div>
    <section id="contact" class="contact-section" style="padding: 80px 20px; background: #f3fbfb;">
    <div class="container" style="max-width:1100px; margin:0 auto; display:flex; gap:40px; flex-wrap:wrap;">
        <!-- Left Column: Contact Info & Socials -->
        <div class="col-6" style="flex:2; min-width:300px;">
            <div class="cta-sub" style="margin-bottom:24px; color:var(--muted); line-height:1.6;">
                Contact admissions to schedule a one-on-one advising call or connect with us on social media.
            </div>

            <div class="contact-info" style="margin-bottom:24px;">
                <p><span style="font-weight:600;">Email:</span> <a href="mailto:admissions@fmonitor.edu" style="color:var(--accent);">admissions@fmonitor.edu</a></p>
                <p><span style="font-weight:600;">Phone:</span> +254 721 782738 | +254 723623506</p>
                <p><span style="font-weight:600;">P.O Box:</span>27660-00100 GPO</p>
                <p><span style="font-weight:600;">Location:</span> Nairobi, Kenya</p>
            </div>

            <div class="social-links" style="display:flex; gap:16px; font-size:1.5rem;">
                <a href="https://www.linkedin.com/in/fmonitor" target="_blank" title="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M4.98 3.5C3.34 3.5 2 4.84 2 6.48c0 1.64 1.34 2.98 2.98 2.98s2.98-1.34 2.98-2.98c0-1.64-1.34-2.98-2.98-2.98zM2 21h6v-12H2v12zm7 0h6v-6c0-1.1.9-2 2-2s2 .9 2 2v6h6v-7c0-3.86-3.14-7-7-7s-7 3.14-7 7v7z"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/fmonitor" target="_blank" title="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.99 3.66 9.12 8.44 9.88v-6.99H7.9v-2.89h2.54V9.77c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.89h-2.34v6.99C18.34 21.12 22 16.99 22 12z"/>
                    </svg>
                </a>
                <a href="https://www.twitter.com/fmonitor" target="_blank" title="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 0 0 1.88-2.37 8.6 8.6 0 0 1-2.73 1.05 4.28 4.28 0 0 0-7.3 3.9A12.14 12.14 0 0 1 3.16 4.1a4.28 4.28 0 0 0 1.32 5.71c-.66-.02-1.28-.2-1.82-.5v.05a4.28 4.28 0 0 0 3.44 4.19c-.33.09-.68.13-1.04.13-.25 0-.49-.02-.72-.07a4.28 4.28 0 0 0 3.99 2.97 8.57 8.57 0 0 1-5.3 1.83c-.34 0-.67-.02-1-.06a12.08 12.08 0 0 0 6.55 1.92c7.87 0 12.18-6.52 12.18-12.18 0-.19-.01-.38-.02-.57A8.7 8.7 0 0 0 22.46 6z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/fmonitor" target="_blank" title="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M7.75 2h8.5C19.55 2 22 4.45 22 7.75v8.5c0 3.3-2.45 5.75-5.75 5.75h-8.5C4.45 22 2 19.55 2 16.25v-8.5C2 4.45 4.45 2 7.75 2zm0 1.5C5.68 3.5 4 5.18 4 7.25v8.5C4 18.32 5.68 20 7.75 20h8.5c2.07 0 3.75-1.68 3.75-3.75v-8.5c0-2.07-1.68-3.75-3.75-3.75h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zm4.75-.88a1.12 1.12 0 1 1 0 2.24 1.12 1.12 0 0 1 0-2.24z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Right Column: Contact Form -->
        <div class="col-6" style="flex:1; min-width:280px; background:#fff; border-radius:12px; padding:32px; box-shadow:0 16px 32px rgba(0,0,0,0.06);">
            <form method="POST" style="display:flex; flex-direction:column; gap:16px;">
                @csrf
                <div>
                    <label for="name" style="font-weight:600;">Name</label>
                    <input type="text" id="name" name="name" required style="width:100%; padding:10px; border-radius:8px; border:1px solid #d1d5db;">
                </div>
                <div>
                    <label for="email" style="font-weight:600;">Email</label>
                    <input type="email" id="email" name="email" required style="width:100%; padding:10px; border-radius:8px; border:1px solid #d1d5db;">
                </div>
                <div>
                    <label for="message" style="font-weight:600;">Message</label>
                    <textarea id="message" name="message" rows="4" required style="width:100%; padding:10px; border-radius:8px; border:1px solid #d1d5db;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top:12px;">Send Message</button>
            </form>
        </div>

    </div>

    <!-- Mini Map -->
    <div style="margin-top:40px; display:flex; justify-content:center;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.123456789!2d36.8219!3d-1.2921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a1a1a1a1a1a%3A0x1a1a1a1a1a1a1a1a!2sFmonitor%20Institute!5e0!3m2!1sen!2ske!4v1700000000000!5m2!1sen!2ske" 
            width="600" height="300" style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>


@endsection