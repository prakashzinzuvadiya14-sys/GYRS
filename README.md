# Gujarat Yuva Rojgar System (GYRS)

**Government of Gujarat Initiative — Department of Labour, Skill Development & Employment**  
**Repository URL:** [https://github.com/prakashzinzuvadiya14-sys/GYRS.git](https://github.com/prakashzinzuvadiya14-sys/GYRS.git)

---

## 🌟 About GYRS (Gujarat Yuva Rojgar System)
GYRS is an AI-driven youth empowerment and employment web platform designed to systematically guide candidates through 6 structured phases from mobile authentication to long-term career support.

Inspired by government portals such as **OJAS Gujarat** (`https://ojas.gujarat.gov.in/`), GYRS provides a modern, responsive, high-throughput user experience built with **PHP, HTML5, CSS3, Bootstrap 5**, and interactive JavaScript engines.

---

## 🚀 The 6 AI-Driven Stages

1. **Know Me (Profile Builder & Verification)**: Mobile + WhatsApp OTP verification engine, detailed educational and regional entry form for Gujarat districts.
2. **Guide Me (AI Solution & Skill Roadmap)**: AI-driven skill gap analyzer and interactive 4-step career roadmap visualizer.
3. **Prepare Me (Upskilling & Mock Assessments)**: Course catalog from Kaushalya Skill University, Swayam/NPTEL, AI resume scorer, and live mock tests.
4. **Connect Me (Vector Job Matching)**: Vector similarity job matching engine connecting completed roadmaps with active job listings in Gujarat, triggering instant WhatsApp notifications for >80% matches.
5. **Employ Me (Recruiter Pipeline & Interview Prep)**: AI mock interview simulator, candidate shortlist pipeline, and employer registration.
6. **Support Me (24/7 AI Multilingual Helpdesk)**: Trilingual (Gujarati, English, Hindi) AI career mentor and human escalation ticket matrix to District Employment Officers.

---

## 📁 Project Directory Structure

```
GYRS/
├── index.php                     # Main Portal Landing Page (OJAS-inspired UI & 6 Stages Gateway)
├── profile-know-me.php           # Stage 1: Profile & Mobile WhatsApp Verification
├── guide-me.php                  # Stage 2: AI Solution & Skill Roadmap Engine
├── prepare-me.php                # Stage 3: Upskilling Courses & AI Mock Test
├── connect-me.php                # Stage 4: Vector Job Portal & Matcher
├── employ-me.php                 # Stage 5: Recruiter Pipeline & AI Interview Prep
├── support-me.php                # Stage 6: 24/7 AI Helpdesk & District Escalation
├── includes/
│   ├── header.php                # Government Utility Bar, OJAS Notice Ticker & WhatsApp OTP Modal
│   ├── footer.php                # State Footer & Floating AI Multilingual Chatbot Modal
│   └── config.php                # Site Configuration & Gujarat District Data
├── assets/
│   ├── css/
│   │   └── style.css             # Custom Government Theme CSS (Bootstrap 5 extension)
│   └── js/
│       └── main.js               # Interactive OTP Simulator & AI Chatbot Engine
├── GYRS_Project_Structure_and_Architecture.pdf # Compiled Technical Specification PDF
├── README.md                     # Documentation
└── .gitignore
```

---

## 💻 Tech Stack Used
* **Frontend**: HTML5, CSS3, Bootstrap 5.3, FontAwesome 6.5, Google Fonts (Outfit, Inter, Noto Sans Gujarati)
* **Backend Core**: PHP 8.3 / Laravel 11 Architecture Ready
* **Authentication**: Mobile Number + Meta WhatsApp Cloud API OTP Verification Simulation
* **AI Subsystem**: OpenAI GPT-4o RAG & Vector Matching Architecture

---

## 🛠️ How to Run Locally
1. Clone the repository:
   ```bash
   git clone https://github.com/prakashzinzuvadiya14-sys/GYRS.git
   ```
2. Move into the directory:
   ```bash
   cd GYRS
   ```
3. Start local PHP development server:
   ```bash
   php -S localhost:8000
   ```
4. Open your browser and navigate to `http://localhost:8000`

---

## 📄 Documentation & PDF Report
For the complete technical architecture, hosting/domain cost estimation, Gantt timeline, and Laravel 11 code directory specifications, refer to [GYRS_Project_Structure_and_Architecture.pdf](GYRS_Project_Structure_and_Architecture.pdf).
