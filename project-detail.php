<?php
/**
 * RAFFZ Portfolio - Project Detail Page
 * Clean Dark Aesthetic Stack (PHP & Tailwind CSS)
 */

// Data for projects with Roles and Tech Stack (Preserved backend array)
$projects = [
    'tanibantu' => [
        'title' => 'TaniBantu',
        'tags' => ['Web Development'],
        'year' => '2025',
        'roles' => ['Fullstack Developer'],
        'technologies' => ['Laravel', 'MySQL', 'PHP', 'Git', 'GitHub'],
        'desc' => 'TaniBantu merupakan proyek sistem pertanian yang membantu petani memperkirakan waktu panen, harga jual-beli hasil panen dan informasi terkait pertanian lainnya. Proyek ini bertujuan untuk menghubungkan para petani dengan teknologi modern, memudahkan mereka dalam distribusi hasil panen dan manajemen pasokan yang lebih efisien di pasar digital.',
        'images' => [
            'img/landing page_tanibantu 1.png',
            'img/landing page_tanibantu 2.png',
            'img/landing page_tanibantu 3.png'
        ],
        'demo_url' => 'https://github.com/raffz1/tanibantu'
    ],
    'rentcircle' => [
        'title' => 'RentCircle',
        'tags' => ['Web Development'],
        'year' => '2025',
        'roles' => ['Fullstack Developer', 'UI/UX Designer'],
        'technologies' => ['Laravel', 'PHP', 'MySQL', 'JavaScript', 'HTML5', 'Figma'],
        'desc' => 'RentCircle adalah aplikasi peer-to-peer rental platform. Platform ini dirancang menggunakan arsitektur modern berbasis Laravel untuk mendesain antarmuka dengan gaya glassmorphism UI/UX. Menyediakan pengalaman meminjam barang antar-tetangga yang mulus, aman, dan dapat dipercaya di lingkungan sekitar terdekat.',
        'images' => [
            'img/rent-circle_1.png',
            'img/rent-circle_2.png',
            'img/rent-circle_3.png'
        ],
        'demo_url' => 'https://github.com/raffz1/rentcircle'
    ],
    'sinta' => [
        'title' => 'SINTA: Sari Animasi Jantung',
        'tags' => ['Web Development', 'HealthTech', 'Interactive Web'],
        'year' => '2026',
        'roles' => [
            'Fullstack Developer (Rancangan Arsitektur UI/UX, Pengembangan Kode Frontend & Logic, Integrasi State Management, Optimization & Deployment)'
        ],
        'technologies' => ['HTML5', 'Tailwind CSS', 'Alpine.js', 'Git', 'GitHub', 'Vercel'],
        'desc' => 'SINTA dikembangkan sebagai solusi inovasi teknologi kesehatan digital yang menggabungkan fitur skrining mandiri dengan visualisasi animasi jantung interaktif untuk mengukur faktor risiko penyakit kardiovaskular dan penyakit menular. Aplikasi ini telah sukses diuji coba dan diimplementasikan secara langsung pada program pameran edukasi kesehatan pengabdian masyarakat (KKN-Doktor Mengabdi Universitas Brawijaya) di Desa Talang, Kecamatan Sendang, Kabupaten Tulungagung. Dalam penerapannya, SINTA digunakan oleh puluhan pemuda Karang Taruna dan warga lokal sebagai media skrining interaktif berbasis QR Code, terbukti meningkatkan pemahaman masyarakat terhadap gaya hidup sehat serta deteksi dini penyakit kardiovaskular secara efektif dan menyenangkan.',
        'images' => [
            'img/sinta_1.png',
            'img/sinta_2.png',
            'img/sinta_3.png'
        ],
        'demo_url' => 'https://sinta-app-two.vercel.app/'
    ],
    'pathdeck' => [
        'title' => 'Path-Deck',
        'tags' => ['Web Development', 'EduTech'],
        'year' => '2026',
        'roles' => ['Project Manager', 'Full Stack Developer'],
        'technologies' => ['Laravel', 'MySQL', 'PHP', 'Git', 'GitHub', 'Trello'],
        'desc' => 'Path-Deck adalah platform simulasi web interaktif yang memanfaatkan mekanisme gamifikasi kartu digital (deck-based simulation) untuk membantu generasi muda memahami perencanaan karier dan mitigasi risiko finansial. Dibangun untuk mengatasi minimnya media edukasi praktis seputar keputusan keuangan di masa transisi perkuliahan dan dunia kerja, platform ini menghadirkan skenario pilihan bercabang (branching scenarios). Pengguna ditantang mengelola modal, alokasi dana darurat, serta investasi pengembangan diri melalui kartu strategi, dengan algoritma kalkulasi dinamis yang langsung merefleksikan konsekuensi finansial jangka panjang dari setiap keputusan yang diambil.',
        'images' => [
            'img/pathdeck_1.png',
            'img/pathdeck_2.png',
            'img/pathdeck_3.png',
            'img/pathdeck_4.png',
            'img/pathdeck_5.png',
            'img/pathdeck_6.png',
            'img/pathdeck_7.png'
        ],
        'demo_url' => 'https://github.com/raffz1/pathdeck'
    ],
    'nodfinc' => [
        'title' => 'Nodfinc.',
        'tags' => ['Web Development', 'Gesture & Gamification'],
        'year' => '2026',
        'roles' => ['Full Stack Developer'],
        'technologies' => ['JavaScript', 'HTML5', 'CSS3', 'MediaPipe Face Mesh', 'Gesture Recognition'],
        'desc' => 'Nodfinc. adalah platform simulasi literasi finansial interaktif yang memanfaatkan kecerdasan buatan berbasis computer vision untuk mendeteksi gestur kepala (mengangguk dan menggeleng) sebagai kontrol pengambilan keputusan. Melalui simulasi gamifikasi ini, pengguna diajak mengasah kebiasaan finansial yang bijak secara intuitif, menyenangkan, dan bebas sentuhan.',
        'images' => [
            'img/nodfinc_1.png',
            'img/nodfinc_2.png',
            'img/nodfinc_3.png',
            'img/nodfinc_4.png',
            'img/nodfinc_5.png',
            'img/nodfinc_6.png',
            'img/nodfinc_7.png',
        ],
        'demo_url' => 'https://nodfinc.vercel.app/'
    ],
    'socratiq' => [
        'title' => 'Socratiq AI',
        'tags' => ['Web Development', 'GenAI & LLM'],
        'year' => '2025',
        'roles' => ['Full Stack Developer', 'AI Engineer'],
        'technologies' => ['JavaScript', 'Tailwind CSS', 'CSS3'],
        'desc' => 'Socratiq AI merupakan platform pendamping belajar adaptif yang mengintegrasikan kecerdasan buatan dengan metode sokrates untuk mencegah cognitive offloading atau ketergantungan jawaban instan. Alih-alih langsung menyajikan hasil akhir, sistem membimbing siswa memahami konsep inti secara mandiri melalui pertanyaan reflektif, kuis interaktif bertahap, dan pemrosesan bahan ajar digital.',
        'images' => [
            'img/socratiq_1.png',
            'img/socratiq_2.png',
            'img/socratiq_3.png',
            'img/socratiq_4.png',
        ],
        'demo_url' => 'https://socratiq-ai-learn.vercel.app'
    ],
    'kritikaedu' => [
        'title' => 'Kritika.Edu',
        'tags' => ['Web Development', 'EduTech', 'Civic Tech'],
        'year' => '2026',
        'roles' => ['Full Stack Developer'],
        'technologies' => ['HTML5', 'Tailwind CSS', 'Alpine.js', 'JavaScript', 'GitHub'],
        'desc' => 'Kritika.Edu adalah platform literasi politik dan civic education interaktif yang dirancang untuk meningkatkan pemahaman masyarakat terhadap proses kebijakan publik. Dengan antarmuka berbasis gamifikasi, platform ini memandu pengguna melalui alur kerja legislasi, analisis data parlemen, dan simulasi debat politik secara edukatif dan terstruktur.',
        'images' => [
            'img/kritika edu_1.png',
            'img/kritika edu_2.png',
            'img/kritika edu_3.png',
            'img/kritika edu_4.png',
            'img/kritika edu_5.png',
            'img/kritika edu_6.png',
            'img/kritika edu_7.png',
            'img/kritika edu_8.png',
            'img/kritika edu_9.png',
        ],
        'demo_url' => 'https://kritika-edu.vercel.app/'
    ]
];

$id = isset($_GET['id']) ? $_GET['id'] : 'tanibantu';
if (!array_key_exists($id, $projects)) {
    $id = 'tanibantu';
}
$project = $projects[$id];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAFFZ | <?php echo htmlspecialchars($project['title']); ?></title>
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
        .project-detail-page {
            padding-top: 7.5rem;
        }

        .project-detail-page .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.25s ease;
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        .project-detail-page .back-link:hover {
            color: #ffffff;
            transform: translateX(-4px);
        }

        .detail-header-card {
            max-width: 860px;
            margin: 0 auto 2rem auto;
            background: rgba(18, 18, 24, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 16px;
            padding: 2.25rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .detail-title {
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            line-height: 1.15;
            color: #ffffff;
            letter-spacing: -0.02em;
        }

        .project-carousel-wrapper {
            position: relative;
            width: 100%;
            height: 420px;
            max-width: 860px;
            margin: 0 auto 2.25rem auto;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
            background: #050507;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .project-carousel {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            transition: transform 0.5s ease-out;
            height: 100%;
            width: 100%;
        }

        .carousel-slide {
            min-width: 100%;
            width: 100%;
            flex: 0 0 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #070709;
        }

        .carousel-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(10, 10, 16, 0.8);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.15);
            width: 44px;
            height: 44px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(8px);
            z-index: 10;
        }

        .carousel-btn:hover {
            background: #dc2626;
            transform: translateY(-50%) scale(1.05);
        }

        .prev-btn { left: 16px; }
        .next-btn { right: 16px; }

        .carousel-dots {
            position: absolute;
            bottom: 16px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
            background: rgba(0, 0, 0, 0.6);
            padding: 5px 12px;
            border-radius: 9999px;
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .carousel-dots .dot {
            width: 8px;
            height: 8px;
            background: rgba(255, 255, 255, 0.35);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .carousel-dots .dot.active, .carousel-dots .dot:hover {
            background: #ef4444;
            transform: scale(1.2);
        }

        .detail-meta-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            max-width: 860px;
            margin: 0 auto 2rem auto;
        }

        .detail-info-card {
            background: rgba(18, 18, 24, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(16px);
            border-radius: 16px;
            padding: 1.75rem 2rem;
            transition: all 0.3s ease;
        }

        .detail-info-card:hover {
            border-color: rgba(239, 68, 68, 0.35);
        }

        .desc-info-card {
            max-width: 860px;
            margin: 0 auto 3rem auto;
            border-left: 3px solid #dc2626;
        }

        .detail-card-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding-bottom: 0.75rem;
        }

        .role-badge-list, .tech-badge-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            margin-top: 0.5rem;
        }

        .role-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 0.4rem 0.85rem;
            background: rgba(239, 68, 68, 0.08);
            border: 1px solid rgba(239, 68, 68, 0.25);
            color: #ef4444;
            border-radius: 6px;
            font-size: 0.82rem;
            font-weight: 600;
        }

        .tech-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 0.4rem 0.8rem;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: #e2e8f0;
            border-radius: 6px;
            font-size: 0.82rem;
            font-weight: 500;
            font-family: 'JetBrains Mono', monospace;
        }

        @media (max-width: 768px) {
            .project-detail-page {
                padding-top: 6rem;
            }

            .detail-header-card, .detail-info-card, .desc-info-card {
                padding: 1.25rem;
            }

            .project-carousel-wrapper {
                height: 250px !important;
            }
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

    <main class="project-detail-page container pb-20 relative z-10">
        <div style="max-width: 860px; margin: 0 auto;">
            <!-- Navigation Back Link -->
            <a href="project.php" class="back-link">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Kembali ke Katalog Proyek</span>
            </a>
        </div>

        <!-- 1. Header Title & Meta Box -->
        <div class="detail-header-card scroll-reveal">
            <div class="flex flex-col md:flex-row md:items-start justify-between gap-5">
                <div>
                    <h1 class="detail-title mb-4">
                        <?php echo htmlspecialchars($project['title']); ?>
                    </h1>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-2 font-mono text-xs font-semibold bg-zinc-800 border border-zinc-700 text-zinc-300 px-3 py-1.5 rounded-md">
                            <i class="fa-regular fa-calendar text-red-500"></i> 
                            <?php echo htmlspecialchars($project['year']); ?>
                        </span>
                        <div class="project-tags">
                            <?php foreach($project['tags'] as $tag): ?>
                                <span class="project-tag"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                
                <?php if(!empty($project['demo_url'])): ?>
                <div class="pt-2 md:pt-0">
                    <a href="<?php echo htmlspecialchars($project['demo_url']); ?>" target="_blank" class="btn-primary text-sm whitespace-nowrap">
                        <span>Live Demo / Source</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- 2. Interactive Photo Carousel -->
        <div class="project-carousel-wrapper scroll-reveal delay-100">
            <div class="project-carousel" id="projectCarousel">
                <?php foreach($project['images'] as $index => $img): ?>
                    <div class="carousel-slide">
                        <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($project['title']); ?> Screenshot <?php echo $index+1; ?>" class="carousel-img">
                    </div>
                <?php endforeach; ?>
            </div>
            
            <?php if(count($project['images']) > 1): ?>
            <button class="carousel-btn prev-btn" onclick="prevSlide()" aria-label="Previous image"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="carousel-btn next-btn" onclick="nextSlide()" aria-label="Next image"><i class="fa-solid fa-chevron-right"></i></button>
            <div class="carousel-dots" id="carouselDots">
                <?php foreach($project['images'] as $index => $img): ?>
                    <span class="dot <?php echo $index === 0 ? 'active' : ''; ?>" onclick="goToSlide(<?php echo $index; ?>)"></span>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>

        <!-- 3. Roles & Technologies Grid -->
        <div class="detail-meta-grid scroll-reveal delay-200">
            <!-- Peran Card -->
            <div class="detail-info-card">
                <h3 class="detail-card-title">
                    <i class="fa-solid fa-user-gear text-red-500"></i>
                    <span>Peran & Kontribusi</span>
                </h3>
                <div class="role-badge-list">
                    <?php if(!empty($project['roles'])): ?>
                        <?php foreach($project['roles'] as $role): ?>
                            <span class="role-badge">
                                <i class="fa-solid fa-check text-xs"></i> <?php echo htmlspecialchars($role); ?>
                            </span>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span class="text-zinc-500 text-sm">Tidak ada informasi peran.</span>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Teknologi Card -->
            <div class="detail-info-card">
                <h3 class="detail-card-title">
                    <i class="fa-solid fa-layer-group text-red-500"></i>
                    <span>Teknologi & Tools</span>
                </h3>
                <div class="tech-badge-list">
                    <?php if(!empty($project['technologies'])): ?>
                        <?php foreach($project['technologies'] as $tech): ?>
                            <span class="tech-badge">
                                <i class="fa-solid fa-code text-red-400 text-xs"></i> <?php echo htmlspecialchars($tech); ?>
                            </span>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span class="text-zinc-500 text-sm">Tidak ada informasi teknologi.</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- 4. Deskripsi Lengkap Proyek -->
        <div class="detail-info-card desc-info-card scroll-reveal delay-300">
            <h2 class="detail-card-title text-xl">
                <i class="fa-solid fa-circle-info text-red-500"></i>
                <span>Deskripsi & Analisis Solusi</span>
            </h2>
            <p class="text-zinc-300 leading-relaxed text-base">
                <?php echo htmlspecialchars($project['desc']); ?>
            </p>
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
        const carousel = document.getElementById('projectCarousel');
        const dots = document.querySelectorAll('.carousel-dots .dot');
        let currentSlide = 0;
        const totalSlides = <?php echo count($project['images']); ?>;

        function updateCarousel() {
            if(!carousel) return;
            carousel.style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        function goToSlide(index) {
            currentSlide = index;
            updateCarousel();
        }

        if(totalSlides > 1) {
            setInterval(nextSlide, 6000);
        }
    </script>
</body>
</html>
