// ============================================
// Tasas de cambio USD/EUR en tiempo real
// ============================================
(function () {
    function fetchRates() {
        var rateUsd = document.getElementById('rateUsd');
        var rateEur = document.getElementById('rateEur');
        if (!rateUsd || !rateEur) return;
        fetch('api/rates.php')
            .then(function (r) { return r.json(); })
            .then(function (data) {
                rateUsd.textContent = 'Bs. ' + Number(data.usd).toLocaleString('es-VE');
                rateEur.textContent = 'Bs. ' + Number(data.eur).toLocaleString('es-VE');
            })
            .catch(function () {
                rateUsd.textContent = '---';
                rateEur.textContent = '---';
            });
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', fetchRates);
    } else {
        fetchRates();
    }
})();

// ============================================
// Menú móvil, dropdown servicios y scroll
// ============================================
(function () {
    // --- Menú mobile ---
    var menuBtn = document.getElementById('mobileMenuBtn');   // Botón hamburguesa
    var menuClose = document.getElementById('mobileMenuClose'); // Botón cerrar
    var mobileMenu = document.getElementById('mobileMenu');   // Overlay del menú

    // Abre el menú móvil deslizándolo hacia abajo
    function openMenu() {
        if (!mobileMenu) return;
        mobileMenu.classList.remove('-translate-y-full', 'pointer-events-none');
        mobileMenu.classList.add('translate-y-0', 'pointer-events-auto');
        document.body.style.overflow = 'hidden'; // Evita scroll detrás del menú
    }

    // Cierra el menú móvil deslizándolo hacia arriba
    function closeMenu() {
        if (!mobileMenu) return;
        mobileMenu.classList.add('-translate-y-full', 'pointer-events-none');
        mobileMenu.classList.remove('translate-y-0', 'pointer-events-auto');
        document.body.style.overflow = ''; // Restaura scroll
    }

    if (menuBtn) menuBtn.addEventListener('click', openMenu);
    if (menuClose) menuClose.addEventListener('click', closeMenu);

    if (mobileMenu) {
        // Cierra al hacer clic en cualquier enlace del menú
        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });
        // Cierra al hacer clic en el fondo oscuro
        mobileMenu.addEventListener('click', function (e) {
            if (e.target === mobileMenu || e.target === mobileMenu.querySelector('div:first-child')) {
                closeMenu();
            }
        });
    }

    // Cierra con tecla Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeMenu();
    });

    // --- Header sticky con sombra en mobile ---
    var header = document.querySelector('header.md\\:hidden');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.classList.add('shadow-md'); // Sombra al hacer scroll
            } else {
                header.classList.remove('shadow-md');
            }
        });
    }

    // --- Scroll suave para enlaces ancla ---
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
})();

// ============================================
// Typewriter effect for hero titles (loop)
// ============================================
(function () {
    var CURSOR_HTML = '<span class="typewriter-cursor">_</span>';
    var SPEED = 30;
    var LINE_PAUSE = 300;
    var LOOP_PAUSE = 800;

    function tokenize(html) {
        var tokens = [], regex = /<[^>]*>|[^<]+/g, m;
        while ((m = regex.exec(html)) !== null) {
            tokens.push({ isTag: m[0][0] === '<', value: m[0] });
        }
        return tokens;
    }

    function typeTokens(el, tokens, ti, ci, cb) {
        if (ti >= tokens.length) { if (cb) setTimeout(cb, 150); return; }
        var t = tokens[ti];
        if (t.isTag) {
            var cur = el.innerHTML;
            var idx = cur.lastIndexOf('<span class="typewriter-cursor">');
            var before = idx !== -1 ? cur.substring(0, idx) : cur;
            el.innerHTML = t.value.charAt(1) === '/' ? before + CURSOR_HTML + t.value : before + t.value + CURSOR_HTML;
            setTimeout(function () { typeTokens(el, tokens, ti + 1, 0, cb); }, SPEED);
            return;
        }
        if (ci < t.value.length) {
            var cur = el.innerHTML;
            var idx = cur.lastIndexOf('<span class="typewriter-cursor">');
            el.innerHTML = (idx !== -1 ? cur.substring(0, idx) : cur) + t.value[ci] + CURSOR_HTML;
            setTimeout(function () { typeTokens(el, tokens, ti, ci + 1, cb); }, SPEED);
        } else {
            setTimeout(function () { typeTokens(el, tokens, ti + 1, 0, cb); }, SPEED);
        }
    }

    var groups = {};
    document.querySelectorAll('[data-typewriter]').forEach(function (el) {
        var g = el.getAttribute('data-typewriter-group') || 'default';
        if (!groups[g]) groups[g] = [];
        groups[g].push(el);
    });

    var groupNames = Object.keys(groups);
    if (!groupNames.length) return;

    // Store original HTML and tokens for each group
    var cache = {};
    groupNames.forEach(function (name) {
        cache[name] = groups[name].map(function (el) {
            return { html: el.innerHTML, tokens: tokenize(el.innerHTML) };
        });
    });

    function typeGroup(name, idx, cb) {
        if (idx >= groups[name].length) { if (cb) setTimeout(cb, 300); return; }
        var el = groups[name][idx];
        var data = cache[name][idx];
        el.innerHTML = CURSOR_HTML;
        typeTokens(el, data.tokens, 0, 0, function () {
            setTimeout(function () { typeGroup(name, idx + 1, cb); }, LINE_PAUSE);
        });
    }

    function loop() {
        var gi = 0;
        function nextGroup() {
            if (gi >= groupNames.length) { gi = 0; setTimeout(nextGroup, LOOP_PAUSE); return; }
            typeGroup(groupNames[gi], 0, function () { gi++; setTimeout(nextGroup, 300); });
        }
        nextGroup();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loop);
    } else {
        loop();
    }
})();

// ============================================
// Scroll indicator: ocultar al hacer scroll
// ============================================
(function () {
    var indicator = document.querySelector('.scroll-indicator');
    if (!indicator) return;
    var ticking = false;
    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(function () {
                if (window.scrollY > 120) {
                    indicator.classList.add('hidden');
                } else {
                    indicator.classList.remove('hidden');
                }
                ticking = false;
            });
            ticking = true;
        }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();

// ============================================
// Binary rain background (0s and 1s)
// ============================================

