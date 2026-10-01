<?php
if (!defined('SITE_NAME')) {
    include_once __DIR__ . '/config.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Government of Gujarat Youth Portal</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Custom GYRS Portal CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Government Utility Top Bar -->
<div class="govt-top-bar">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">
            <span><i class="fa-solid fa-flag me-1 text-warning"></i> Government of Gujarat Initiative</span>
            <span class="d-none d-md-inline">|</span>
            <span class="d-none d-md-inline"><i class="fa-solid fa-building-columns me-1"></i> Labour, Skill Development & Employment Department</span>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="badge bg-secondary me-2">Language: English / ગુજરાતી</span>
            <a href="https://ojas.gujarat.gov.in/" target="_blank" title="Official OJAS Gujarat Portal"><i class="fa-solid fa-link me-1"></i> OJAS Gujarat</a>
        </div>
    </div>
</div>

<!-- OJAS Style Notice Ticker Bar -->
<div class="notice-ticker-container">
    <div class="container d-flex align-items-center">
        <span class="ticker-badge"><i class="fa-solid fa-bell me-1"></i> LATEST NOTICES</span>
        <div class="overflow-hidden flex-grow-1">
            <span class="ticker-text">
                🚀 GYRS Rozgar Mela 2026 Registration Open for All Districts in Gujarat | 📱 Mandatory WhatsApp OTP Verification Enabled for Candidate Profiles | 🤖 AI Skill Roadmap Engine Live for Engineering, ITI & Diploma Graduates | 💼 1,400+ GIDC & IT Hub Vacancies Active Today!
            </span>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg gyrs-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand navbar-brand-logo" href="index.php">
            <div class="emblem-icon">
                <i class="fa-solid fa-mountain-sun"></i>
            </div>
            <div>
                <h1 class="brand-text-title">GYRS <span>GUJARAT</span></h1>
                <p class="brand-text-subtitle">Gujarat Yuva Rojgar System | ગુજરાત યુવા રોજગાર સિસ્ટમ</p>
            </div>
        </a>

        <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#gyrsNav" aria-controls="gyrsNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars fs-3"></i>
        </button>

        <div class="collapse navbar-collapse" id="gyrsNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa-solid fa-house me-1"></i> Home</a>
                </li>
                
                <!-- 6 Stages Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-layer-group me-1"></i> 6 AI Stages
                    </a>
                    <ul class="dropdown-menu border-0 shadow-lg p-2">
                        <li><a class="dropdown-menu-item text-decoration-none d-block p-2 rounded hover-bg" href="profile-know-me.php"><strong class="text-primary">1. Know Me</strong> <small class="d-block text-muted">Profile & Entry Verification</small></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-menu-item text-decoration-none d-block p-2 rounded hover-bg" href="guide-me.php"><strong class="text-info">2. Guide Me</strong> <small class="d-block text-muted">AI Solution & Skill Roadmap</small></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-menu-item text-decoration-none d-block p-2 rounded hover-bg" href="prepare-me.php"><strong class="text-warning">3. Prepare Me</strong> <small class="d-block text-muted">Upskilling & Mock Tests</small></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-menu-item text-decoration-none d-block p-2 rounded hover-bg" href="connect-me.php"><strong class="text-success">4. Connect Me</strong> <small class="d-block text-muted">Vector Job & Role Match</small></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-menu-item text-decoration-none d-block p-2 rounded hover-bg" href="employ-me.php"><strong class="text-purple" style="color: #7C3AED;">5. Employ Me</strong> <small class="d-block text-muted">Recruiter Prep & Interview</small></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-menu-item text-decoration-none d-block p-2 rounded hover-bg" href="support-me.php"><strong class="text-danger">6. Support Me</strong> <small class="d-block text-muted">24/7 AI Assistance & Help</small></a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="connect-me.php"><i class="fa-solid fa-briefcase me-1"></i> Job Vacancies</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="employ-me.php"><i class="fa-solid fa-building me-1"></i> Recruiter Portal</a>
                </li>

                <li class="nav-item ms-lg-2">
                    <button class="btn btn-warning text-dark fw-bold rounded-pill px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#otpAuthModal">
                        <i class="fa-brands fa-whatsapp me-1 text-success fs-6"></i> Mobile OTP Login
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Shared WhatsApp & Mobile OTP Auth Modal -->
<div class="modal fade" id="otpAuthModal" tabindex="-1" aria-labelledby="otpAuthModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px;">
            <div class="modal-header bg-navy text-white" style="background-color: #0F2537; border-top-left-radius: 16px; border-top-right-radius: 16px;">
                <h5 class="modal-title text-white" id="otpAuthModalLabel">
                    <i class="fa-brands fa-whatsapp text-success me-2 fs-5"></i> GYRS Candidate Verification
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body p-4">
                <!-- STEP 1: Enter Mobile Number -->
                <div id="otpStep1">
                    <p class="text-muted fs-6 mb-3">
                        Enter your 10-digit Mobile Number. A mandatory verification OTP will be sent directly to your registered <strong>WhatsApp Number</strong>.
                    </p>
                    
                    <div class="alert alert-danger d-none" id="mobileError"></div>
                    
                    <div class="mb-3">
                        <label for="mobileNumberInput" class="form-label fw-bold text-dark">Mobile Number (WhatsApp Enabled)</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-light text-muted fw-bold">+91</span>
                            <input type="tel" class="form-control" id="mobileNumberInput" placeholder="Enter 10 digit number" maxlength="10" value="9876543210">
                        </div>
                        <small class="text-muted mt-1 d-block"><i class="fa-solid fa-lock me-1"></i> Secured via Meta WhatsApp Cloud Gateway API</small>
                    </div>

                    <button type="button" class="btn btn-success btn-lg w-100 fw-bold shadow-sm" id="sendOtpBtn" onclick="sendWhatsAppOtp()">
                        <i class="fa-brands fa-whatsapp me-2 fs-5"></i> Send WhatsApp OTP Code
                    </button>
                </div>

                <!-- STEP 2: Enter 6-digit OTP -->
                <div id="otpStep2" class="d-none">
                    <div class="alert alert-success text-center">
                        <i class="fa-solid fa-circle-check me-1 fs-5"></i> OTP dispatched to <strong id="displayRegisteredPhone">+91 9876543210</strong> on WhatsApp!
                    </div>
                    
                    <div class="alert alert-danger d-none" id="otpError"></div>
                    
                    <div class="mb-3 text-center">
                        <label for="otpCodeInput" class="form-label fw-bold">Enter 6-Digit WhatsApp OTP Code</label>
                        <input type="text" class="form-control form-control-lg text-center fw-bold letter-spacing-2" id="otpCodeInput" placeholder="• • • • • •" maxlength="6" style="font-size: 1.5rem; letter-spacing: 8px;">
                        <small class="text-muted mt-2 d-block">
                            Resend code in: <span id="otpTimerCount" class="fw-bold text-primary">45s</span>
                        </small>
                    </div>

                    <div class="d-flex gap-2 mb-3">
                        <button type="button" class="btn btn-outline-secondary w-50" id="resendOtpBtn" onclick="sendWhatsAppOtp()" disabled>Resend OTP</button>
                        <button type="button" class="btn btn-primary w-50 fw-bold" id="verifyOtpBtn" onclick="verifyWhatsAppOtp()">Verify &amp; Continue</button>
                    </div>

                    <button type="button" class="btn btn-link btn-sm w-100 text-decoration-none text-muted" onclick="resetOtpModal()">
                        <i class="fa-solid fa-arrow-left me-1"></i> Change Mobile Number
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
