<?php
include_once __DIR__ . '/includes/header.php';
?>

<section class="py-4 bg-danger text-white">
    <div class="container">
        <div class="d-flex align-items-center gap-3">
            <div class="bg-white text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem; font-weight: 800;">
                6
            </div>
            <div>
                <span class="badge bg-warning text-dark font-weight-bold">STAGE 6 OF 6</span>
                <h2 class="fw-bold mb-0 text-white">Support Me — 24/7 AI Multilingual Helpdesk</h2>
                <small class="text-white-50">Full mentorship and technical support whenever candidates face any problem or get stuck</small>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">
        <!-- AI Helpdesk Assistant -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm p-4 bg-white mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold text-dark mb-0"><i class="fa-solid fa-headset text-danger me-2"></i> GYRS 24/7 AI Mentorship Helpdesk</h4>
                    <span class="badge bg-success"><i class="fa-solid fa-circle me-1 small"></i> AI Bot Online</span>
                </div>
                <p class="text-muted small">Ask any question in Gujarati, English, or Hindi regarding stage progression, stipend, or District Employment Officers.</p>

                <div class="p-3 bg-light rounded mb-3" style="min-height: 220px; max-height: 300px; overflow-y: auto;">
                    <div class="chat-bubble bot mb-2">
                        <strong>GYRS Support AI:</strong> Namaste Prakash! I see you are at Stage 5 in Gandhinagar District. How can I assist your career growth today?
                    </div>
                </div>

                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Type your problem e.g. How to change my registered district?" id="supportQuery">
                    <button class="btn btn-danger font-weight-bold px-4" type="button" onclick="alert('Support Request Processed! Our AI Assistant and District Employment Officer have received your request.');">
                        <i class="fa-solid fa-paper-plane me-1"></i> Send Support Query
                    </button>
                </div>
            </div>

            <!-- Submit Ticket to Human Mentor -->
            <div class="card border-0 shadow-sm p-4 bg-white">
                <h4 class="fw-bold text-dark mb-3"><i class="fa-solid fa-ticket text-warning me-2"></i> Escalation: Submit Ticket to Human Mentor</h4>
                <p class="text-muted small mb-3">If the AI assistant could not resolve your query, submit a ticket to your District Employment Officer.</p>

                <form onsubmit="event.preventDefault(); alert('Ticket #GYRS-8492 Logged Successfully! District Employment Officer Gandhinagar will contact you on WhatsApp.');">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Select Problem Category</label>
                            <select class="form-select" required>
                                <option value="Profile Correction">Profile / Document Correction</option>
                                <option value="Roadmap Query">Roadmap Guidance Clarification</option>
                                <option value="Recruiter Issue">Recruiter Interview Escalation</option>
                                <option value="Other">Other Query</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Assigned District Office</label>
                            <input type="text" class="form-control" value="Gandhinagar District Employment Office" readonly>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-bold">Describe Your Issue in Detail</label>
                            <textarea class="form-control" rows="3" placeholder="Describe the issue you are facing..." required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning font-weight-bold px-4">
                                <i class="fa-solid fa-envelope-open-text me-1"></i> Submit Escalation Ticket
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Helpline Info Sidebar -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm p-4 bg-dark text-white mb-4">
                <h5 class="fw-bold text-warning mb-3"><i class="fa-solid fa-phone me-2"></i> Direct State Helpline</h5>
                <p class="text-white-50 small mb-2">Toll-Free Youth Assistance:</p>
                <h3 class="text-white fw-bold mb-3">1800-233-5500</h3>
                <p class="small text-white-50"><i class="fa-solid fa-clock me-1 text-warning"></i> Monday to Saturday: 9:00 AM to 6:00 PM</p>
            </div>

            <div class="card border-0 shadow-sm p-4 bg-light">
                <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-map-location-dot text-primary me-2"></i> District Helpline Network</h5>
                <p class="text-muted small mb-0">All 33 Districts in Gujarat have dedicated employment helpdesks linked directly with GYRS AI portal.</p>
            </div>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
