<?php
// GYRS - Gujarat Yuva Rojgar System Configuration & Shared Data

define('SITE_NAME', 'GYRS - Gujarat Yuva Rojgar System');
define('GOVT_DEPT', 'Department of Labour, Skill Development & Employment, Government of Gujarat');
define('VERSION', '1.0.0');

// Gujarat Districts List
$gujarat_districts = [
    "Ahmedabad", "Amreli", "Anand", "Aravalli", "Banaskantha", "Bharuch", "Bhavnagar", 
    "Botad", "Chhota Udaipur", "Dahod", "Dang", "Devbhumi Dwarka", "Gandhinagar", 
    "Gir Somnath", "Jamnagar", "Junagadh", "Kheda", "Kutch", "Mahisagar", "Mehsana", 
    "Narmada", "Navsari", "Panchmahal", "Patan", "Porbandar", "Rajkot", "Sabarkantha", 
    "Surat", "Surendranagar", "Tapi", "Vadodara", "Valsad"
];

// Sample Job Openings in Gujarat
$sample_jobs = [
    [
        "id" => 1,
        "title" => "Junior Software Engineer (PHP/Laravel)",
        "company" => "GIDC Tech Park Hub",
        "district" => "Gandhinagar",
        "category" => "Information Technology",
        "experience" => "0-2 Years",
        "salary" => "₹25,000 - ₹35,000 / month",
        "skills" => ["PHP", "Laravel", "MySQL", "Bootstrap"],
        "ai_match" => "94%",
        "type" => "Full Time"
    ],
    [
        "id" => 2,
        "title" => "Robotics & Automation Apprentice",
        "company" => "Tata Motors Electric Vehicle Hub",
        "district" => "Sanand (Ahmedabad)",
        "category" => "Manufacturing & Automation",
        "experience" => "Fresher / ITI / Diploma",
        "salary" => "₹22,000 - ₹28,000 / month",
        "skills" => ["PLC Programming", "Mechanical Drafting", "Robotics"],
        "ai_match" => "88%",
        "type" => "Apprenticeship"
    ],
    [
        "id" => 3,
        "title" => "Solar Energy Systems Technician",
        "company" => "Gujarat Green Energy Parks",
        "district" => "Kutch / Charanka",
        "category" => "Renewable Energy",
        "experience" => "ITI Electrical / Diploma",
        "salary" => "₹20,000 - ₹26,000 / month",
        "skills" => ["Solar PV Setup", "Grid Inspection", "Electrical Safety"],
        "ai_match" => "91%",
        "type" => "Full Time"
    ],
    [
        "id" => 4,
        "title" => "Quality Control Officer (Pharma)",
        "company" => "Cadila Healthcare Ltd",
        "district" => "Vadodara",
        "category" => "Pharmaceuticals",
        "experience" => "B.Pharm / B.Sc",
        "salary" => "₹24,000 - ₹32,000 / month",
        "skills" => ["HPLC", "GMP Documentation", "Lab Analysis"],
        "ai_match" => "85%",
        "type" => "Full Time"
    ],
    [
        "id" => 5,
        "title" => "Textile Supply Chain Assistant",
        "company" => "Arvind Mills Industrial Estate",
        "district" => "Surat",
        "category" => "Textile & Apparel",
        "experience" => "Graduate / Diploma",
        "salary" => "₹18,000 - ₹24,000 / month",
        "skills" => ["Inventory Management", "Logistics", "Excel"],
        "ai_match" => "82%",
        "type" => "Full Time"
    ],
    [
        "id" => 6,
        "title" => "Digital Marketing & Local E-Commerce Executive",
        "company" => "Rajkot Industrial Promotion Council",
        "district" => "Rajkot",
        "category" => "Digital Services",
        "experience" => "0-1 Year",
        "salary" => "₹20,000 - ₹28,000 / month",
        "skills" => ["SEO", "Social Media", "Content Creation"],
        "ai_match" => "89%",
        "type" => "Full Time"
    ]
];

// Helper to format currency or badge
function getMatchBadgeClass($match) {
    $val = intval($match);
    if ($val >= 90) return 'bg-success';
    if ($val >= 80) return 'bg-primary';
    return 'bg-warning text-dark';
}
?>
