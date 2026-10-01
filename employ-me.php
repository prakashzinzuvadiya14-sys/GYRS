<?php
include_once __DIR__ . '/includes/header.php';
?>

<section class="py-4 text-white" style="background-color: #7C3AED;">
    <div class="container">
        <div class="d-flex align-items-center gap-3">
            <div class="bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem; font-weight: 800; color: #7C3AED;">
                5
            </div>
            <div>
                <span class="badge bg-warning text-dark font-weight-bold">STAGE 5 OF 6</span>
                <h2 class="fw-bold mb-0 text-white">Employ Me — Recruiter Pipeline &amp; Interview Prep</h2>
                <small class="text-white-50">Connect with recruiters, practice AI mock interviews, and finalize your job placement</small>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <!-- AI Mock Interview Simulator -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4 bg-white mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold text-dark mb-0"><i class="fa-solid fa-microphone text-purple me-2" style="color: #7C3AED;"></i> AI Interview Preparation Simulator</h4>
                    <span class="badge bg-success">Interactive Demo</span>
                </div>
                <p class="text-muted small">Practice answering real recruiter questions for your target role. Our AI evaluates your answers for technical clarity and confidence.</p>

                <div class="p-3 bg-light rounded mb-4 border">
                    <span class="badge bg-primary mb-2">Simulated Recruiter Question:</span>
                    <h5 class="fw-bold text-dark">"How do you handle background queue jobs in Laravel using Redis and Horizon?"</h5>
                    <textarea class="form-control mt-3" rows="3" placeholder="Type your answer here..." id="interviewAnswerInput">In Laravel, background jobs are dispatched to Redis queues using dispatch(). Laravel Horizon provides a dashboard to monitor queue workers, retry failed jobs, and balance worker processes.</textarea>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <button class="btn text-white fw-bold px-4" style="background-color: #7C3AED;" onclick="alert('AI Evaluation Score: 92/100!\nFeedback: Excellent explanation of dispatch() and Horizon dashboard monitoring. Technical accuracy is top grade.');">
                        <i class="fa-solid fa-brain me-1"></i> Evaluate Answer with AI
                    </button>
                    <small class="text-muted"><i class="fa-brands fa-whatsapp text-success me-1"></i> Results synced to candidate profile</small>
                </div>
            </div>

            <!-- Recruiter Pipeline Status -->
            <div class="card border-0 shadow-sm p-4 bg-white">
                <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-list-check text-primary me-2"></i> Your Placement Pipeline Status</h4>

                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Company</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Interview Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>GIDC Tech Hub</strong></td>
                                <td>Junior Laravel Dev</td>
                                <td><span class="badge bg-success">Shortlisted</span></td>
                                <td>Tomorrow at 11:00 AM</td>
                                <td><button class="btn btn-sm btn-outline-primary" onclick="alert('Interview Confirmation sent to recruiter on WhatsApp!');">Confirm via WhatsApp</button></td>
                            </tr>
                            <tr>
                                <td><strong>Tata Motors Hub</strong></td>
                                <td>Automation Tech</td>
                                <td><span class="badge bg-warning text-dark">Under Review</span></td>
                                <td>Pending Schedule</td>
                                <td><button class="btn btn-sm btn-outline-secondary" disabled>Reviewing</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Recruiter Portal Sidebar -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-4 bg-white mb-4">
                <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-building text-purple me-2" style="color: #7C3AED;"></i> Are You a Job Recruiter?</h5>
                <p class="text-muted small">Register your company to access verified youth candidate profiles across all 33 Gujarat districts.</p>
                <button class="btn btn-outline-dark w-100 fw-bold" onclick="alert('Recruiter Registration Modal Opening...');">
                    Register as Company / Employer
                </button>
            </div>

            <div class="card border-0 shadow-sm p-4 bg-danger text-white">
                <h5 class="fw-bold text-white mb-2"><i class="fa-solid fa-headset me-2"></i> Phase 6: Ongoing Support</h5>
                <p class="text-white-50 small mb-3">Facing any issues during placement or interview setup? Our 24/7 AI Support is ready.</p>
                <a href="support-me.php" class="btn btn-light fw-bold text-danger w-100">
                    Proceed to Stage 6 (Support Me) <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
