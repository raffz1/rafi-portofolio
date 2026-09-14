<?php
/**
 * RAFFZ Portfolio - Certificates Page
 * Clean Dark Aesthetic Stack (PHP & Tailwind CSS)
 */

// Certificates Data
$certificates = [
    // --- KEAHLIAN ---
    [
        'id' => 'ds-series-19',
        'title' => 'Data Science Series 19.0',
        'issuer' => 'dibimbing.id',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/dibimbing data series 19.0.png',
        'desc' => 'Pelatihan intensif pengolahan data, analisis data fundamental, dan visualisasi wawasan bisnis.'
    ],
    [
        'id' => 'finance-risk-management',
        'title' => 'Finance Series: Risk Management',
        'issuer' => 'dibimbing.id',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/dibimbing finance series risk management.png',
        'desc' => 'Pemahaman dasar mitigasi risiko finansial, evaluasi kelayakan bisnis, dan kepatuhan instrumen keuangan.'
    ],
    [
        'id' => 'finance-internal-audit',
        'title' => 'Finance Series: Internal Audit',
        'issuer' => 'dibimbing.id',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/dibimbing finance series internal audit.png',
        'desc' => 'Penguasaan prinsip internal audit, kontrol keuangan organisasi, dan standarisasi tata kelola.'
    ],
    [
        'id' => 'komdigi-data-science',
        'title' => 'Pengenalan Data Science',
        'issuer' => 'Kementerian Komunikasi dan Digital',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/komdigi pengenalan data science.png',
        'desc' => 'Sertifikasi penguasaan konsep machine learning dasar, pemodelan data, dan ekosistem data digital.'
    ],
    [
        'id' => 'ibm-ai-agent',
        'title' => 'Build an AI Agent',
        'issuer' => 'IBM SkillsBuild',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/Completion Certificate Build an AI Agent-1.png',
        'desc' => 'Pelatihan perancangan AI Agent terotomasi berbasis kecerdasan buatan dan alur logika terstruktur.'
    ],
    [
        'id' => 'ibm-granite-models',
        'title' => 'IBM Granite Models Foundation',
        'issuer' => 'IBM SkillsBuild',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/Completion Certificate IBM Granite Models_SkillsBuild-1.png',
        'desc' => 'Penguasaan arsitektur dasar model fondasi IBM Granite untuk implementasi solusi generatif AI enterprise.'
    ],
    [
        'id' => 'ibm-intro-llm',
        'title' => 'Introduction to Large Language Models (LLM)',
        'issuer' => 'IBM SkillsBuild',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/Completion Certificate Introduction LLM_SkillsBuild-1.png',
        'desc' => 'Fondasi teoretis Large Language Models, mekanisme prompt engineering, dan pemanfaatan arsitektur transformer.'
    ],
    [
        'id' => 'ibm-troubleshooting',
        'title' => 'Troubleshooting with IBM Tools',
        'issuer' => 'IBM SkillsBuild',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/Completion Certificate Troubleshoot Using IBM Bob_SkillsBuild-1.png',
        'desc' => 'Keterampilan identifikasi dan analisis troubleshooting sistem komputasi menggunakan platform IBM.'
    ],
    [
        'id' => 'id-networkers-jaringan',
        'title' => 'Computer Network Fundamentals',
        'issuer' => 'ID-Networkers',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/id networkers jaringan.png',
        'desc' => 'Pemahaman konfigurasi routing, switching, protokol TCP/IP, dan arsitektur infrastruktur jaringan dasar.'
    ],
    [
        'id' => 'skillpedia-copywriting',
        'title' => 'Fundamental Copywriting Mastery',
        'issuer' => 'Skillpedia',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/sertifikat-copywriting.png',
        'desc' => 'Keterampilan penyusunan formula tulisan persuasif untuk konversi audiens dan strategi konten digital.'
    ],
    [
        'id' => 'skillpedia-canva',
        'title' => 'Visual Content Creation via Canva Desktop',
        'issuer' => 'Skillpedia',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/sertifikat-desain-canva-desktop-skillpedia.png',
        'desc' => 'Pembuatan aset visual interaktif, konsistensi warna, dan komposisi hierarki desain digital di Canva.'
    ],
    [
        'id' => 'skillpedia-seo',
        'title' => 'Search Engine Optimization (SEO) Website',
        'issuer' => 'Skillpedia',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/sertifikat-seo-website.png',
        'desc' => 'Optimasi struktur website on-page dan keyword research untuk menaikkan visibilitas mesin pencari.'
    ],
    [
        'id' => 'skillpedia-wordpress',
        'title' => 'Web Development with WordPress',
        'issuer' => 'Skillpedia',
        'date' => '2026',
        'category' => 'Keahlian',
        'filter' => 'keahlian',
        'img' => 'img/sertifikat-website-wordpress.png',
        'desc' => 'Pembangunan platform website fungsional berbasis CMS WordPress dengan pengaturan responsif.'
    ],
    // IBM SkillsBuild Series
    [
        'id' => 'ibm-unleashing-ai-agents',
        'title' => 'Unleashing the Power of AI Agents',
        'organizer' => 'IBM SkillsBuild',
        'issuer' => 'IBM SkillsBuild',
        'category' => 'keahlian',
        'category_label' => 'Keahlian',
        'filter' => 'keahlian',
        'year' => '2026',
        'date' => '2026',
        'desc' => 'Eksplorasi perancangan AI Agent otonom untuk otomatisasi alur kerja dan pengambilan keputusan adaptif.',
        'image' => 'Completion Certificate _ SkillsBuild - Unleashing the Power of AI Agents-1.png',
        'img' => 'img/Completion Certificate _ SkillsBuild - Unleashing the Power of AI Agents-1.png'
    ],
    [
        'id' => 'ibm-data-science-landscape',
        'title' => 'Data Science Landscape',
        'organizer' => 'IBM SkillsBuild',
        'issuer' => 'IBM SkillsBuild',
        'category' => 'keahlian',
        'category_label' => 'Keahlian',
        'filter' => 'keahlian',
        'year' => '2026',
        'date' => '2026',
        'desc' => 'Pemahaman mengenai ekosistem sains data, siklus analisis data modern, dan domain penerapannya.',
        'image' => 'Completion Certificate _ SkillsBuild - Data Science Landscape-1.png',
        'img' => 'img/Completion Certificate _ SkillsBuild - Data Science Landscape-1.png'
    ],
    [
        'id' => 'ibm-classifying-data-granite',
        'title' => 'Classifying Data Using IBM Granite',
        'organizer' => 'IBM SkillsBuild',
        'issuer' => 'IBM SkillsBuild',
        'category' => 'keahlian',
        'category_label' => 'Keahlian',
        'filter' => 'keahlian',
        'year' => '2026',
        'date' => '2026',
        'desc' => 'Penerapan model fondasi IBM Granite dalam melakukan klasifikasi dan pengorganisasian korpus data skala besar.',
        'image' => 'Completion Certificate _ SkillsBuild - Classifying Data Using IBM-1.png',
        'img' => 'img/Completion Certificate _ SkillsBuild - Classifying Data Using IBM-1.png'
    ],
    [
        'id' => 'ibm-getting-started-data',
        'title' => 'Getting Started with Data',
        'organizer' => 'IBM SkillsBuild',
        'issuer' => 'IBM SkillsBuild',
        'category' => 'keahlian',
        'category_label' => 'Keahlian',
        'filter' => 'keahlian',
        'year' => '2026',
        'date' => '2026',
        'desc' => 'Fondasi literasi data terstruktur, teknik kurasi informasi mentah, pemanfaatan data dalam analitik digital.',
        'image' => 'Completion Certificate _ SkillsBuild - Getting Started With Data-1.png',
        'img' => 'img/Completion Certificate _ SkillsBuild - Getting Started With Data-1.png'
    ],
    [
        'id' => 'dts-fundamental-web-dev',
        'title' => 'Fundamental of Assistant Web Developer - Nasional',
        'organizer' => 'Digital Talent Scholarship',
        'issuer' => 'Digital Talent Scholarship',
        'category' => 'keahlian',
        'category_label' => 'Keahlian',
        'filter' => 'keahlian',
        'year' => '2026',
        'date' => '2026',
        'desc' => 'Penguasaan fondasi perancangan web, struktur dokumen web, responsivitas antarmuka, dan dasar alur kerja web development.',
        'image' => 'Sertifikat_RAFI ZHEVIRGI ALWAFA_Fundamental of Assistant Web Developer - Nasional-1.png',
        'img' => 'img/Sertifikat_RAFI ZHEVIRGI ALWAFA_Fundamental of Assistant Web Developer - Nasional-1.png'
    ],
    [
        'id' => 'dts-intermediate-web-dev',
        'title' => 'Intermediate Assistant Web Developer - Nasional',
        'organizer' => 'Digital Talent Scholarship',
        'issuer' => 'Digital Talent Scholarship',
        'category' => 'keahlian',
        'category_label' => 'Keahlian',
        'filter' => 'keahlian',
        'year' => '2026',
        'date' => '2026',
        'desc' => 'Tingkat lanjutan pengembangan antarmuka web, perancangan modul interaktif, dan integrasi komponen front-end modern.',
        'image' => 'Sertifikat_RAFI ZHEVIRGI ALWAFA_Intermediate Assistant Web Developer - Nasional-1.png',
        'img' => 'img/Sertifikat_RAFI ZHEVIRGI ALWAFA_Intermediate Assistant Web Developer - Nasional-1.png'
    ],
    [
        'id' => 'dicoding-spec-driven-kiro',
        'title' => 'Spec-Driven Development dengan Kiro',
        'organizer' => 'Dicoding Indonesia',
        'issuer' => 'Dicoding Indonesia',
        'category' => 'keahlian',
        'category_label' => 'Keahlian',
        'filter' => 'keahlian',
        'year' => '2026',
        'date' => '2026',
        'desc' => 'Penerapan metodologi rekayasa berbasis spesifikasi perangkat lunak terstandarisasi dengan integrasi AI Kiro.',
        'image' => 'sertifikat_dicoding_spec-driven development with Kiro-1.jpg',
        'img' => 'img/sertifikat_dicoding_spec-driven development with Kiro-1.jpg'
    ],
    [
        'id' => 'dicoding-cloud-gen-ai-aws',
        'title' => 'Belajar Dasar Cloud dan Gen AI di AWS',
        'organizer' => 'Dicoding Indonesia',
        'issuer' => 'Dicoding Indonesia',
        'category' => 'keahlian',
        'category_label' => 'Keahlian',
        'filter' => 'keahlian',
        'year' => '2026',
        'date' => '2026',
        'desc' => 'Pengenalan Cloud Computing Amazon Web Services (AWS), konfigurasi infrastruktur cloud fundamental, dan model Generative AI.',
        'image' => 'sertifikat_dicoding_belajar cloud dan gen ai AWS-1.jpg',
        'img' => 'img/sertifikat_dicoding_belajar cloud dan gen ai AWS-1.jpg'
    ],

    // --- KOMPETISI ---
    [
        'id' => 'cnf-bp-jogja',
        'title' => 'CNF Business Plan Competition Jogja 2025',
        'issuer' => 'CNF Jogja',
        'date' => '2025',
        'category' => 'Kompetisi',
        'filter' => 'kompetisi',
        'img' => 'img/cnf bp jogja.png',
        'desc' => 'Raih Medali Perak pada kompetisi business plan nasional fokus inovasi teknologi dan transformasi digital.'
    ],
    [
        'id' => 'idf4-favorite-poster',
        'title' => 'IDEA Festival 4: Business Plan Competition (Favorite Poster)',
        'issuer' => 'IDEA Festival 4',
        'date' => '2025',
        'category' => 'Kompetisi',
        'filter' => 'kompetisi',
        'img' => 'img/IDF 4 BISNIS PLAN_FAVORITE POSTER.png',
        'desc' => 'Penghargaan Poster Favorit pada Business Plan Competition tingkat nasional dalam rangkaian acara IDEA Festival 4.'
    ],
    [
        'id' => 'idf4-silver-medal',
        'title' => 'IDEA Festival 4: Business Plan Competition (Silver Medal)',
        'issuer' => 'IDEA Festival 4',
        'date' => '2025',
        'category' => 'Kompetisi',
        'filter' => 'kompetisi',
        'img' => 'img/IDF 4 BISNIS PLAN_SILVER MEDAL.png',
        'desc' => 'Raihan Medali Perak pada Business Plan Competition tingkat nasional dalam rangkaian acara IDEA Festival 4.'
    ],
    [
        'id' => 'sec-2025',
        'title' => 'Soedirman Essay Competition 2025',
        'issuer' => 'Universitas Jenderal Soedirman',
        'date' => '2025',
        'category' => 'Kompetisi',
        'filter' => 'kompetisi',
        'img' => 'img/Sertifikat Peserta SEC_Rafi Zhevirgi Alwafa.png',
        'desc' => 'Sertifikat keikutsertaan sebagai peserta dalam ajang lomba menulis esai nasional Soedirman Essay Competition 2025.'
    ],

    // --- SEMINAR & WEBINAR ---
    [
        'id' => 'bakti-bca',
        'title' => 'Bakti BCA: Berbagi Ilmu',
        'issuer' => 'PT Bank Central Asia Tbk',
        'date' => '2024',
        'category' => 'Seminar & Webinar',
        'filter' => 'seminar',
        'img' => 'img/bakti bca.png',
        'desc' => 'Sertifikat kepesertaan dalam program Bakti BCA: Berbagi Ilmu untuk peningkatan wawasan dan pengembangan kompetensi.'
    ],
    [
        'id' => 'semnas-idf4-bali',
        'title' => 'Seminar Nasional IDEA Festival 4 - Bali',
        'issuer' => 'IDEA Festival 4',
        'date' => '2025',
        'category' => 'Seminar & Webinar',
        'filter' => 'seminar',
        'img' => 'img/Sertifikat Seminar Nasional IDF 4_Bali_Rafi Zhevirgi Alwafa.png',
        'desc' => 'Sertifikat partisipasi dalam Seminar Nasional IDEA Festival 4 yang diselenggarakan secara nasional di Bali.'
    ],
    [
        'id' => 'suarkan-asa-empower',
        'title' => 'Suarkan Asa "EMPOWER: Empowering Futures with KIP-K: Mentorship and Inspiration for Success"',
        'issuer' => 'Suarkan Asa',
        'date' => '2024',
        'category' => 'Seminar & Webinar',
        'filter' => 'seminar',
        'img' => 'img/Suarkan ASA.jpg',
        'desc' => 'Sertifikat kepesertaan dalam program mentorship dan inspirasi kepemimpinan untuk pemberdayaan mahasiswa penerima KIP-K.'
    ],
    [
        'id' => 'metc-training-microsoft-fabric',
        'title' => 'METC Training: Empowering AI Foundations with Microsoft Fabric',
        'organizer' => 'Dicoding Indonesia × Microsoft Elevate',
        'issuer' => 'Dicoding Indonesia × Microsoft Elevate',
        'category' => 'seminar',
        'category_label' => 'Seminar & Webinar',
        'filter' => 'seminar',
        'year' => '2026',
        'date' => '2026',
        'desc' => 'Pelatihan pemanfaatan arsitektur terintegrasi Microsoft Fabric sebagai landasan data analitik dan komputasi solusi AI.',
        'image' => 'metc-grand-campus-training-empowering-ai-foundations-with-microsoft-fabric-certificate-1.png',
        'img' => 'img/metc-grand-campus-training-empowering-ai-foundations-with-microsoft-fabric-certificate-1.png'
    ],

    // --- KEPANITIAAN ---
    [
        'id' => 'panitia-pkkmb-filkom',
        'title' => 'Panitia PKKMB Fakultas Ilmu Komputer',
        'issuer' => 'FILKOM Universitas Brawijaya',
        'date' => '2025',
        'category' => 'Kepanitiaan',
        'filter' => 'kepanitiaan',
        'img' => 'img/PANITIA_RAFI ZHEVIRGI ALWAFA_PKKMB-1.png',
        'desc' => 'Menjadi fasilitator mahasiswa baru Cluster 25 di lingkungan Fakultas Ilmu Komputer UB.'
    ],
    [
        'id' => 'panitia-raja-brawijaya',
        'title' => 'Panitia RAJA Brawijaya 2025',
        'issuer' => 'Universitas Brawijaya',
        'date' => '2025',
        'category' => 'Kepanitiaan',
        'filter' => 'kepanitiaan',
        'img' => 'img/RAJA BRAWIJAYA 2025_RAFI ZHEVIRGI ALWAFA - 245150600111031 - Panitia RAJA Brawijaya 2025-1.png',
        'desc' => 'Menjadi Supervisor pendamping mahasiswa baru Universitas Brawijaya pada rangkaian kegiatan RAJA Brawijaya 2025.'
    ],
    [
        'id' => 'panitia-startup-academy',
        'title' => 'Fasilitator Startup Academy FILKOM UB',
        'issuer' => 'Startup Academy FILKOM UB',
        'date' => '2025',
        'category' => 'Kepanitiaan',
        'filter' => 'kepanitiaan',
        'img' => 'img/PANITIA_RAFI ZHEVIRGI ALWAFA_STARTUP ACADEMY-1.png',
        'desc' => 'Menjadi Fasilitator mahasiswa baru Cluster 25 pada rangkaian kegiatan Startup Academy FILKOM UB.'
    ],

    // --- RELAWAN ---
    [
        'id' => 'volunteer-peduly-malang',
        'title' => 'Volunteer Peduly Malang',
        'issuer' => 'Peduly Malang',
        'date' => '2025',
        'category' => 'Relawan',
        'filter' => 'relawan',
        'img' => 'img/Volunteer Peduly_Raffi Zhevirgi.jpg',
        'desc' => 'Sertifikat pengabdian dan kontribusi aktif sebagai relawan sosial kemanusiaan dalam berbagai aksi masyarakat bersama Peduly Malang.'
    ],
    [
        'id' => 'volunteer-mahasiswa-mengajar',
        'title' => 'Volunteer Mahasiswa Mengajar',
        'issuer' => 'Mahasiswa Mengajar (WAJAR)',
        'date' => '2025',
        'category' => 'Relawan',
        'filter' => 'relawan',
        'img' => 'img/Volunteer WAJAR_Rafi Zhevirgi Alwafa.jpg',
        'desc' => 'Sertifikat pengabdian sebagai relawan pengajar dalam program Mahasiswa Mengajar (WAJAR) untuk penguatan pendidikan anak bangsa.'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAFFZ | Certificates & Accreditations</title>
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        crimson: '#dc2626',
                        void: '#070709',
                        surface: '#121218'
                    },
                    fontFamily: {
                        heading: ['Montserrat', 'sans-serif'],
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace']
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="style.css?v=13.0">
    <style>
        .cert-card.hidden {
            display: none !important;
        }
    </style>
</head>
<body class="dark-mode bg-[#070709] text-white">
    <!-- Ambient Background Texture & Glow -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1100px] h-[550px] bg-gradient-to-b from-red-600/15 via-red-950/8 to-transparent blur-[130px] rounded-full"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.08)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.08)_1px,transparent_1px)] bg-[size:3.5rem_3.5rem] [mask-image:radial-gradient(ellipse_75%_65%_at_50%_15%,#000_70%,transparent_100%)]"></div>
        <div class="absolute inset-0 opacity-[0.035] bg-[radial-gradient(#ffffff_1.2px,transparent_1.2px)] [background-size:20px_20px]"></div>
    </div>

    <!-- Dynamic Floating Capsule Navbar Dock -->
    <header class="capsule-header">
        <nav class="capsule-nav">
            <!-- Left: Logo Badge -->
            <a href="index.php" class="capsule-logo" aria-label="Home">RAFFZ</a>

            <!-- Center: Links Dock -->
            <div class="capsule-links" id="capsuleLinks">
                <div class="nav-indicator"></div>
                <a href="index.php" class="capsule-link"><i class="fa-solid fa-house"></i> Home</a>
                <a href="journey.php" class="capsule-link"><i class="fa-solid fa-route"></i> Journey</a>
                <a href="project.php" class="capsule-link"><i class="fa-solid fa-rocket"></i> Projects</a>
                <a href="certificate.php" class="capsule-link active"><i class="fa-solid fa-award"></i> Certificates</a>
                <a href="gallery.php" class="capsule-link"><i class="fa-solid fa-images"></i> Gallery</a>
                <a href="contact.php" class="capsule-link"><i class="fa-solid fa-envelope"></i> Contact</a>
            </div>

            <!-- Right: Actions & Mobile Hamburger -->
            <div class="capsule-actions">
                <button class="mobile-menu-toggle" id="mobileMenuBtn" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </header>

    <main class="certificates-page max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 relative z-10">
        <header class="text-center mb-12 scroll-reveal">
            <span class="hero-greeting font-mono text-xs mb-2">
                [ CERTIFICATION & AWARDS ]
            </span>
            <h1 class="text-3xl md:text-5xl font-black mb-4 font-heading text-white">
                Certificates & Awards
            </h1>
            <p class="text-zinc-400 max-w-xl mx-auto text-sm md:text-base">
                Dokumentasi sertifikasi keahlian, keikutsertaan kompetisi nasional, seminar, kepanitiaan, serta aksi relawan sosial kemanusiaan.
            </p>
        </header>

        <!-- Category Filters & Sorting Controls Bar -->
        <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-4 mb-8 scroll-reveal">
            <div class="cert-filter-container flex-wrap m-0">
                <button class="cert-filter-btn active" data-filter="all">
                    <i class="fa-solid fa-border-all"></i> Semua (<?php echo count($certificates); ?>)
                </button>
                <button class="cert-filter-btn" data-filter="keahlian">
                    <i class="fa-solid fa-laptop-code"></i> Keahlian
                </button>
                <button class="cert-filter-btn" data-filter="kompetisi">
                    <i class="fa-solid fa-trophy"></i> Kompetisi
                </button>
                <button class="cert-filter-btn" data-filter="seminar">
                    <i class="fa-solid fa-chalkboard-user"></i> Seminar & Webinar
                </button>
                <button class="cert-filter-btn" data-filter="kepanitiaan">
                    <i class="fa-solid fa-users-gear"></i> Kepanitiaan
                </button>
                <button class="cert-filter-btn" data-filter="relawan">
                    <i class="fa-solid fa-hand-holding-heart"></i> Relawan
                </button>
            </div>

            <div class="flex items-center gap-2 self-end lg:self-auto flex-shrink-0">
                <label for="sortSelect" class="text-xs text-zinc-400 font-medium">Urutkan:</label>
                <select id="sortSelect" data-target="#certificatesContainer" class="bg-zinc-900 border border-zinc-800 text-zinc-300 text-xs rounded-xl px-3 py-2 focus:outline-none focus:border-red-600 cursor-pointer transition">
                    <option value="default">Default (Terbaru)</option>
                    <option value="latest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="az">Abjad (A-Z)</option>
                    <option value="za">Abjad (Z-A)</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full" id="certificatesContainer">
            <?php foreach($certificates as $index => $cert): 
                $certFilter = $cert['filter'] ?? $cert['category'] ?? 'all';
                $certCategory = $cert['category_label'] ?? (in_array(strtolower($cert['category'] ?? ''), ['keahlian', 'kompetisi', 'seminar', 'kepanitiaan', 'relawan']) ? ($cert['category_label'] ?? ucfirst($cert['category'])) : ($cert['category'] ?? 'Sertifikat'));
                $certIssuer = $cert['issuer'] ?? $cert['organizer'] ?? '';
                $certDate = $cert['date'] ?? $cert['year'] ?? '';
                $certImg = $cert['img'] ?? (!empty($cert['image']) ? (str_starts_with($cert['image'], 'img/') ? $cert['image'] : 'img/' . $cert['image']) : '');
                $certYear = $cert['year'] ?? $cert['date'] ?? '2025';
                if (preg_match('/\b(20\d{2})\b/', (string)$certDate, $matches)) {
                    $certYear = $matches[1];
                }
            ?>
            <div class="cert-card scroll-reveal w-full h-full flex flex-col justify-between" 
                 data-category="<?php echo htmlspecialchars($certFilter); ?>"
                 data-year="<?php echo htmlspecialchars($certYear); ?>"
                 data-title="<?php echo htmlspecialchars($cert['title']); ?>"
                 data-default-index="<?php echo $index; ?>">
                <div>
                    <div class="project-img-wrapper cert-view-trigger cursor-pointer" 
                         data-img="<?php echo htmlspecialchars($certImg); ?>"
                         data-title="<?php echo htmlspecialchars($cert['title']); ?>"
                         data-issuer="<?php echo htmlspecialchars($certIssuer); ?>">
                        <img src="<?php echo htmlspecialchars($certImg); ?>" alt="<?php echo htmlspecialchars($cert['title']); ?>" class="project-img">
                    </div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="cert-badge">
                            <i class="fa-solid fa-ribbon"></i> <?php echo htmlspecialchars($certCategory); ?>
                        </span>
                        <span class="text-xs font-mono text-zinc-400 font-semibold">
                            <?php echo htmlspecialchars($certDate); ?>
                        </span>
                    </div>
                    <h3 class="project-title text-lg mb-2"><?php echo htmlspecialchars($cert['title']); ?></h3>
                    <div class="cert-issuer">
                        <i class="fa-solid fa-building-columns text-red-500"></i> 
                        <?php echo htmlspecialchars($certIssuer); ?>
                    </div>
                    <p class="project-desc mb-4"><?php echo htmlspecialchars($cert['desc']); ?></p>
                </div>
                <div class="pt-3 border-t border-white/5">
                    <button class="btn-primary w-full cert-view-trigger text-sm py-2.5" 
                            data-img="<?php echo htmlspecialchars($certImg); ?>"
                            data-title="<?php echo htmlspecialchars($cert['title']); ?>"
                            data-issuer="<?php echo htmlspecialchars($certIssuer); ?>">
                        <span>Lihat Sertifikat</span>
                        <i class="fa-solid fa-expand ml-1"></i>
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Certificate Modal Lightbox -->
    <div id="certModal" class="cert-modal" onclick="closeModal(event)">
        <div class="cert-modal-content" onclick="event.stopPropagation()">
            <button class="cert-modal-close" onclick="closeModal()" aria-label="Tutup"><i class="fa-solid fa-xmark"></i></button>
            <div class="p-6 md:p-8 text-center">
                <img id="modalImg" src="" alt="Certificate Preview" class="w-full max-h-[70vh] object-contain rounded-xl mb-5 border border-white/10 bg-black/60 shadow-2xl">
                <h3 id="modalTitle" class="text-xl md:text-2xl font-bold text-white mb-2 font-heading"></h3>
                <p id="modalIssuer" class="text-zinc-400 text-sm md:text-base font-sans"></p>
            </div>
        </div>
    </div>

    <!-- Modern Asymmetric Developer Footer -->
    <footer class="modern-footer">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 pb-10">
                
                <!-- Column 1: Brand & Status -->
                <div class="md:col-span-5 space-y-4">
                    <div class="flex items-center gap-3">
                        <a href="index.php" class="inline-flex items-center justify-center px-4 py-1.5 rounded-full bg-red-600 text-white font-black text-sm tracking-wider shadow-lg shadow-red-950/40 hover:bg-red-500 transition">
                            RAFFZ
                        </a>
                    </div>
                    <p class="text-zinc-400 text-sm max-w-sm leading-relaxed">
                        Software engineer & digital artisan focusing on frontend architecture, user experience design, and interactive interfaces.
                    </p>
                </div>

                <!-- Column 2: Quick Navigation -->
                <div class="md:col-span-3 space-y-3">
                    <span class="text-xs font-mono uppercase tracking-wider text-zinc-500 block">Navigation</span>
                    <ul class="space-y-2 text-sm">
                        <li><a href="index.php" class="text-zinc-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="journey.php" class="text-zinc-400 hover:text-white transition-colors">Journey</a></li>
                        <li><a href="project.php" class="text-zinc-400 hover:text-white transition-colors">Projects</a></li>
                        <li><a href="certificate.php" class="text-zinc-400 hover:text-white transition-colors">Certificates</a></li>
                        <li><a href="gallery.php" class="text-zinc-400 hover:text-white transition-colors">Gallery</a></li>
                        <li><a href="contact.php" class="text-zinc-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3: Connect & Social -->
                <div class="md:col-span-4 space-y-3">
                    <span class="text-xs font-mono uppercase tracking-wider text-zinc-500 block">Connect</span>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="mailto:rafizhevirgialwafa@gmail.com" class="text-zinc-400 hover:text-white transition-colors inline-flex items-center gap-2">
                                <i class="fa-solid fa-envelope text-zinc-500"></i> rafizhevirgialwafa@gmail.com
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/rafi-zhevirgi" target="_blank" class="text-zinc-400 hover:text-white transition-colors inline-flex items-center gap-2">
                                <i class="fa-brands fa-linkedin text-zinc-500"></i> linkedin.com/in/rafi-zhevirgi
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/raffz1" target="_blank" class="text-zinc-400 hover:text-white transition-colors inline-flex items-center gap-2">
                                <i class="fa-brands fa-github text-zinc-500"></i> github.com/raffz1
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/raffz.zhevv" target="_blank" class="text-zinc-400 hover:text-white transition-colors inline-flex items-center gap-2">
                                <i class="fa-brands fa-instagram text-zinc-500"></i> @raffz.zhevv
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-zinc-800/80 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-mono text-zinc-500">
                <p>&copy; 2026 Rafi Zhevirgi. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js?v=13.0"></script>
    <script>
        function openModal(imgSrc, title, issuer) {
            document.getElementById('modalImg').src = imgSrc;
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalIssuer').textContent = issuer;
            document.getElementById('certModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(e) {
            document.getElementById('certModal').classList.remove('active');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.cert-view-trigger').forEach(trigger => {
                trigger.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const imgSrc = trigger.getAttribute('data-img');
                    const title = trigger.getAttribute('data-title');
                    const issuer = trigger.getAttribute('data-issuer');
                    openModal(imgSrc, title, issuer);
                });
            });

            // Filter logic
            const filterBtns = document.querySelectorAll('.cert-filter-btn');
            const certCards = document.querySelectorAll('.cert-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');

                    certCards.forEach(card => {
                        if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
