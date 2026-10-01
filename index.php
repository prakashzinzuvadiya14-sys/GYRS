<?php
include_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="hero-badge">
                    <i class="fa-solid fa-wand-magic-sparkles text-warning"></i> AI-POWERED STATE YOUTH EMPOWERMENT PORTAL
                </div>
                <h1 class="hero-title">
                    Empowering Gujarat’s Youth with <span>AI-Driven Career Roadmaps</span> &amp; Direct Jobs
                </h1>
                <p class="hero-lead">
                    Gujarat Yuva Rojgar System (GYRS) guides candidates through 6 AI-driven stages — from profile verification and AI roadmaps to skill preparation, vector job matching, recruiter placement, and 24/7 mentorship.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="profile-know-me.php" class="btn btn-warning btn-lg fw-bold px-4 py-3 shadow">
                        <i class="fa-solid fa-user-plus me-2"></i> Start Stage 1: Know Me
                    </a>
                    <a href="guide-me.php" class="btn btn-outline-light btn-lg fw-bold px-4 py-3">
                        <i class="fa-solid fa-compass me-2 text-info"></i> Explore AI Roadmaps
                    </a>
                </div>

                <div class="d-flex align-items-center gap-4 text-white-50 small">
                    <div><i class="fa-brands fa-whatsapp text-success me-1 fs-5"></i> Mandatory WhatsApp OTP Auth</div>
                    <div><i class="fa-solid fa-bolt text-warning me-1"></i> AI Match Score Enabled</div>
                </div>
            </div>

            <!-- Quick Mobile Auth Box -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-lg p-4 text-dark" style="border-radius: 20px; background: rgba(255, 255, 255, 0.96); backdrop-filter: blur(10px);">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; font-size: 1.4rem;">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0 text-dark">Mobile OTP Login</h5>
                            <small class="text-muted">Instant Access via WhatsApp OTP</small>
                        </div>
                    </div>

                    <form onsubmit="event.preventDefault(); sendWhatsAppOtp();">
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">ENTER MOBILE NUMBER</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted fw-bold">+91</span>
                                <input type="tel" class="form-control form-control-lg" id="heroMobileNum" placeholder="9876543210" maxlength="10" value="9876543210">
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary btn-lg w-100 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#otpAuthModal">
                            <i class="fa-solid fa-paper-plane me-2"></i> Verify via WhatsApp OTP
                        </button>
                    </form>
                    
                    <div class="mt-3 p-2 bg-light rounded text-center small text-muted">
                        <i class="fa-solid fa-shield-halved me-1 text-success"></i> Official Government Authentication Gateway
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Live Portal Stats Bar -->
<section class="py-4 bg-white border-bottom">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="stats-card text-center">
                    <div class="stats-icon bg-primary-subtle text-primary mx-auto">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="stats-number">450,000+</div>
                    <div class="stats-label">Registered Youth</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stats-card text-center">
                    <div class="stats-icon bg-info-subtle text-info mx-auto">
                        <i class="fa-solid fa-route"></i>
                    </div>
                    <div class="stats-number">120,000+</div>
                    <div class="stats-label">AI Roadmaps Created</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stats-card text-center">
                    <div class="stats-icon bg-success-subtle text-success mx-auto">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <div class="stats-number">1,420+</div>
                    <div class="stats-label">GIDC &amp; Corporate Recruiters</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stats-card text-center">
                    <div class="stats-icon bg-warning-subtle text-warning mx-auto">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <div class="stats-number">85,000+</div>
                    <div class="stats-label">Candidates Placed</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6 AI STAGES GATEWAY SHOWCASE -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-5">
            <span class="badge bg-primary px-3 py-2 text-uppercase mb-2">Structured Career Progression</span>
            <h2 class="fw-bold text-dark">The 6 AI-Driven Stages of GYRS</h2>
            <p class="text-muted">
                Our artificial intelligence engine guides every candidate systematically through 6 comprehensive phases.
            </p>
        </div>

        <div class="row g-4">
            <!-- Stage 1: Know Me -->
            <div class="col-md-6 col-lg-4">
                <div class="stage-card stage-1">
                    <div class="stage-number-badge">01</div>
                    <div class="stage-icon-wrapper">
                        <i class="fa-solid fa-id-card"></i>
                    </div>
                    <h3 class="stage-title">1. Know Me</h3>
                    <p class="stage-description">
                        Candidate profile creation with mandatory WhatsApp OTP verification. Enter qualifications, district, taluka, education history, and current employment state.
                    </p>
                    <a href="profile-know-me.php" class="btn btn-outline-primary btn-stage">
                        Build Profile <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Stage 2: Guide Me -->
            <div class="col-md-6 col-lg-4">
                <div class="stage-card stage-2">
                    <div class="stage-number-badge">02</div>
                    <div class="stage-icon-wrapper">
                        <i class="fa-solid fa-compass"></i>
                    </div>
                    <h3 class="stage-title">2. Guide Me</h3>
                    <p class="stage-description">
                        AI-driven skill evaluation and tailored career roadmap generator matching candidate abilities with industrial requirements across Gujarat.
                    </p>
                    <a href="guide-me.php" class="btn btn-outline-info btn-stage">
                        Generate AI Roadmap <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Stage 3: Prepare Me -->
            <div class="col-md-6 col-lg-4">
                <div class="stage-card stage-3">
                    <div class="stage-number-badge">03</div>
                    <div class="stage-icon-wrapper">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="stage-title">3. Prepare Me</h3>
                    <p class="stage-description">
                        Prepares candidates for their next milestone with recommended courses (NPTEL, Kaushalya Skill University), AI mock tests, and resume scoring.
                    </p>
                    <a href="prepare-me.php" class="btn btn-outline-warning btn-stage">
                        Start Upskilling <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Stage 4: Connect Me -->
            <div class="col-md-6 col-lg-4">
                <div class="stage-card stage-4">
                    <div class="stage-number-badge">04</div>
                    <div class="stage-icon-wrapper">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h3 class="stage-title">4. Connect Me</h3>
                    <p class="stage-description">
                        Vector AI job matching engine connecting completed candidate roadmaps with active job listings, triggering instant WhatsApp notifications for >80% matches.
                    </p>
                    <a href="connect-me.php" class="btn btn-outline-success btn-stage">
                        View Matched Jobs <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Stage 5: Employ Me -->
            <div class="col-md-6 col-lg-4">
                <div class="stage-card stage-5">
                    <div class="stage-number-badge">05</div>
                    <div class="stage-icon-wrapper">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                    <h3 class="stage-title">5. Employ Me</h3>
                    <p class="stage-description">
                        Recruiter pipeline connecting job seekers with hiring companies. Features AI mock interview prep, offer letter tracking, and placement support.
                    </p>
                    <a href="employ-me.php" class="btn btn-outline-purple btn-stage" style="border-color: #7C3AED; color: #7C3AED;">
                        Recruiter Pipeline <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Stage 6: Support Me -->
            <div class="col-md-6 col-lg-4">
                <div class="stage-card stage-6">
                    <div class="stage-number-badge">06</div>
                    <div class="stage-icon-wrapper">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3 class="stage-title">6. Support Me</h3>
                    <p class="stage-description">
                        24/7 Multilingual AI Assistant and human mentorship network supporting candidates whenever stuck during any phase of their growth journey.
                    </p>
                    <a href="support-me.php" class="btn btn-outline-danger btn-stage">
                        Get 24/7 AI Support <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Active Job Vacancies Showcase -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            <div>
                <span class="badge bg-success px-3 py-1 mb-2">Live Industry Openings</span>
                <h2 class="fw-bold text-dark mb-0">Active Job Vacancies in Gujarat</h2>
            </div>
            <a href="connect-me.php" class="btn btn-primary font-weight-bold mt-3 mt-md-0">
                View All Vacancies <i class="fa-solid fa-arrow-right me-1"></i>
            </a>
        </div>

        <div class="row g-4">
            <?php foreach (array_slice($sample_jobs, 0, 3) as $job): ?>
                <div class="col-lg-4">
                    <div class="job-card">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <span class="badge bg-light text-dark border"><i class="fa-solid fa-location-dot text-danger me-1"></i> <?php echo $job['district']; ?></span>
                            <span class="match-pill <?php echo getMatchBadgeClass($job['ai_match']); ?>">
                                <i class="fa-solid fa-bolt me-1"></i> <?php echo $job['ai_match']; ?> AI Match
                            </span>
                        </div>
                        <h4 class="fw-bold fs-5 text-dark mb-1"><?php echo $job['title']; ?></h4>
                        <p class="text-primary fw-medium small mb-3"><i class="fa-solid fa-building me-1"></i> <?php echo $job['company']; ?></p>
                        
                        <div class="bg-light p-2 rounded mb-3 small">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="text-muted">Salary:</span>
                                <strong class="text-dark"><?php echo $job['salary']; ?></strong>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">Experience:</span>
                                <strong class="text-dark"><?php echo $job['experience']; ?></strong>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <?php foreach ($job['skills'] as $skill): ?>
                                <span class="badge bg-secondary-subtle text-secondary small"><?php echo $skill; ?></span>
                            <?php endforeach; ?>
                        </div>

                        <button class="btn btn-outline-primary btn-sm w-100 fw-bold" data-bs-toggle="modal" data-bs-target="#otpAuthModal">
                            <i class="fa-brands fa-whatsapp me-1 text-success"></i> Apply via WhatsApp Auth
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
