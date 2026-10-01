// GYRS - Gujarat Yuva Rojgar System Main JavaScript Engine

document.addEventListener('DOMContentLoaded', function() {
    console.log("GYRS Platform Initialized successfully.");
    initOtpTimer();
});

// Mobile + WhatsApp OTP Simulation Engine
let otpCountdownTimer = null;

function sendWhatsAppOtp() {
    const mobileInput = document.getElementById('mobileNumberInput');
    const mobileError = document.getElementById('mobileError');
    const otpStep1 = document.getElementById('otpStep1');
    const otpStep2 = document.getElementById('otpStep2');
    const displayPhone = document.getElementById('displayRegisteredPhone');
    
    if (!mobileInput || !mobileInput.value || mobileInput.value.length < 10) {
        if (mobileError) {
            mobileError.textContent = "Please enter a valid 10-digit mobile number registered in Gujarat.";
            mobileError.classList.remove('d-none');
        }
        return;
    }
    
    if (mobileError) mobileError.classList.add('d-none');
    
    // Show Loading state
    const sendBtn = document.getElementById('sendOtpBtn');
    const originalBtnText = sendBtn.innerHTML;
    sendBtn.disabled = true;
    sendBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Dispatching WhatsApp OTP...';
    
    setTimeout(() => {
        sendBtn.disabled = false;
        sendBtn.innerHTML = originalBtnText;
        
        // Hide Step 1, Show Step 2
        otpStep1.classList.add('d-none');
        otpStep2.classList.remove('d-none');
        if (displayPhone) displayPhone.textContent = "+91 " + mobileInput.value;
        
        // Auto-fill demo OTP code for instant testing
        document.getElementById('otpCodeInput').value = "584920";
        
        // Show Toast Notification
        showNotificationToast("WhatsApp OTP Dispatched!", "A 6-digit verification code was sent to your registered WhatsApp number.");
        
        startOtpCountdown(45);
    }, 1200);
}

function startOtpCountdown(seconds) {
    let timeLeft = seconds;
    const timerElem = document.getElementById('otpTimerCount');
    const resendBtn = document.getElementById('resendOtpBtn');
    
    if (resendBtn) resendBtn.disabled = true;
    
    if (otpCountdownTimer) clearInterval(otpCountdownTimer);
    
    otpCountdownTimer = setInterval(() => {
        timeLeft--;
        if (timerElem) timerElem.textContent = timeLeft + "s";
        
        if (timeLeft <= 0) {
            clearInterval(otpCountdownTimer);
            if (resendBtn) resendBtn.disabled = false;
            if (timerElem) timerElem.textContent = "Expired";
        }
    }, 1000);
}

function verifyWhatsAppOtp() {
    const otpInput = document.getElementById('otpCodeInput');
    const otpError = document.getElementById('otpError');
    const verifyBtn = document.getElementById('verifyOtpBtn');
    
    if (!otpInput || otpInput.value.length !== 6) {
        if (otpError) {
            otpError.textContent = "Please enter the 6-digit OTP code received on WhatsApp.";
            otpError.classList.remove('d-none');
        }
        return;
    }
    
    if (otpError) otpError.classList.add('d-none');
    
    verifyBtn.disabled = true;
    verifyBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Verifying Auth Token...';
    
    setTimeout(() => {
        showNotificationToast("Authentication Successful!", "Welcome to GYRS Gujarat Yuva Rojgar Portal.");
        
        // Redirect to Know Me profile stage or reload
        window.location.href = "profile-know-me.php?verified=1";
    }, 1000);
}

function resetOtpModal() {
    const otpStep1 = document.getElementById('otpStep1');
    const otpStep2 = document.getElementById('otpStep2');
    if (otpStep1) otpStep1.classList.remove('d-none');
    if (otpStep2) otpStep2.classList.add('d-none');
}

// AI Chatbot Simulator for "Support Me" and "Guide Me"
function sendChatMessage() {
    const chatInput = document.getElementById('chatUserPrompt');
    const chatBox = document.getElementById('chatBoxMessages');
    
    if (!chatInput || !chatInput.value.trim()) return;
    
    const userMsg = chatInput.value.trim();
    chatInput.value = '';
    
    // Append User Message
    const userBubble = document.createElement('div');
    userBubble.className = 'chat-bubble user';
    userBubble.textContent = userMsg;
    chatBox.appendChild(userBubble);
    chatBox.scrollTop = chatBox.scrollHeight;
    
    // Generate AI Bot Response
    setTimeout(() => {
        const botBubble = document.createElement('div');
        botBubble.className = 'chat-bubble bot';
        
        let reply = getAIResponse(userMsg);
        botBubble.innerHTML = reply;
        chatBox.appendChild(botBubble);
        chatBox.scrollTop = chatBox.scrollHeight;
    }, 800);
}

function getAIResponse(prompt) {
    const lower = prompt.toLowerCase();
    
    if (lower.includes('gujarat') || lower.includes('job') || lower.includes('vacancy')) {
        return "<strong>GYRS AI Assistant:</strong> Currently, there are 1,420+ active job openings across GIDC IT Hub Gandhinagar, Sanand Auto Hub, and Surat Textile Cluster. Have you completed Stage 1 (Know Me) profile?";
    } else if (lower.includes('course') || lower.includes('skill') || lower.includes('learn')) {
        return "<strong>GYRS AI Assistant:</strong> Based on market demands in Gujarat, I recommend upskilling in <em>Python/Laravel</em>, <em>Solar System Maintenance</em>, or <em>PLC Industrial Automation</em> via Kaushalya The Skill University.";
    } else if (lower.includes('help') || lower.includes('support') || lower.includes('stuck')) {
        return "<strong>GYRS Support AI:</strong> I am available 24/7. If you require human mentor intervention, I can connect you with a District Employment Officer in your area.";
    } else {
        return "<strong>GYRS AI Assistant:</strong> Thank you for your question! I am analyzing your profile data against Gujarat's skill requirements to give you the most accurate roadmap.";
    }
}

// Quick Notification Toast
function showNotificationToast(title, body) {
    let toastContainer = document.getElementById('gyrsToastContainer');
    if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.id = 'gyrsToastContainer';
        toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
        toastContainer.style.zIndex = '9999';
        document.body.appendChild(toastContainer);
    }
    
    const toastId = 'toast_' + Date.now();
    const toastHtml = `
        <div id="${toastId}" class="toast bg-white border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-primary text-white">
                <i class="fa-brands fa-whatsapp me-2 fs-6"></i>
                <strong class="me-auto">${title}</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-dark font-size-sm">
                ${body}
            </div>
        </div>
    `;
    toastContainer.insertAdjacentHTML('beforeend', toastHtml);
    
    const toastElem = document.getElementById(toastId);
    const bsToast = new bootstrap.Toast(toastElem, { delay: 4000 });
    bsToast.show();
}

function initOtpTimer() {}
