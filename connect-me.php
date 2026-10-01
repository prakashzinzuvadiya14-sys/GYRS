<?php
include_once __DIR__ . '/includes/header.php';
?>

<section class="py-4 bg-success text-white">
    <div class="container">
        <div class="d-flex align-items-center gap-3">
            <div class="bg-white text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem; font-weight: 800;">
                4
            </div>
            <div>
                <span class="badge bg-warning text-dark font-weight-bold">STAGE 4 OF 6</span>
                <h2 class="fw-bold mb-0 text-white">Connect Me — Vector Job &amp; Role Matcher</h2>
                <small class="text-white-50">AI matches completed candidate roadmaps with top hiring companies across Gujarat</small>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <!-- Filter Bar -->
    <div class="card border-0 shadow-sm p-4 mb-4 bg-white">
        <div class="row g-3 align-items-center">
            <div class="col-md-4">
                <label class="form-label small fw-bold text-muted">FILTER BY DISTRICT</label>
                <select class="form-select">
                    <option value="">All Gujarat Districts (33)</option>
                    <?php foreach ($gujarat_districts as $district): ?>
                        <option value="<?php echo $district; ?>"><?php echo $district; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold text-muted">JOB CATEGORY</label>
                <select class="form-select">
                    <option value="">All Categories</option>
                    <option value="Information Technology" selected>Information Technology &amp; Software</option>
                    <option value="Manufacturing">Manufacturing &amp; Automation</option>
                    <option value="Renewable Energy">Renewable Energy</option>
                    <option value="Textile">Textile &amp; Apparel</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold text-muted">MINIMUM AI MATCH SCORE</label>
                <select class="form-select">
                    <option value="80" selected>>80% Compatibility (Auto WhatsApp Alert Trigger)</option>
                    <option value="90">>90% High Compatibility</option>
                    <option value="0">Show All Jobs</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Active Matched Jobs List -->
    <h4 class="fw-bold text-dark mb-4"><i class="fa-solid fa-briefcase text-success me-2"></i> AI Matched Job Listings for Your Profile</h4>

    <div class="row g-4">
        <?php foreach ($sample_jobs as $job): ?>
            <div class="col-md-6 col-lg-4">
                <div class="job-card h-100 d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge bg-light text-dark border"><i class="fa-solid fa-location-dot text-danger me-1"></i> <?php echo $job['district']; ?></span>
                        <span class="match-pill <?php echo getMatchBadgeClass($job['ai_match']); ?>">
                            <i class="fa-solid fa-bolt me-1"></i> <?php echo $job['ai_match']; ?> Match
                        </span>
                    </div>

                    <h4 class="fw-bold fs-5 text-dark mb-1"><?php echo $job['title']; ?></h4>
                    <p class="text-primary fw-medium small mb-2"><i class="fa-solid fa-building me-1"></i> <?php echo $job['company']; ?></p>
                    
                    <div class="bg-light p-2 rounded mb-3 small">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="text-muted">Package:</span>
                            <strong class="text-dark"><?php echo $job['salary']; ?></strong>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Type:</span>
                            <strong class="text-dark"><?php echo $job['type']; ?></strong>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-1 mb-4 flex-grow-1">
                        <?php foreach ($job['skills'] as $skill): ?>
                            <span class="badge bg-secondary-subtle text-secondary small"><?php echo $skill; ?></span>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-auto">
                        <button class="btn btn-success w-100 fw-bold shadow-sm" onclick="showNotificationToast('Job Application Submitted!', 'Your profile was sent to <?php echo addslashes($job['company']); ?>. You will receive interview updates on WhatsApp.');">
                            <i class="fa-solid fa-paper-plane me-1"></i> Quick Apply via WhatsApp
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Transition Banner -->
    <div class="card border-0 shadow-sm p-4 mt-5 bg-dark text-white">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h4 class="fw-bold text-white mb-2"><i class="fa-solid fa-user-check text-purple me-2" style="color: #A78BFA;"></i> Applied for Jobs? Next: Stage 5 (Employ Me)</h4>
                <p class="text-white-50 mb-0">Prepare for your recruiter interviews with our AI Interview Prep Simulator and track your application pipeline.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <a href="employ-me.php" class="btn btn-warning btn-lg fw-bold px-4">
                    Go to Stage 5 (Employ Me) <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
