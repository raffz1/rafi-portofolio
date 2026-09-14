<?php
/**
 * RAFFZ Portfolio - Projects Page
 * Clean Dark Aesthetic Stack (PHP & Tailwind CSS)
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAFFZ | Featured Projects & Technical Builds</title>
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
                <a href="index.php" class="capsule-link"><i class="fa-solid fa-house"></i> Home</a>
                <a href="journey.php" class="capsule-link"><i class="fa-solid fa-route"></i> Journey</a>
                <a href="project.php" class="capsule-link active"><i class="fa-solid fa-rocket"></i> Projects</a>
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

    <main class="projects-page max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 relative z-10">
        <header class="text-center mb-16 scroll-reveal">
            <span class="hero-greeting font-mono text-xs mb-2">
                [ FEATURED BUILDS ]
            </span>
            <h1 class="text-3xl md:text-5xl font-black mb-4 font-heading text-white">
                Projects
            </h1>
            <p class="text-zinc-400 max-w-xl mx-auto text-sm md:text-base">
                Koleksi sistem aplikasi, web interaktif adaptif, riset antarmuka, dan eksperimen algoritma yang telah dibangun.
            </p>
        </header>

        <div class="flex items-center justify-end mb-8 scroll-reveal">
            <div class="flex items-center gap-2">
                <label for="sortSelect" class="text-xs text-zinc-400 font-medium">Urutkan:</label>
                <select id="sortSelect" data-target="#projectsContainer" class="bg-zinc-900 border border-zinc-800 text-zinc-300 text-xs rounded-xl px-3 py-2 focus:outline-none focus:border-red-600 cursor-pointer transition">
                    <option value="default">Default (Terbaru)</option>
                    <option value="latest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="az">Abjad (A-Z)</option>
                    <option value="za">Abjad (Z-A)</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full" id="projectsContainer">
            
            <!-- Card 1: Kritika.Edu -->
            <div class="project-card scroll-reveal delay-100 w-full h-full flex flex-col justify-between cursor-default select-none" data-year="2026" data-title="Kritika.Edu" data-default-index="0">
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
                <div class="pt-3 border-t border-white/5">
                    <a href="project-detail.php?id=kritikaedu" class="project-link cursor-pointer">
                        <span>BACA DETAIL PROYEK</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2: Socratiq AI -->
            <div class="project-card scroll-reveal delay-200 w-full h-full flex flex-col justify-between cursor-default select-none" data-year="2026" data-title="Socratiq AI" data-default-index="1">
                <div>
                    <a href="project-detail.php?id=socratiq" class="project-img-wrapper block cursor-pointer" aria-label="Lihat Socratiq AI">
                        <img src="img/socratiq_1.png" alt="Socratiq AI" class="project-img">
                    </a>
                    <div class="project-tags">
                        <span class="project-tag">Edukasi</span>
                        <span class="project-tag">Artificial Intelligence</span>
                    </div>
                    <h3 class="project-title font-bold text-white">Socratiq AI</h3>
                    <p class="project-desc text-xs sm:text-sm text-zinc-400 leading-relaxed mb-4">Platform pendamping belajar cerdas dengan metode sokrates untuk mencegah ketergantungan jawaban instan (cognitive offloading).</p>
                </div>
                <div class="pt-3 border-t border-white/5">
                    <a href="project-detail.php?id=socratiq" class="project-link cursor-pointer">
                        <span>BACA DETAIL PROYEK</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3: Nodfinc -->
            <div class="project-card scroll-reveal delay-300 w-full h-full flex flex-col justify-between cursor-default select-none" data-year="2026" data-title="Nodfinc." data-default-index="2">
                <div>
                    <a href="project-detail.php?id=nodfinc" class="project-img-wrapper block cursor-pointer" aria-label="Lihat Nodfinc">
                        <img src="img/nodfinc_1.png" alt="Nodfinc." class="project-img">
                    </a>
                    <div class="project-tags">
                        <span class="project-tag">Edukasi</span>
                        <span class="project-tag">FinTech</span>
                    </div>
                    <h3 class="project-title font-bold text-white">Nodfinc.</h3>
                    <p class="project-desc text-xs sm:text-sm text-zinc-400 leading-relaxed mb-4">Platform simulasi literasi finansial interaktif berbasis kontrol gestur kepala (angguk & geleng) bertenaga computer vision.</p>
                </div>
                <div class="pt-3 border-t border-white/5">
                    <a href="project-detail.php?id=nodfinc" class="project-link cursor-pointer">
                        <span>BACA DETAIL PROYEK</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4: Path-Deck -->
            <div class="project-card scroll-reveal delay-100 w-full h-full flex flex-col justify-between cursor-default select-none" data-year="2025" data-title="Path-Deck" data-default-index="3">
                <div>
                    <a href="project-detail.php?id=pathdeck" class="project-img-wrapper block cursor-pointer" aria-label="Lihat Path-Deck">
                        <img src="img/pathdeck_1.png" alt="Path-Deck" class="project-img">
                    </a>
                    <div class="project-tags">
                        <span class="project-tag">Edukasi</span>
                        <span class="project-tag">FinTech</span>
                    </div>
                    <h3 class="project-title font-bold text-white">Path-Deck</h3>
                    <p class="project-desc text-xs sm:text-sm text-zinc-400 leading-relaxed mb-4">Platform asesmen karier interaktif berbasis gamifikasi untuk membantu siswa menemukan spesialisasi di ranah industri IT secara terarah.</p>
                </div>
                <div class="pt-3 border-t border-white/5">
                    <a href="project-detail.php?id=pathdeck" class="project-link cursor-pointer">
                        <span>BACA DETAIL PROYEK</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 5: TaniBantu -->
            <div class="project-card scroll-reveal delay-200 w-full h-full flex flex-col justify-between cursor-default select-none" data-year="2026" data-title="TaniBantu" data-default-index="4">
                <div>
                    <a href="project-detail.php?id=tanibantu" class="project-img-wrapper block cursor-pointer" aria-label="Lihat TaniBantu">
                        <img src="img/landing page_tanibantu 1.png" alt="TaniBantu" class="project-img">
                    </a>
                    <div class="project-tags">
                        <span class="project-tag">Web Development</span>
                        <span class="project-tag">Agritech</span>
                    </div>
                    <h3 class="project-title font-bold text-white">TaniBantu</h3>
                    <p class="project-desc text-xs sm:text-sm text-zinc-400 leading-relaxed mb-4">Platform agritech terpadu yang membantu estimasi panen, transparansi rantai pasok pasar, dan tata kelola distribusi komoditas pangan.</p>
                </div>
                <div class="pt-3 border-t border-white/5">
                    <a href="project-detail.php?id=tanibantu" class="project-link cursor-pointer">
                        <span>BACA DETAIL PROYEK</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 6: RentCircle -->
            <div class="project-card scroll-reveal delay-300 w-full h-full flex flex-col justify-between cursor-default select-none" data-year="2025" data-title="RentCircle" data-default-index="5">
                <div>
                    <a href="project-detail.php?id=rentcircle" class="project-img-wrapper block cursor-pointer" aria-label="Lihat RentCircle">
                        <img src="img/rent-circle_1.png" alt="RentCircle" class="project-img">
                    </a>
                    <div class="project-tags">
                        <span class="project-tag">Web Development</span>
                        <span class="project-tag">Rental Platform</span>
                    </div>
                    <h3 class="project-title font-bold text-white">RentCircle</h3>
                    <p class="project-desc text-xs sm:text-sm text-zinc-400 leading-relaxed mb-4">Aplikasi platform rental peer-to-peer (P2P) dengan arsitektur UI/UX modern berbasis glassmorphism, transaksi aman, dan real-time verification.</p>
                </div>
                <div class="pt-3 border-t border-white/5">
                    <a href="project-detail.php?id=rentcircle" class="project-link cursor-pointer">
                        <span>BACA DETAIL PROYEK</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
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
                            <a href="https://github.com/raffz" target="_blank" class="text-zinc-400 hover:text-white transition-colors inline-flex items-center gap-2">
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
</body>
</html>
