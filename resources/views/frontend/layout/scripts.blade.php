{{-- ============================================
     SCRIPTS GLOBAUX — SORIBA SARL
     GSAP + ScrollTrigger + Cursor + Reveal
     + Loading Screen + Particules
     Palette: Bleu sombre, Bleu clair, Blanc, Jaune
============================================ --}}

<script>
// ============================================
// 1. LOADING SCREEN
// ============================================
window.addEventListener('load', function () {
    setTimeout(function () {
        const ls = document.getElementById('loading-screen');
        if (ls) {
            ls.classList.add('hidden');
            // Déclencher les animations d'entrée
            triggerHeroAnimations();
        }
    }, 1600);
});

// ============================================
// 2. CURSEUR PERSONNALISÉ (optionnel)
// ============================================
const dot  = document.getElementById('cursor-dot');
const ring = document.getElementById('cursor-ring');

let mouseX = 0, mouseY = 0;
let ringX = 0, ringY = 0;

if (dot && ring) {
    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        dot.style.left  = mouseX + 'px';
        dot.style.top   = mouseY + 'px';
    });

    // Ring avec délai (smooth lag)
    function animateRing() {
        ringX += (mouseX - ringX) * 0.12;
        ringY += (mouseY - ringY) * 0.12;
        ring.style.left = ringX + 'px';
        ring.style.top  = ringY + 'px';
        requestAnimationFrame(animateRing);
    }
    animateRing();

    // Grossissement au hover des liens et boutons
    document.querySelectorAll('a, button, .btn-gold, .btn-outline, .btn-outline-light, [data-cursor-hover]').forEach(el => {
        el.addEventListener('mouseenter', () => {
            dot.style.width = '14px';
            dot.style.height = '14px';
            ring.style.width = '56px';
            ring.style.height = '56px';
            ring.style.borderColor = 'rgba(245,197,24,0.8)';
        });
        el.addEventListener('mouseleave', () => {
            dot.style.width = '8px';
            dot.style.height = '8px';
            ring.style.width = '36px';
            ring.style.height = '36px';
            ring.style.borderColor = 'rgba(245,197,24,0.5)';
        });
    });
}

// ============================================
// 3. GSAP SCROLLTRIGGER SETUP
// ============================================
if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // Reveal elements au scroll
    gsap.utils.toArray('.gsap-reveal-up').forEach((el, i) => {
        gsap.fromTo(el,
            { opacity: 0, y: 60 },
            {
                opacity: 1, y: 0,
                duration: 0.9,
                ease: 'power3.out',
                delay: i * 0.05,
                scrollTrigger: {
                    trigger: el,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                }
            }
        );
    });

    gsap.utils.toArray('.gsap-reveal-left').forEach((el) => {
        gsap.fromTo(el,
            { opacity: 0, x: -60 },
            {
                opacity: 1, x: 0,
                duration: 0.9,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                }
            }
        );
    });

    gsap.utils.toArray('.gsap-reveal-right').forEach((el) => {
        gsap.fromTo(el,
            { opacity: 0, x: 60 },
            {
                opacity: 1, x: 0,
                duration: 0.9,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                }
            }
        );
    });

    // Stagger pour les grilles de cartes
    gsap.utils.toArray('.gsap-stagger-parent').forEach((parent) => {
        const children = parent.querySelectorAll('.gsap-stagger-child');
        gsap.fromTo(children,
            { opacity: 0, y: 50 },
            {
                opacity: 1, y: 0,
                duration: 0.7,
                ease: 'power3.out',
                stagger: 0.1,
                scrollTrigger: {
                    trigger: parent,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                }
            }
        );
    });

    // Parallax léger sur images / backgrounds
    gsap.utils.toArray('.gsap-parallax').forEach((el) => {
        const speed = el.dataset.speed || 0.3;
        gsap.to(el, {
            yPercent: -20 * speed,
            ease: 'none',
            scrollTrigger: {
                trigger: el,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true,
            }
        });
    });

    // Compteur animé
    document.querySelectorAll('.gsap-counter').forEach((el) => {
        const target = parseInt(el.dataset.target || 0);
        ScrollTrigger.create({
            trigger: el,
            start: 'top 80%',
            onEnter: () => {
                gsap.to({ val: 0 }, {
                    val: target,
                    duration: 2,
                    ease: 'power2.out',
                    onUpdate: function () {
                        el.textContent = Math.round(this.targets()[0].val).toLocaleString('fr-FR');
                    }
                });
            },
            once: true,
        });
    });
}

// ============================================
// 4. HERO ANIMATIONS (after loading)
// ============================================
function triggerHeroAnimations() {
    if (typeof gsap === 'undefined') return;

    const heroItems = document.querySelectorAll('.hero-animate');
    if (!heroItems.length) return;

    gsap.fromTo(heroItems,
        { opacity: 0, y: 40 },
        {
            opacity: 1,
            y: 0,
            duration: 1.1,
            ease: 'power3.out',
            stagger: 0.15,
        }
    );
}

// ============================================
// 5. SMOOTH SCROLL pour ancres
// ============================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// ============================================
// 6. REVEAL SIMPLE (fallback sans GSAP)
// ============================================
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });

document.querySelectorAll('.reveal-up, .reveal-fade, .animate-on-scroll').forEach(el => {
    revealObserver.observe(el);
});

// ============================================
// 7. MOUSE PARALLAX (effet de lumière)
// ============================================
document.addEventListener('mousemove', (e) => {
    const mouseXRatio = (e.clientX / window.innerWidth - 0.5) * 2;
    const mouseYRatio = (e.clientY / window.innerHeight - 0.5) * 2;

    document.querySelectorAll('[data-mouse-parallax]').forEach(el => {
        const strength = parseFloat(el.dataset.mouseParallax || 10);
        el.style.transform = `translate(${mouseXRatio * strength}px, ${mouseYRatio * strength}px)`;
    });
});

// ============================================
// 8. NEWSLETTER VALIDATION
// ============================================
function validateNewsletter(form) {
    const emailInput = form.querySelector('input[type="email"]');
    const email = emailInput ? emailInput.value.trim() : '';
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        emailInput.style.borderColor = '#ef4444';
        emailInput.style.borderWidth = '2px';
        emailInput.placeholder = 'Email invalide — réessayez';
        setTimeout(() => {
            emailInput.style.borderColor = '';
            emailInput.placeholder = 'Votre email professionnel';
        }, 3000);
        return false;
    }

    const msgDiv = document.getElementById('newsletter-msg');
    if (msgDiv) {
        msgDiv.textContent = '✓ Inscription confirmée. Vous recevrez nos prochaines actualités.';
        msgDiv.style.display = 'block';
        msgDiv.style.backgroundColor = 'rgba(34,197,94,0.1)';
        msgDiv.style.border = '1px solid rgba(34,197,94,0.3)';
        msgDiv.style.color = '#86efac';
        msgDiv.style.padding = '12px';
        msgDiv.style.borderRadius = '8px';
        msgDiv.style.marginTop = '12px';
        
        setTimeout(() => {
            msgDiv.style.display = 'none';
        }, 5000);
    }
    
    emailInput.value = '';
    return false;
}

// ============================================
// 9. COUNTDOWN TIMER
// ============================================
function initCountdown(targetDateStr) {
    const target = new Date(targetDateStr).getTime();

    function update() {
        const now  = Date.now();
        const diff = target - now;

        if (diff <= 0) {
            document.querySelectorAll('.countdown-number').forEach(el => el.textContent = '00');
            return;
        }

        const days    = Math.floor(diff / 86400000);
        const hours   = Math.floor((diff % 86400000) / 3600000);
        const minutes = Math.floor((diff % 3600000) / 60000);
        const seconds = Math.floor((diff % 60000) / 1000);

        const pad = n => String(n).padStart(2, '0');

        const dEl = document.getElementById('cd-days');
        const hEl = document.getElementById('cd-hours');
        const mEl = document.getElementById('cd-minutes');
        const sEl = document.getElementById('cd-seconds');

        if (dEl) dEl.textContent = pad(days);
        if (hEl) hEl.textContent = pad(hours);
        if (mEl) mEl.textContent = pad(minutes);
        if (sEl) sEl.textContent = pad(seconds);
    }

    update();
    setInterval(update, 1000);
}

// Initialiser si page welcome
if (document.getElementById('cd-days')) {
    initCountdown('2025-09-01T00:00:00');
}

// ============================================
// 10. PARTICULES CANVAS (optionnel)
// ============================================
function initParticles() {
    const canvas = document.getElementById('particles-canvas');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    let particles = [];
    let w, h;
    
    function resizeCanvas() {
        w = canvas.width = canvas.offsetWidth;
        h = canvas.height = canvas.offsetHeight;
    }
    
    class Particle {
        constructor() {
            this.reset();
        }
        reset() {
            this.x = Math.random() * w;
            this.y = Math.random() * h;
            this.size = Math.random() * 2 + 0.5;
            this.speedX = (Math.random() - 0.5) * 0.3;
            this.speedY = Math.random() * 0.5 + 0.1;
            this.opacity = Math.random() * 0.3 + 0.1;
        }
        update() {
            this.x += this.speedX;
            this.y -= this.speedY;
            if (this.y < -10 || this.x < -10 || this.x > w + 10) this.reset();
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(245, 197, 24, ${this.opacity})`;
            ctx.fill();
        }
    }
    
    function initParticlesArray() {
        particles = [];
        for (let i = 0; i < 60; i++) particles.push(new Particle());
    }
    
    function animateParticles() {
        ctx.clearRect(0, 0, w, h);
        particles.forEach(p => { p.update(); p.draw(); });
        requestAnimationFrame(animateParticles);
    }
    
    window.addEventListener('resize', () => {
        resizeCanvas();
        initParticlesArray();
    });
    
    resizeCanvas();
    initParticlesArray();
    animateParticles();
}

// Initialiser les particules si le canvas existe
if (document.getElementById('particles-canvas')) {
    initParticles();
}

// ============================================
// 11. FILTRES INTERACTIFS (Blog/Projets)
// ============================================
document.querySelectorAll('.filter-btn, .filter-tab').forEach(btn => {
    btn.addEventListener('click', function() {
        const container = this.closest('.filter-container');
        const buttons = container ? container.querySelectorAll('.filter-btn, .filter-tab') : document.querySelectorAll('.filter-btn, .filter-tab');
        
        buttons.forEach(b => {
            b.classList.remove('bg-amber-500', 'text-dark-blue', 'font-bold');
            b.classList.add('text-gray-400', 'border', 'border-white/10');
        });
        
        this.classList.add('bg-amber-500', 'text-dark-blue', 'font-bold');
        this.classList.remove('text-gray-400', 'border', 'border-white/10');
    });
});

// ============================================
// 12. MOBILE MENU FERMETURE SUR CLIC LIEN
// ============================================
document.querySelectorAll('#mobile-drawer a').forEach(link => {
    link.addEventListener('click', () => {
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu && mobileMenu.classList.contains('open')) {
            mobileMenu.classList.remove('open');
            document.body.style.overflow = '';
        }
    });
});
</script>