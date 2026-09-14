<?php
/**
 * RAFFZ Portfolio Landing Page
 * Clean Dark Aesthetic Stack (PHP & Tailwind CSS)
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAFFZ | Portfolio Rafi</title>
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
                <a href="index.php" class="capsule-link active"><i class="fa-solid fa-house"></i> Home</a>
                <a href="journey.php" class="capsule-link"><i class="fa-solid fa-route"></i> Journey</a>
                <a href="project.php" class="capsule-link"><i class="fa-solid fa-rocket"></i> Projects</a>
                <a href="certificate.php" class="capsule-link"><i class="fa-solid fa-award"></i> Certificates</a>
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

    <!-- Main Content -->
    <main class="relative z-10">
        <!-- Hero Section with Static Masked Photo & Solid Headers -->
        <section id="home" class="hero container">
            <div class="hero-left scroll-reveal">
                <span class="hero-greeting font-mono text-xs">
                    [ OVERVIEW ]
                </span>
                <h1 class="hero-name text-white">RAFI ZHEVIRGI</h1>
                <h2 class="hero-role">
                    <span id="typewriter"></span><span class="cursor">_</span>
                </h2>
                <p class="hero-desc">
                    Mahasiswa Pendidikan Teknologi Informasi FILKOM Universitas Brawijaya yang berfokus pada pengembangan web end-to-end serta manajemen proyek perangkat lunak. Berpengalaman merancang antarmuka intuitif, mengeksekusi arsitektur kode yang terstruktur, hingga memimpin alur kerja tim dalam membangun platform digital yang solutif.
                </p>
                
                <!-- Social Nodes -->
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/rafi-zhevirgi" target="_blank" aria-label="LinkedIn" title="LinkedIn Profile">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="https://github.com/raffz1" target="_blank" aria-label="GitHub" title="GitHub Repository">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                    </a>
                    <a href="https://instagram.com/raffz.zhevv" target="_blank" aria-label="Instagram" title="Instagram Profile">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="mailto:rafizhevirgialwafa@gmail.com" aria-label="Email" title="Send Email">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </a>
                </div>

                <!-- Action CTAs -->
                <div class="hero-ctas">
                    <a href="contact.php" class="btn-primary">
                        <span>Hubungi Saya</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    <a href="project.php" class="btn-ghost">
                        <span>Lihat Semua Proyek</span>
                        <i class="fa-solid fa-code text-xs"></i>
                    </a>
                </div>
            </div>
            
            <!-- Framed Portrait Photo Container -->
            <div class="hero-right scroll-reveal delay-200">
                <div class="w-full max-w-sm sm:max-w-md aspect-[3/4] rounded-3xl p-2 bg-zinc-900/80 border border-zinc-800 shadow-2xl overflow-hidden">
                    <img src="img/rafiporto.png" alt="Rafi Zhevirgi" class="w-full h-full object-cover object-top rounded-2xl">
                </div>
            </div>
        </section>

        <!-- Journey Summary Section -->
        <section id="journey-summary" class="journey-summary-section container">
            <div class="summary-header scroll-reveal">
                <div>
                    <span class="hero-greeting font-mono text-xs">
                        [ JOURNEY ]
                    </span>
                    <h2 class="section-title text-white mt-1">My Journey Brief</h2>
                </div>
                <a href="journey.php" class="text-link">
                    Follow full journey <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="mini-timeline">
                <!-- Segment 1 -->
                <div class="mini-timeline-item scroll-reveal delay-100">
                    <div class="lite-card">
                        <span class="timeline-date">2021 - 2024</span>
                        <h3>Lulus SMAN 1 Purwokerto</h3>
                        <p>Membangun fondasi akademik unggul dan mengasah kepemimpinan organisasi melalui Rohis & PMR Wira.</p>
                    </div>
                </div>

                <!-- Segment 2 -->
                <div class="mini-timeline-item scroll-reveal delay-200">
                    <div class="lite-card">
                        <span class="timeline-date">2024</span>
                        <h3>Universitas Brawijaya</h3>
                        <p>Pendidikan Teknologi Informasi, Fakultas Ilmu Komputer. Mulai mendalami fondasi komputasi & software engineering.</p>
                    </div>
                </div>

                <!-- Segment 3 -->
                <div class="mini-timeline-item scroll-reveal delay-300">
                    <div class="lite-card">
                        <span class="timeline-date">2025</span>
                        <h3>Eksplorasi & Kepanitiaan</h3>
                        <p>Aktif di LDK-UAKI UB serta kepanitiaan besar (RAJA Brawijaya, PKKMB FILKOM) sembari mendalami perancangan website modern.</p>
                    </div>
                </div>

                <!-- Segment 4 -->
                <div class="mini-timeline-item scroll-reveal delay-400">
                    <div class="lite-card">
                        <span class="timeline-date">2026 - Present</span>
                        <h3>Active Development</h3>
                        <p>Fokus membangun platform digital, arsitektur frontend modern, dan aplikasi berbasis AI inovatif.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Projects Section -->
        <section id="recent-projects" class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
            <div class="summary-header scroll-reveal">
                <div>
                    <span class="hero-greeting font-mono text-xs">
                        [ PROJECTS ]
                    </span>
                    <h2 class="section-title text-white mt-1">Proyek Terbaru</h2>
                </div>
                <a href="project.php" class="text-link">
                    Lihat semua proyek <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                <!-- Project 1: Kritika.Edu -->
                <div class="project-card scroll-reveal delay-100 w-full h-full flex flex-col justify-between cursor-default select-none">
                    <div>
                        <a href="project-detail.php?id=kritikaedu" class="project-img-wrapper block cursor-pointer" aria-label="Lihat Kritika.Edu">
                            <img src="img/kritika edu_1.png" alt="Kritika.Edu" class="project-img">
                        </a>
                        <div class="project-tags">
                            <span class="project-tag">Edukasi</span>
                            <span class="project-tag">Civic Tech</span>
                        </div>
                        <h3 class="project-title font-bold text-white">Kritika.Edu</h3>
                        <p class="project-desc text-xs sm:text-sm text-zinc-400 leading-relaxed mb-4">Platform edukasi politik dan literasi data interaktif untuk melatih verifikasi fakta serta analisis kebijakan publik secara kritis bagi generasi muda.</p>
                    </div>
                    <div class="pt-2 border-t border-white/5">
                        <a href="project-detail.php?id=kritikaedu" class="project-link cursor-pointer">
                            <span>BACA DETAIL PROYEK</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 2: Socratiq AI -->
                <div class="project-card scroll-reveal delay-200 w-full h-full flex flex-col justify-between cursor-default select-none">
                    <div>
                        <a href="project-detail.php?id=socratiq" class="project-img-wrapper block cursor-pointer" aria-label="Lihat SOCRATIQ AI">
                            <img src="img/socratiq_1.png" alt="SOCRATIQ AI" class="project-img">
                        </a>
                        <div class="project-tags">
                            <span class="project-tag">Edukasi</span>
                            <span class="project-tag">Artificial Intelligence</span>
                        </div>
                        <h3 class="project-title font-bold text-white">Socratiq AI</h3>
                        <p class="project-desc text-xs sm:text-sm text-zinc-400 leading-relaxed mb-4">Platform pendamping belajar cerdas dengan metode sokrates untuk mencegah ketergantungan jawaban instan (cognitive offloading).</p>
                    </div>
                    <div class="pt-2 border-t border-white/5">
                        <a href="project-detail.php?id=socratiq" class="project-link cursor-pointer">
                            <span>BACA DETAIL PROYEK</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 3: Nodfinc -->
                <div class="project-card scroll-reveal delay-300 w-full h-full flex flex-col justify-between cursor-default select-none">
                    <div>
                        <a href="project-detail.php?id=nodfinc" class="project-img-wrapper block cursor-pointer" aria-label="Lihat Nodfinc">
                            <img src="img/nodfinc_1.png" alt="Nodfinc" class="project-img">
                        </a>
                        <div class="project-tags">
                            <span class="project-tag">Edukasi</span>
                            <span class="project-tag">FinTech</span>
                        </div>
                        <h3 class="project-title font-bold text-white">Nodfinc.</h3>
                        <p class="project-desc text-xs sm:text-sm text-zinc-400 leading-relaxed mb-4">Platform simulasi literasi finansial interaktif berbasis kontrol gestur kepala (angguk & geleng) bertenaga computer vision.</p>
                    </div>
                    <div class="pt-2 border-t border-white/5">
                        <a href="project-detail.php?id=nodfinc" class="project-link cursor-pointer">
                            <span>BACA DETAIL PROYEK</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 scroll-reveal">
                <a href="project.php" class="btn-primary">
                    <span>Lihat Semua Proyek</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- Featured Certificates Section -->
        <section id="featured-certificates" class="container py-12">
            <div class="summary-header scroll-reveal">
                <div>
                    <span class="hero-greeting font-mono text-xs">
                        [ RECOGNITION ]
                    </span>
                    <h2 class="section-title text-white mt-1">Sertifikat Unggulan</h2>
                </div>
                <a href="certificate.php" class="text-link">
                    Lihat semua sertifikat <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="project-grid">
                <!-- Cert 1 -->
                <div class="cert-card scroll-reveal delay-100">
                    <div>
                        <div class="project-img-wrapper cert-view-trigger cursor-pointer" 
                             data-img="img/IDF 4 BISNIS PLAN_SILVER MEDAL.png"
                             data-title="IDEA Festival 4: Business Plan Competition (Silver Medal)"
                             data-issuer="IDEA Festival 4">
                            <img src="img/IDF 4 BISNIS PLAN_SILVER MEDAL.png" alt="Silver Medal IDEA Festival 4" class="project-img">
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <span class="cert-badge">
                                <i class="fa-solid fa-trophy"></i> Kompetisi
                            </span>
                            <span class="text-xs font-mono text-zinc-400">
                                2024
                            </span>
                        </div>
                        <h3 class="project-title text-lg">IDEA Festival 4: Silver Medal</h3>
                        <div class="cert-issuer">
                            <i class="fa-solid fa-building-columns text-red-500"></i> 
                            IDEA Festival 4
                        </div>
                        <p class="project-desc">Raihan Medali Perak (Juara 2) pada Business Plan Competition tingkat nasional IDEA Festival 4.</p>
                    </div>
                    <div class="mt-4">
                        <button class="btn-primary w-full cert-view-trigger text-sm py-2.5" 
                                data-img="img/IDF 4 BISNIS PLAN_SILVER MEDAL.png"
                                data-title="IDEA Festival 4: Business Plan Competition (Silver Medal)"
                                data-issuer="IDEA Festival 4">
                            <span>Lihat Sertifikat</span>
                            <i class="fa-solid fa-expand ml-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Cert 2 -->
                <div class="cert-card scroll-reveal delay-200">
                    <div>
                        <div class="project-img-wrapper cert-view-trigger cursor-pointer" 
                             data-img="img/RAJA BRAWIJAYA 2025_RAFI ZHEVIRGI ALWAFA - 245150600111031 - Panitia RAJA Brawijaya 2025-1.png"
                             data-title="Panitia Supervisor RAJA Brawijaya 2025"
                             data-issuer="Universitas Brawijaya">
                            <img src="img/RAJA BRAWIJAYA 2025_RAFI ZHEVIRGI ALWAFA - 245150600111031 - Panitia RAJA Brawijaya 2025-1.png" alt="Favorite Poster IDEA Festival 4" class="project-img">
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <span class="cert-badge">
                                <i class="fa-solid fa-award"></i> Panitia
                            </span>
                            <span class="text-xs font-mono text-zinc-400">
                                2025
                            </span>
                        </div>
                        <h3 class="project-title text-lg">Panitia Supervisor RAJA Brawijaya 2025</h3>
                        <div class="cert-issuer">
                            <i class="fa-solid fa-building-columns text-red-500"></i> 
                            Universitas Brawijaya
                        </div>
                        <p class="project-desc">Rangkaian kegiatan orientasi mahasiswa baru yang diselenggarakan oleh Senat Mahasiswa Universitas Brawijaya.</p>
                    </div>
                    <div class="mt-4">
                        <button class="btn-primary w-full cert-view-trigger text-sm py-2.5" 
                                data-img="img/RAJA BRAWIJAYA 2025_RAFI ZHEVIRGI ALWAFA - 245150600111031 - Panitia RAJA Brawijaya 2025-1.png"
                                data-title="Panitia Supervisor RAJA Brawijaya 2025"
                                data-issuer="Universitas Brawijaya">
                            <span>Lihat Sertifikat</span>
                            <i class="fa-solid fa-expand ml-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Cert 3 -->
                <div class="cert-card scroll-reveal delay-300">
                    <div>
                        <div class="project-img-wrapper cert-view-trigger cursor-pointer" 
                             data-img="img/cnf bp jogja.png"
                             data-title="CNF Business Plan Competition Jogja 2025"
                             data-issuer="CNF Jogja">
                            <img src="img/cnf bp jogja.png" alt="CNF Jogja 2025" class="project-img">
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <span class="cert-badge">
                                <i class="fa-solid fa-scroll"></i> Kompetisi
                            </span>
                            <span class="text-xs font-mono text-zinc-400">
                                2025
                            </span>
                        </div>
                        <h3 class="project-title text-lg">Cipta Nusantara Fest Business Plan Competition Jogja 2025</h3>
                        <div class="cert-issuer">
                            <i class="fa-solid fa-building-columns text-red-500"></i> 
                            CNF Jogja
                        </div>
                        <p class="project-desc">Raihan Medali Perak (Juara 2) pada Business Plan Competition tingkat nasional CNF Jogja 2025.</p>
                    </div>
                    <div class="mt-4">
                        <button class="btn-primary w-full cert-view-trigger text-sm py-2.5" 
                                data-img="img/cnf bp jogja.png"
                                data-title="CNF Business Plan Competition Jogja 2025"
                                data-issuer="CNF Jogja">
                            <span>Lihat Sertifikat</span>
                            <i class="fa-solid fa-expand ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 scroll-reveal">
                <a href="certificate.php" class="btn-primary">
                    <span>Lihat Semua Sertifikat</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- Certificate Lightbox Modal -->
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
    </main>

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
        });
    </script>
</body>
</html>
