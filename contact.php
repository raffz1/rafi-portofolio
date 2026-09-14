<?php
/**
 * RAFFZ Portfolio - Contact Page
 * Clean Dark Aesthetic Stack (PHP & Tailwind CSS)
 */

$formSubmitted = false;
$feedbackMsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if (!empty($name) && !empty($email) && !empty($message)) {
        $formSubmitted = true;
        $feedbackMsg = 'Terima kasih, pesan Anda telah terkirim! Saya akan segera menghubungi Anda kembali.';
    } else {
        $feedbackMsg = 'Mohon lengkapi semua kolom yang wajib diisi.';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAFFZ | Get in Touch</title>
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
                <a href="project.php" class="capsule-link"><i class="fa-solid fa-rocket"></i> Projects</a>
                <a href="certificate.php" class="capsule-link"><i class="fa-solid fa-award"></i> Certificates</a>
                <a href="gallery.php" class="capsule-link"><i class="fa-solid fa-images"></i> Gallery</a>
                <a href="contact.php" class="capsule-link active"><i class="fa-solid fa-envelope"></i> Contact</a>
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

    <!-- Main Content Container -->
    <main class="max-w-6xl mx-auto px-6 pt-28 md:pt-36 pb-16 relative z-10">
        
        <!-- Header Label -->
        <div class="mb-10 scroll-reveal">
            <span class="hero-greeting font-mono text-xs">
                [ CONTACT ]
            </span>
            <h1 class="text-3xl md:text-5xl font-black text-white mt-3 font-heading">
                Ayo Wujudkan Ide Jadi Karya Nyata
            </h1>
            <p class="text-zinc-400 mt-2 max-w-2xl text-base">
                Punya rencana proyek web, rancangan produk digital, atau sekadar ingin berdiskusi santai seputar teknologi? Kirim pesan lewat formulir ini atau sapa saya via email.
            </p>
        </div>

        <?php if ($formSubmitted): ?>
            <div class="mb-8 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 flex items-center gap-3">
                <i class="fa-solid fa-circle-check text-lg"></i>
                <p class="text-sm font-medium"><?php echo htmlspecialchars($feedbackMsg); ?></p>
            </div>
        <?php endif; ?>

        <!-- Two-Column Ergonomic Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left Column: Direct Reachout -->
            <div class="lg:col-span-5 space-y-6 scroll-reveal delay-100">
                
                <!-- Direct Cards -->
                <div class="space-y-4">
                    
                    <!-- Email Card -->
                    <div class="p-5 rounded-xl bg-zinc-900/60 border border-zinc-800/90 hover:border-zinc-700 transition-colors">
                        <div class="flex items-start justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-red-500/10 border border-red-500/20 flex items-center justify-center text-red-400">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <span class="text-xs font-mono uppercase text-zinc-500">Email Address</span>
                                    <h4 class="text-white font-semibold text-sm">rafizhevirgialwafa@gmail.com</h4>
                                </div>
                            </div>
                            <button id="copyEmailBtn" data-email="rafizhevirgialwafa@gmail.com" class="text-xs font-mono px-3 py-1.5 rounded-md bg-zinc-800 hover:bg-zinc-700 text-zinc-300 transition-colors" title="Copy Email">
                                Copy
                            </button>
                        </div>
                    </div>

                    <!-- Location Card -->
                    <div class="p-5 rounded-xl bg-zinc-900/60 border border-zinc-800/90">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-zinc-800 flex items-center justify-center text-zinc-400">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <span class="text-xs font-mono uppercase text-zinc-500">Based in</span>
                                <h4 class="text-white font-semibold text-sm">Malang, East Java, Indonesia</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Academic Status Card -->
                    <div class="p-5 rounded-xl bg-zinc-900/60 border border-zinc-800/90">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-zinc-800 flex items-center justify-center text-zinc-400">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <span class="text-xs font-mono uppercase text-zinc-500">Affiliation</span>
                                <h4 class="text-white font-semibold text-sm">Universitas Brawijaya (FILKOM)</h4>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Connect Links -->
                <div class="pt-2">
                    <span class="text-xs font-mono uppercase tracking-wider text-zinc-500 block mb-3">Direct Social Channels</span>
                    <div class="flex flex-wrap gap-2.5">
                        <a href="https://www.linkedin.com/in/rafi-zhevirgi" target="_blank" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg bg-zinc-900/80 border border-zinc-800 text-xs font-medium text-zinc-300 hover:text-white hover:border-red-500/40 transition-colors">
                            <i class="fa-brands fa-linkedin text-sm"></i>
                            <span>LinkedIn</span>
                        </a>
                        <a href="https://github.com/raffz1" target="_blank" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg bg-zinc-900/80 border border-zinc-800 text-xs font-medium text-zinc-300 hover:text-white hover:border-red-500/40 transition-colors">
                            <i class="fa-brands fa-github text-sm"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="https://instagram.com/raffz.zhevv" target="_blank" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg bg-zinc-900/80 border border-zinc-800 text-xs font-medium text-zinc-300 hover:text-white hover:border-red-500/40 transition-colors">
                            <i class="fa-brands fa-instagram text-sm"></i>
                            <span>Instagram</span>
                        </a>
                        <a href="https://wa.me/6285712689375" target="_blank" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg bg-zinc-900/80 border border-zinc-800 text-xs font-medium text-zinc-300 hover:text-white hover:border-red-500/40 transition-colors">
                            <i class="fa-brands fa-whatsapp text-sm text-emerald-400"></i>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Column: Clean Contact Form -->
            <div class="lg:col-span-7 scroll-reveal delay-200">
                <form action="https://api.web3forms.com/submit" method="POST" class="p-6 md:p-8 rounded-2xl bg-zinc-900/40 border border-zinc-800/80 backdrop-blur-md space-y-5">
                    
                    <!-- Web3Forms Configuration -->
                    <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE">
                    <input type="hidden" name="from_name" value="Portfolio Visitor">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-xs font-mono uppercase tracking-wider text-zinc-400 mb-2">Nama Lengkap *</label>
                            <input type="text" id="name" name="name" required placeholder="Nama Anda" class="w-full bg-zinc-900/60 border border-zinc-800 rounded-xl px-4 py-3 text-white placeholder-zinc-600 focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none transition-colors text-sm">
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-mono uppercase tracking-wider text-zinc-400 mb-2">Alamat Email *</label>
                            <input type="email" id="email" name="email" required placeholder="emailAnda@gmail.com" class="w-full bg-zinc-900/60 border border-zinc-800 rounded-xl px-4 py-3 text-white placeholder-zinc-600 focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none transition-colors text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-xs font-mono uppercase tracking-wider text-zinc-400 mb-2">Subjek / Topik</label>
                        <input type="text" id="subject" name="subject" placeholder="Diskusi Proyek / Kerjasama / Inquiry" class="w-full bg-zinc-900/60 border border-zinc-800 rounded-xl px-4 py-3 text-white placeholder-zinc-600 focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none transition-colors text-sm">
                    </div>

                    <div>
                        <label for="message" class="block text-xs font-mono uppercase tracking-wider text-zinc-400 mb-2">Pesan *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Tuliskan detail kebutuhan, pertanyaan, atau ide yang ingin Anda sampaikan..." class="w-full bg-zinc-900/60 border border-zinc-800 rounded-xl px-4 py-3 text-white placeholder-zinc-600 focus:border-red-500 focus:ring-1 focus:ring-red-500 outline-none transition-colors text-sm resize-y"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-200 shadow-sm text-sm">
                            <span>Kirim Pesan</span>
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                        </button>
                    </div>

                </form>
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
        // Copy email helper
        const copyBtn = document.getElementById('copyEmailBtn');
        if (copyBtn) {
            copyBtn.addEventListener('click', () => {
                const email = copyBtn.getAttribute('data-email');
                navigator.clipboard.writeText(email).then(() => {
                    const originalText = copyBtn.textContent;
                    copyBtn.textContent = 'Copied!';
                    copyBtn.classList.add('bg-emerald-600', 'text-white');
                    setTimeout(() => {
                        copyBtn.textContent = originalText;
                        copyBtn.classList.remove('bg-emerald-600', 'text-white');
                    }, 2000);
                });
            });
        }
    </script>
</body>
</html>
