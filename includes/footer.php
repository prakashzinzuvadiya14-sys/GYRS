<?php
// Footer Component
?>
<!-- Floating AI Chatbot Button -->
<div class="floating-ai-btn" data-bs-toggle="modal" data-bs-target="#aiChatModal" title="GYRS 24/7 AI Career Mentor">
    <i class="fa-solid fa-robot"></i>
</div>

<!-- AI Multilingual Chatbot Modal -->
<div class="modal fade" id="aiChatModal" tabindex="-1" aria-labelledby="aiChatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px;">
            <div class="modal-header text-white" style="background: linear-gradient(135deg, #1E3A8A, #7C3AED); border-top-left-radius: 16px; border-top-right-radius: 16px;">
                <h5 class="modal-title text-white d-flex align-items-center gap-2" id="aiChatModalLabel">
                    <i class="fa-solid fa-robot text-warning fs-4"></i> GYRS AI Multilingual Career &amp; Support Assistant
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body p-3">
                <div class="alert alert-info py-2 px-3 small d-flex justify-content-between align-items-center">
                    <span><i class="fa-solid fa-language me-1"></i> Supports Gujarati, English &amp; Hindi queries</span>
                    <span class="badge bg-success">AI Active</span>
                </div>
                
                <!-- Chat Message Stream -->
                <div class="ai-chat-box d-flex flex-column" id="chatBoxMessages">
                    <div class="chat-bubble bot">
                        <strong>GYRS AI Assistant:</strong> Namaste! I am your AI Career Guide for Gujarat Yuva Rojgar System. Ask me anything about your career roadmap, skill courses, job vacancies, or stage assistance!
                    </div>
                </div>
                
                <!-- Chat Prompt Input -->
                <div class="input-group mt-3">
                    <input type="text" class="form-control" id="chatUserPrompt" placeholder="Ask AI e.g. What skills do I need for IT jobs in Gandhinagar?" onkeypress="if(event.key==='Enter') sendChatMessage()">
                    <button class="btn btn-primary fw-bold px-4" type="button" onclick="sendChatMessage()">
                        <i class="fa-solid fa-paper-plane me-1"></i> Ask AI
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Footer -->
<footer class="gyrs-footer">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-lg-4">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <div class="emblem-icon" style="width: 36px; height: 36px; font-size: 1.1rem;">
                        <i class="fa-solid fa-mountain-sun"></i>
                    </div>
                    <h5 class="m-0 text-white font-weight-bold">GYRS GUJARAT</h5>
                </div>
                <p class="small text-muted mb-3">
                    Gujarat Yuva Rojgar System (GYRS) is an AI-driven state empowerment portal connecting youth with skill roadmaps, job opportunities, and recruiter networks across Gujarat.
                </p>
                <div class="d-flex gap-2">
                    <span class="badge bg-dark border text-warning"><i class="fa-solid fa-shield-halved me-1"></i> DPDP Act 2023 Compliant</span>
                    <span class="badge bg-dark border text-info"><i class="fa-brands fa-whatsapp me-1 text-success"></i> WhatsApp Verified</span>
                </div>
            </div>

            <div class="col-6 col-lg-2">
                <h5>6 AI Stages</h5>
                <ul class="footer-links">
                    <li><a href="profile-know-me.php">1. Know Me</a></li>
                    <li><a href="guide-me.php">2. Guide Me</a></li>
                    <li><a href="prepare-me.php">3. Prepare Me</a></li>
                    <li><a href="connect-me.php">4. Connect Me</a></li>
                    <li><a href="employ-me.php">5. Employ Me</a></li>
                    <li><a href="support-me.php">6. Support Me</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-3">
                <h5>Gujarat Regional Links</h5>
                <ul class="footer-links">
                    <li><a href="https://ojas.gujarat.gov.in/" target="_blank">OJAS Gujarat Portal</a></li>
                    <li><a href="https://gujarat.gov.in/" target="_blank">Government of Gujarat Portal</a></li>
                    <li><a href="https://kaushalyaskilluniversity.ac.in/" target="_blank">Kaushalya The Skill University</a></li>
                    <li><a href="connect-me.php">GIDC Industrial Hub Jobs</a></li>
                    <li><a href="employ-me.php">Recruiter Registration</a></li>
                </ul>
            </div>

            <div class="col-lg-3">
                <h5>Youth Helpline &amp; Support</h5>
                <p class="small text-muted mb-2">Toll-Free Helpline for State Youth:</p>
                <h4 class="text-warning font-weight-bold mb-3"><i class="fa-solid fa-phone me-2"></i> 1800-233-5500</h4>
                <p class="small text-muted mb-1"><i class="fa-solid fa-envelope me-1"></i> support-gyrs@gujarat.gov.in</p>
                <p class="small text-muted"><i class="fa-solid fa-location-dot me-1"></i> Sector-10, Gandhinagar, Gujarat 382010</p>
            </div>
        </div>

        <hr class="border-secondary opacity-25">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small text-muted">
            <p class="mb-2 mb-md-0">
                &copy; <?php echo date('Y'); ?> <strong>Gujarat Yuva Rojgar System (GYRS)</strong>. Department of Labour, Skill Development &amp; Employment, Govt of Gujarat.
            </p>
            <div>
                <a href="#" class="text-muted text-decoration-none me-3">Privacy Policy</a>
                <a href="#" class="text-muted text-decoration-none me-3">Terms of Service</a>
                <a href="https://github.com/prakashzinzuvadiya14-sys/GYRS.git" target="_blank" class="text-warning text-decoration-none"><i class="fa-brands fa-github me-1"></i> GitHub Repository</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>

<!-- Main GYRS JavaScript Engine -->
<script src="assets/js/main.js"></script>

</body>
</html>
