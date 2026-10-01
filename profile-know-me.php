<?php
include_once __DIR__ . '/includes/header.php';
?>

<section class="py-4 bg-primary text-white">
    <div class="container">
        <div class="d-flex align-items-center gap-3">
            <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem; font-weight: 800;">
                1
            </div>
            <div>
                <span class="badge bg-warning text-dark font-weight-bold">STAGE 1 OF 6</span>
                <h2 class="fw-bold mb-0 text-white">Know Me — Profile &amp; Verification</h2>
                <small class="text-white-50">Enter your complete educational, personal, and district details for AI analysis</small>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <!-- Main Form Column -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4">
                <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-user-pen text-primary me-2"></i> Candidate Registration Form</h4>
                <p class="text-muted small mb-4">All entries marked with <span class="text-danger">*</span> are mandatory for generating your personalized AI roadmap.</p>

                <form onsubmit="event.preventDefault(); alert('Profile Saved Successfully! Proceeding to Stage 2: Guide Me.'); window.location.href='guide-me.php';">
                    <!-- Personal Details -->
                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">1. Personal Information</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Full Name (As per Aadhaar/10th Marksheet) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="e.g. Zinzuvadiya Prakash B." required value="Prakash Zinzuvadiya">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Registered Mobile (WhatsApp Enabled) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">+91</span>
                                <input type="tel" class="form-control" value="9876543210" required readonly>
                                <span class="input-group-text bg-success text-white" title="WhatsApp Verified"><i class="fa-brands fa-whatsapp me-1"></i> Verified</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control" placeholder="name@example.com" value="prakash@example.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Gender <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Regional Details (Gujarat Specific) -->
                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">2. Gujarat Location &amp; Address</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Select District <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">-- Choose District --</option>
                                <?php foreach ($gujarat_districts as $district): ?>
                                    <option value="<?php echo $district; ?>" <?php echo $district == 'Gandhinagar' ? 'selected' : ''; ?>><?php echo $district; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Taluka / Sector <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="e.g. Gandhinagar City / Kalol" value="Gandhinagar Sector-10" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Full Residential Address</label>
                            <textarea class="form-control" rows="2" placeholder="House/Flat No, Street, Landmark">Plot 104, Sector 10, Gandhinagar, Gujarat 382010</textarea>
                        </div>
                    </div>

                    <!-- Academic & Skill Info -->
                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">3. Educational Qualification &amp; Current Status</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Highest Qualification <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="10th Pass">10th Standard Pass</option>
                                <option value="12th Pass">12th Standard Pass</option>
                                <option value="ITI Apprentice">ITI Certified Apprentice</option>
                                <option value="Diploma Engineering">Diploma Engineering</option>
                                <option value="B.E. / B.Tech" selected>B.E. / B.Tech (Computer Science / IT)</option>
                                <option value="Post Graduate">Post Graduate / M.Tech / MBA</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Current Employment Status <span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="Unemployed Looking for Job" selected>Unemployed - Actively Seeking Job</option>
                                <option value="Final Year Student">Final Year Student</option>
                                <option value="Employed Looking for Transition">Employed - Seeking Better Role</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Current Primary Skills (Comma Separated) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="PHP, Laravel, HTML5, CSS3, JavaScript, MySQL" placeholder="e.g. PHP, Laravel, Electrical Fitting, Web Design" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <span class="text-muted small"><i class="fa-solid fa-lock text-success me-1"></i> Data protected under DPDP Privacy Act</span>
                        <button type="submit" class="btn btn-warning btn-lg fw-bold px-5">
                            Save Profile &amp; Go to Stage 2 (Guide Me) <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Sidebar Helper Column -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-4 mb-4 bg-white">
                <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-circle-info text-info me-2"></i> Why Stage 1 is Critical</h5>
                <p class="text-muted small">
                    Your profile information is processed by our <strong>AI Vector Match Engine</strong> to recommend tailored skill courses, calculate compatibility scores with active recruiters, and send targeted WhatsApp notifications.
                </p>
                <div class="p-3 bg-light rounded border">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="fa-brands fa-whatsapp text-success fs-4"></i>
                        <strong class="small text-dark">WhatsApp Status</strong>
                    </div>
                    <span class="badge bg-success w-100 py-2">✓ Registered &amp; Verified</span>
                </div>
            </div>

            <div class="card border-0 shadow-sm p-4 bg-primary text-white">
                <h5 class="fw-bold text-white mb-2"><i class="fa-solid fa-headset me-2"></i> Need Help Filling Form?</h5>
                <p class="text-white-50 small mb-3">Our 24/7 AI mentor is ready to assist you in English, Gujarati, or Hindi.</p>
                <button class="btn btn-light btn-sm fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#aiChatModal">
                    <i class="fa-solid fa-robot me-1"></i> Ask AI Assistant
                </button>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
