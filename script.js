/**
 * RAFFZ Cybernetic Portfolio Interactive Engine
 * Native JS with cubic-bezier physics & dynamic lighting
 */
document.addEventListener('DOMContentLoaded', () => {
    // 1. Cyber Typewriter Effect
    const typewriterElement = document.getElementById('typewriter');
    const roles = [
        'Project Manager',
        'Web & App Developer',
        'Fullstack Developer',
        'Frontend Developer',
        'Edtech Enthusiast'
    ];
    let roleIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function type() {
        if (!typewriterElement) return;
        const currentRole = roles[roleIndex];
        const displayDelay = isDeleting ? 40 : 80;

        if (isDeleting) {
            typewriterElement.textContent = currentRole.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typewriterElement.textContent = currentRole.substring(0, charIndex + 1);
            charIndex++;
        }

        let typeSpeed = displayDelay;

        if (!isDeleting && charIndex === currentRole.length) {
            isDeleting = true;
            typeSpeed = 2200; // Hold full word
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            roleIndex = (roleIndex + 1) % roles.length;
            typeSpeed = 400; // Pause before typing next word
        }

        setTimeout(type, typeSpeed);
    }

    if (typewriterElement) {
        setTimeout(type, 800);
    }

    // 2. Dynamic Floating Capsule Navbar Pill Indicator
    const capsuleLinksContainer = document.querySelector('.capsule-links');
    const capsuleLinksNodes = document.querySelectorAll('.capsule-link');
    const navIndicator = document.querySelector('.nav-indicator');
    
    function updatePill(link) {
        if (!link || !navIndicator || !capsuleLinksContainer) return;
        if (window.innerWidth <= 768) {
            navIndicator.style.opacity = '0';
            return;
        }
        const rect = link.getBoundingClientRect();
        const containerRect = capsuleLinksContainer.getBoundingClientRect();
        const scrollLeft = capsuleLinksContainer.scrollLeft;
        
        navIndicator.style.width = `${rect.width}px`;
        navIndicator.style.left = `${rect.left - containerRect.left + scrollLeft}px`;
        navIndicator.style.opacity = '1';
    }

    if (capsuleLinksContainer && navIndicator) {
        const initActive = document.querySelector('.capsule-link.active');
        if (initActive) {
            setTimeout(() => updatePill(initActive), 150);
        }

        capsuleLinksNodes.forEach(link => {
            link.addEventListener('mouseenter', () => updatePill(link));
        });

        capsuleLinksContainer.addEventListener('mouseleave', () => {
            const activeLink = document.querySelector('.capsule-link.active');
            if (activeLink) {
                updatePill(activeLink);
            } else {
                navIndicator.style.opacity = '0';
            }
        });
        
        window.addEventListener('resize', () => {
            const activeLink = document.querySelector('.capsule-link.active');
            if (activeLink) updatePill(activeLink);
        });
    }

    // 3. Mobile Navigation Drawer Toggle
    const mobileToggle = document.getElementById('mobileMenuBtn') || document.querySelector('.mobile-menu-toggle');
    const capsuleLinks = document.getElementById('capsuleLinks') || document.querySelector('.capsule-links');

    if (mobileToggle && capsuleLinks) {
        function toggleMobileMenu(e) {
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }
            const isOpen = mobileToggle.classList.toggle('active');
            capsuleLinks.classList.toggle('active', isOpen);
            document.body.classList.toggle('mobile-nav-open', isOpen);
        }

        function closeMobileMenu() {
            mobileToggle.classList.remove('active');
            capsuleLinks.classList.remove('active');
            document.body.classList.remove('mobile-nav-open');
        }

        mobileToggle.addEventListener('click', toggleMobileMenu);

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (mobileToggle.classList.contains('active')) {
                if (!capsuleLinks.contains(e.target) && !mobileToggle.contains(e.target)) {
                    closeMobileMenu();
                }
            }
        });

        // Close when a link inside is clicked
        const navItems = capsuleLinks.querySelectorAll('.capsule-link');
        navItems.forEach(item => {
            item.addEventListener('click', closeMobileMenu);
        });
    }

    // 4. Header Scroll State
    const header = document.querySelector('.capsule-header');
    if (header) {
        const checkScroll = () => {
            if (window.scrollY > 40) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };
        checkScroll();
        window.addEventListener('scroll', checkScroll, { passive: true });
    }

    // 5. Scroll Reveal with IntersectionObserver
    const revealElements = document.querySelectorAll('.scroll-reveal');
    if (revealElements.length > 0) {
        const revealOptions = {
            root: null,
            rootMargin: '0px 0px -40px 0px',
            threshold: 0.1
        };

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    observer.unobserve(entry.target);
                }
            });
        }, revealOptions);

        revealElements.forEach(el => {
            revealObserver.observe(el);
        });
    }

    // 6. Journey Timeline Animations & Progress Fill
    const timelineItems = document.querySelectorAll('.timeline-item');
    const timelineProgress = document.getElementById('timelineProgress');
    const journeySection = document.getElementById('journey');

    if (timelineItems.length > 0) {
        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, { threshold: 0.15 });

        timelineItems.forEach(item => {
            timelineObserver.observe(item);
        });
    }

    if (journeySection && timelineProgress) {
        window.addEventListener('scroll', () => {
            const sectionRect = journeySection.getBoundingClientRect();
            const sectionTop = sectionRect.top + window.scrollY;
            const sectionHeight = journeySection.offsetHeight;
            const windowHeight = window.innerHeight;
            const scrollPosition = window.scrollY + (windowHeight / 2);

            if (scrollPosition > sectionTop) {
                let percentage = ((scrollPosition - sectionTop) / (sectionHeight - (windowHeight / 2))) * 100;
                percentage = Math.max(0, Math.min(percentage, 100));
                timelineProgress.style.height = `${percentage}%`;
            } else {
                timelineProgress.style.height = '0%';
            }
        }, { passive: true });
    }

    // 7. Dynamic Cursor Spotlight Glow on Cyber Cards
    const interactiveCards = document.querySelectorAll('.project-card, .cert-card, .lite-card, .timeline-content, .detail-info-card');
    interactiveCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });

    // 8. Smooth Internal Scroll for Anchors
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const targetId = link.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    window.scrollTo({
                        top: targetElement.offsetTop - 90,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // 9. Universal Sorting Component (Projects, Certificates, Gallery)
    const sortSelect = document.getElementById('sortSelect');
    if (sortSelect) {
        const targetSelector = sortSelect.getAttribute('data-target') || '#projectsContainer, #certificatesContainer, #galleryContainer, .project-grid, .columns-1';
        const container = document.querySelector(targetSelector);

        if (container) {
            sortSelect.addEventListener('change', (e) => {
                const sortMode = e.target.value;
                const items = Array.from(container.children);

                items.sort((a, b) => {
                    const indexA = parseInt(a.getAttribute('data-default-index') || '0', 10);
                    const indexB = parseInt(b.getAttribute('data-default-index') || '0', 10);
                    const yearA = parseInt(a.getAttribute('data-year') || '0', 10);
                    const yearB = parseInt(b.getAttribute('data-year') || '0', 10);
                    const titleA = (a.getAttribute('data-title') || '').trim();
                    const titleB = (b.getAttribute('data-title') || '').trim();

                    if (sortMode === 'latest') {
                        if (yearB !== yearA) return yearB - yearA;
                        return indexA - indexB;
                    } else if (sortMode === 'oldest') {
                        if (yearA !== yearB) return yearA - yearB;
                        return indexA - indexB;
                    } else if (sortMode === 'az') {
                        return titleA.localeCompare(titleB, 'id', { sensitivity: 'base', numeric: true });
                    } else if (sortMode === 'za') {
                        return titleB.localeCompare(titleA, 'id', { sensitivity: 'base', numeric: true });
                    } else {
                        // default
                        return indexA - indexB;
                    }
                });

                items.forEach(item => {
                    container.appendChild(item);
                });
            });
        }
    }
});
