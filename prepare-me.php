<?php
include_once __DIR__ . '/includes/header.php';
?>

<section class="py-4 bg-warning text-dark">
    <div class="container">
        <div class="d-flex align-items-center gap-3">
            <div class="bg-dark text-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem; font-weight: 800;">
                3
            </div>
            <div>
                <span class="badge bg-dark text-warning font-weight-bold">STAGE 3 OF 6</span>
                <h2 class="fw-bold mb-0 text-dark">Prepare Me — Upskilling &amp; Mock Tests</h2>
                <small class="text-dark-50">Prepare for your next milestone with state-recognized courses and AI mock assessments</small>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <!-- Courses & Upskilling Catalog -->
        <div class="col-lg-8">
            <h4 class="fw-bold text-dark mb-4"><i class="fa-solid fa-graduation-cap text-warning me-2"></i> Recommended Skill Courses for You</h4>

            <div class="card border-0 shadow-sm p-4 mb-3">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <span class="badge bg-primary mb-2">Kaushalya Skill University Certified</span>
                        <h5 class="fw-bold text-dark mb-1">Advanced PHP 8.3 &amp; Laravel Web Architecture</h5>
                        <p class="text-muted small mb-0"><i class="fa-solid fa-clock me-1"></i> Duration: 4 Weeks | Online &amp; Practical | Free for Gujarat Youth</p>
                    </div>
                    <button class="btn btn-outline-primary fw-bold px-4" onclick="alert('Enrolled in Advanced Laravel Course successfully!');">Enroll Free</button>
                </div>
            </div>

            <div class="card border-0 shadow-sm p-4 mb-3">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <span class="badge bg-success mb-2">Government of India Swayam / NPTEL</span>
                        <h5 class="fw-bold text-dark mb-1">Cloud Deployment &amp; Redis Queue Architecture</h5>
                        <p class="text-muted small mb-0"><i class="fa-solid fa-clock me-1"></i> Duration: 2 Weeks | Self-Paced | Verified Certificate</p>
                    </div>
                    <button class="btn btn-outline-success fw-bold px-4" onclick="alert('Enrolled in Cloud Architecture Course!');">Enroll Free</button>
                </div>
            </div>

            <div class="card border-0 shadow-sm p-4 mb-4">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div>
                        <span class="badge bg-info mb-2">Industry Partner Module</span>
                        <h5 class="fw-bold text-dark mb-1">Meta WhatsApp Cloud API Integration &amp; Webhooks</h5>
                        <p class="text-muted small mb-0"><i class="fa-solid fa-clock me-1"></i> Duration: 1 Week | Hands-on Project</p>
                    </div>
                    <button class="btn btn-outline-info fw-bold px-4" onclick="alert('Enrolled in WhatsApp Integration Project!');">Enroll Free</button>
                </div>
            </div>

            <!-- AI Resume Scorer Box -->
            <div class="card border-0 shadow-sm p-4 bg-light">
                <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-file-invoice text-primary me-2"></i> AI Resume Scorer &amp; Optimizer</h5>
                <p class="text-muted small">Upload your resume to get instant AI recommendations for improving recruiter response rates in Gujarat.</p>

                <div class="mb-3">
                    <input class="form-control form-control-lg" type="file" id="resumeUploadInput">
                </div>
                <button class="btn btn-primary fw-bold" onclick="alert('AI Resume Score: 88/100! Suggestion: Add Laravel Horizon & Redis Queue projects to boost recruiter match score to 95%.');">
                    <i class="fa-solid fa-magnifying-glass me-1"></i> Scan Resume with AI
                </button>
            </div>
        </div>

        <!-- Interactive AI Mock Test Widget Sidebar -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-4 bg-white mb-4">
                <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-vial text-warning me-2"></i> Live AI Mock Test</h5>
                <p class="text-muted small">Test your knowledge before matching with job recruiters.</p>

                <div class="p-3 bg-light rounded mb-3">
                    <strong class="d-block text-dark mb-2">Sample Question (Laravel Core):</strong>
                    <p class="small text-muted mb-3">Which command is used to launch Laravel Horizon queue monitoring?</p>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="mockQ1" id="q1a">
                        <label class="form-check-label small" for="q1a">php artisan queue:work</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="mockQ1" id="q1b" checked>
                        <label class="form-check-label small text-primary fw-bold" for="q1b">php artisan horizon</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="mockQ1" id="q1c">
                        <label class="form-check-label small" for="q1c">php artisan serve</label>
                    </div>
                </div>

                <button class="btn btn-warning w-100 fw-bold shadow-sm" onclick="alert('Correct Answer! score: 100%. Your skill badge has been updated.');">
                    Submit Test &amp; Update Skill Badge
                </button>
            </div>

            <div class="card border-0 shadow-sm p-4 bg-success text-white">
                <h5 class="fw-bold text-white mb-2"><i class="fa-solid fa-circle-check me-2"></i> Ready for Job Matching?</h5>
                <p class="text-white-50 small mb-3">After completing Stage 3, your profile is eligible for automatic WhatsApp job notifications in Stage 4.</p>
                <a href="connect-me.php" class="btn btn-light fw-bold text-success w-100">
                    Proceed to Stage 4 (Connect Me) <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
