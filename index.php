<?php
// Configuración: define la página actual, el tótulo e incluye componentes del layout
$currentPage = 'inicio';
$pageTitle = 'Jetrix | Desarrollo Web que Convierte'; // Tótulo de la página para SEO y la pestaña del navegador
include 'includes/header.php'; // Incluye el <head> con meta tags, estilos y librerías
include 'includes/navbar.php'; // Incluye la barra de navegación principal
?>
<main class="relative overflow-x-clip">
    <!-- HERO: Sección principal con video de fondo, tótulo llamativo y botones CTA para asesoría gratuita -->
    <section class="relative w-full min-h-svh md:min-h-[110svh] flex items-center">
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="assets/img/Fondo-web.mp4" type="video/mp4">
            </video>
        </div>
        <div class="relative z-20 w-full px-4 pt-20 md:pt-4">
            <div class="max-w-7xl mx-auto flex flex-col items-center">

                <div class="w-full flex flex-col items-center text-center relative z-20"
                    style="text-shadow: 0 0 30px rgba(0,0,0,0.8), 0 0 60px rgba(0,0,0,0.5);">
                    <h1 data-typewriter data-typewriter-group="hero"
                        class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-white min-h-[1.2em]">
                        Desarrollo web que convierte<span class="text-electric-blue">visitas en clientes</span>
                    </h1>
                    <div class="mt-6 md:hidden z-30">
                        <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden"
                            href="contacto.php">
                            <span class="relative z-10 inline-flex items-center gap-3">Agenda tu asesoría
                                gratuita</span>
                            <span
                                class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                        </a>
                    </div>
                    <div class="mt-3 md:hidden">
                        <a class="inline-flex items-center justify-center rounded-xl px-7 py-3 text-base font-medium border border-white/20 text-white hover:bg-white/10"
                            href="proyectos.php">Ver proyectos</a>
                    </div>
                    <div class="mt-8 hidden md:flex items-center gap-4">
                        <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden"
                            href="contacto.php">
                            <span class="relative z-10 inline-flex items-center gap-3">Agenda tu asesoría
                                gratuita</span>
                            <span
                                class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator" aria-hidden="true">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
        </div>
    </section>

    <!-- STATS: Barra de indicadores clave (150+ proyectos, 98% SEO, UX, soporte 24/7) -->
    <section class="relative w-full overflow-hidden py-10 md:py-16 bg-black text-white">
        <div
            class="absolute top-0 left-1/2 h-px w-[80%] -translate-x-1/2 bg-gradient-to-r from-transparent via-electric-blue/40 to-transparent">
        </div>
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <div class="grid grid-cols-2 gap-x-2 gap-y-2 md:grid-cols-4 md:gap-x-6">
                <div
                    class="group relative overflow-hidden rounded-xl px-4 py-4 md:px-8 md:py-8 transition-all duration-500 hover:-translate-y-1.5 hover:bg-white/10 hover:shadow-[0_0_40px_rgba(20,184,166,0.10)]">
                    <p
                        class="relative text-[40px] leading-none md:text-[72px] font-semibold tracking-[-2px] md:tracking-[-3px] text-white">
                        5+</p>
                    <p class="relative mt-2 md:mt-4 text-xs md:text-sm leading-tight md:leading-relaxed text-white/60">
                        Proyectos desarrollados hasta la fecha</p>
                </div>
                <div
                    class="group relative overflow-hidden rounded-xl px-4 py-5 md:px-8 md:py-8 transition-all duration-500 hover:-translate-y-1.5 hover:bg-white/10 hover:shadow-[0_0_40px_rgba(20,184,166,0.10)]">
                    <p
                        class="relative text-[40px] leading-none md:text-[72px] font-semibold tracking-[-2px] md:tracking-[-3px] text-white">
                        95%</p>
                    <p class="relative mt-2 md:mt-4 text-xs md:text-sm leading-tight md:leading-relaxed text-white/60">
                        SEO Optimizado</p>
                </div>
                <div
                    class="group relative overflow-hidden rounded-xl px-4 py-5 md:px-8 md:py-8 transition-all duration-500 hover:-translate-y-1.5 hover:bg-white/10 hover:shadow-[0_0_40px_rgba(20,184,166,0.10)]">
                    <p
                        class="relative text-[40px] leading-none md:text-[72px] font-semibold tracking-[-2px] md:tracking-[-3px] text-white">
                        UX UI</p>
                    <p class="relative mt-2 md:mt-4 text-xs md:text-sm leading-tight md:leading-relaxed text-white/60">
                        Diseño Optimizado</p>
                </div>
                <div
                    class="group relative overflow-hidden rounded-xl px-4 py-5 md:px-8 md:py-8 transition-all duration-500 hover:-translate-y-1.5 hover:bg-white/10 hover:shadow-[0_0_40px_rgba(20,184,166,0.10)]">
                    <p
                        class="relative text-[40px] leading-none md:text-[72px] font-semibold tracking-[-2px] md:tracking-[-3px] text-white">
                        24/7</p>
                    <p class="relative mt-2 md:mt-4 text-xs md:text-sm leading-tight md:leading-relaxed text-white/60">
                        Soporte Técnico</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY PROFESSIONAL: Explica por quó el negocio necesita desarrollo web profesional con 4 problemas clave -->
    <section class="relative bg-[#F7F7F4] py-4">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <!-- Layout de dos columnas: izquierda sticky con tótulo + CTA, derecha con tarjetas de problemas -->
            <div class="relative z-10 flex flex-col gap-12 lg:gap-20 lg:flex-row lg:items-start lg:justify-between">
                <div class="relative w-full lg:w-120 lg:min-w-120 lg:sticky lg:top-32 lg:h-fit">
                    <!-- Tótulo principal y eslogan sobre la importancia del desarrollo web profesional -->
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate">
                        ¿Por qué tu negocio necesita <span class="text-electric-blue">desarrollo web</span> profesional?
                    </h2>
                    <p class="mt-9 max-w-115 text-[17px] leading-relaxed tracking-[-0.02em] text-zinc-600">Hoy tus
                        clientes buscan confianza antes de escribirte. Sin una presencia digital optimizada, es difícil
                        competir hoy.</p>
                    <div class="mt-11">
                        <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden"
                            href="contacto.php">
                            <span class="relative z-10 inline-flex items-center gap-3">Agenda tu asesoría
                                gratuita</span>
                            <span
                                class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                        </a>
                    </div>
                </div>
                <!-- Cards de problemas: 4 tarjetas que muestran las consecuencias de no tener web profesional -->
                <div class="w-full max-w-170 space-y-5">
                    <!-- Problema 01: Pórdida de oportunidades por falta de web clara -->
                    <div
                        class="group relative overflow-hidden rounded-xl border border-black/5 bg-white p-8 sm:p-9 shadow-[0_20px_50px_rgba(0,0,0,0.04)] transition-all duration-500 hover:-translate-y-1">
                        <div class="relative flex flex-col gap-7 md:flex-row md:items-center">
                            <div class="max-w-115">
                                <h3 class="text-[30px] font-semibold leading-tight tracking-tighter text-zinc-950">
                                    Pierdes oportunidades</h3>
                                <p class="mt-5 text-[16px] leading-relaxed tracking-[-0.02em] text-zinc-600">Clientes
                                    interesados entran a tus redes, no entienden quó haces y terminan buscando otra
                                    opción más clara.</p>
                            </div>
                            <div
                                class="text-[58px] font-semibold leading-none tracking-[-0.08em] text-electric-blue md:order-first md:shrink-0">
                                01
                            </div>
                        </div>
                    </div>
                    <div
                        class="group relative overflow-hidden rounded-xl border border-black/5 bg-white p-8 sm:p-9 shadow-[0_20px_50px_rgba(0,0,0,0.04)] transition-all duration-500 hover:-translate-y-1">
                        <div class="relative flex flex-col gap-7 md:flex-row md:items-center">
                            <div class="max-w-115">
                                <h3 class="text-[30px] font-semibold leading-tight tracking-tighter text-zinc-950">Falta
                                    de confianza</h3>
                                <p class="mt-5 text-[16px] leading-relaxed tracking-[-0.02em] text-zinc-600">Hoy una
                                    empresa sin sitio web transmite desorden, poca seriedad y menor autoridad frente a
                                    la competencia.</p>
                            </div>
                            <div
                                class="text-[58px] font-semibold leading-none tracking-[-0.08em] text-electric-blue md:order-first md:shrink-0">
                                02
                            </div>
                        </div>
                    </div>
                    <div
                        class="group relative overflow-hidden rounded-xl border border-black/5 bg-white p-8 sm:p-9 shadow-[0_20px_50px_rgba(0,0,0,0.04)] transition-all duration-500 hover:-translate-y-1">
                        <div class="relative flex flex-col gap-7 md:flex-row md:items-center">
                            <div class="max-w-115">
                                <h3 class="text-[30px] font-semibold leading-tight tracking-tighter text-zinc-950">
                                    Dependes de plataformas</h3>
                                <p class="mt-5 text-[16px] leading-relaxed tracking-[-0.02em] text-zinc-600">Instagram
                                    cambia, Facebook cae, TikTok baja alcance. Tu negocio no puede depender de
                                    algoritmos externos.</p>
                            </div>
                            <div
                                class="text-[58px] font-semibold leading-none tracking-[-0.08em] text-electric-blue md:order-first md:shrink-0">
                                03
                            </div>
                        </div>
                    </div>
                    <div
                        class="group relative overflow-hidden rounded-xl border border-black/5 bg-white p-8 sm:p-9 shadow-[0_20px_50px_rgba(0,0,0,0.04)] transition-all duration-500 hover:-translate-y-1">
                        <div class="relative flex flex-col gap-7 md:flex-row md:items-center">
                            <div class="max-w-115">
                                <h3 class="text-[30px] font-semibold leading-tight tracking-tighter text-zinc-950">No
                                    conviertes visitas</h3>
                                <p class="mt-5 text-[16px] leading-relaxed tracking-[-0.02em] text-zinc-600">Sin
                                    estructura estratógica, las personas entran, miran unos segundos y se van sin
                                    contactarte.</p>
                            </div>
                            <div
                                class="text-[58px] font-semibold leading-none tracking-[-0.08em] text-electric-blue md:order-first md:shrink-0">
                                04
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES-->
    <section class="relative overflow-hidden bg-navy-dark text-white py-32 lg:py-40">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">Servicios</span>
                <h2 class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-white">
                    Soluciones digitales que <br><span class="text-electric-blue">impulsan tu negocio</span>
                </h2>
                <p class="mt-4 text-white/60 text-base md:text-lg leading-relaxed max-w-xl mx-auto">Desarrollo web, sistemas a medida,
                    automatización y posicionamiento construidos con enfoque estratégico, visual y comercial.</p>
            </div>
            <div class="flex flex-col md:flex-row gap-4 md:gap-5">
                <div
                    class="flex-1 relative group border border-white/10 rounded-2xl p-5 transition-all duration-300 hover:border-electric-blue/40 bg-white/5">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="material-symbols-outlined text-electric-blue text-3xl">web</span>
                        <h3 class="text-lg font-bold text-white">Desarrollo Web</h3>
                    </div>
                    <p class="text-sm text-white/60 leading-relaxed">Experiencias digitales diseñadas
                        para convertir el tráfico en clientes potenciales.</p>
                </div>
                <div
                    class="flex-1 relative group border border-white/10 rounded-2xl p-5 transition-all duration-300 hover:border-electric-blue/40 bg-white/5">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="material-symbols-outlined text-electric-blue text-3xl">bolt</span>
                        <h3 class="text-lg font-bold text-white">Automatización & IA</h3>
                    </div>
                    <p class="text-sm text-white/60 leading-relaxed">Agentes IA que optimizan procesos, atención
                        al cliente y ventas 24/7.</p>
                </div>
                <div
                    class="flex-1 relative group border border-white/10 rounded-2xl p-5 transition-all duration-300 hover:border-electric-blue/40 bg-white/5">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="material-symbols-outlined text-electric-blue text-3xl">storefront</span>
                        <h3 class="text-lg font-bold text-white">Ecommerce</h3>
                    </div>
                    <p class="text-sm text-white/60 leading-relaxed">Tiendas online optimizadas para vender más y
                        escalar tu negocio.</p>
                </div>
                <div
                    class="flex-1 relative group border border-white/10 rounded-2xl p-5 transition-all duration-300 hover:border-electric-blue/40 bg-white/5">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="material-symbols-outlined text-electric-blue text-3xl">palette</span>
                        <h3 class="text-lg font-bold text-white">UX & Diseño</h3>
                    </div>
                    <p class="text-sm text-white/60 leading-relaxed">Interfaces modernas que aumentan la
                        percepción de valor y la conversión.</p>
                </div>
                <div
                    class="flex-1 relative group border border-white/10 rounded-2xl p-5 transition-all duration-300 hover:border-electric-blue/40 bg-white/5">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="material-symbols-outlined text-electric-blue text-3xl">trending_up</span>
                        <h3 class="text-lg font-bold text-white">SEO & Performance</h3>
                    </div>
                    <p class="text-sm text-white/60 leading-relaxed">Optimización técnica para visibilidad
                        orgánica y velocidad.</p>
                </div>
                <div
                    class="flex-1 relative group border border-white/10 rounded-2xl p-5 transition-all duration-300 hover:border-electric-blue/40 bg-white/5">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="material-symbols-outlined text-electric-blue text-3xl">calendar_month</span>
                        <h3 class="text-lg font-bold text-white">Agenda Pro</h3>
                    </div>
                    <p class="text-sm text-white/60 leading-relaxed">Sistema de reservas y agenda online para gestionar
                        turnos y citas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PLANS: Planes de desarrollo web con selector de moneda dinámico (VES/USD/EUR) y filtros por tipo -->
    <section class="py-20 md:py-28">
        <div class="relative z-10">
            <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <!-- Tótulo y descripción de los planes de desarrollo web -->
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate">Planes de
                        desarrollo web adaptados a <span class="text-electric-blue">cada etapa de tu negocio</span></h2>
                    <p class="mt-3 text-zinc-600">* Precios en USD fijos. Al seleccionar VES o EUR se calculan al tipo
                        de cambio oficial del BCV en tiempo real.</p>
                    <!-- Selector de moneda: convierte precios según VES, USD o EUR usando datos del BCV -->
                    <div class="mt-5 mb-4 md:mb-6 flex flex-wrap items-center justify-center gap-3">
                        <div class="inline-flex items-center gap-1 bg-zinc-100 p-1 rounded-xl shadow-inner"
                            id="currencySwitcher">
                            <button
                                class="currency-btn flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-medium transition-all duration-300 bg-white shadow text-zinc-900"
                                data-currency="ves">
                                Bs. VES
                            </button>
                            <button
                                class="currency-btn flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-medium transition-all duration-300 text-zinc-500 "
                                data-currency="usd">
                                $ USD
                            </button>
                            <button
                                class="currency-btn flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-medium transition-all duration-300 text-zinc-500 "
                                data-currency="eur">
                                ? EUR
                            </button>
                        </div>
                        <button
                            class="flex items-center gap-2 px-5 py-2.5 rounded-xl text-white text-sm font-semibold bg-gradient-to-r from-electric-blue to-teal-500 shadow-lg shadow-electric-blue/20 transition-all duration-300 cursor-pointer"
                            onclick="window.location.href='contacto.php'">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path
                                    d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z" />
                                <path d="M20 2v4" />
                                <path d="M22 4h-4" />
                                <circle cx="4" cy="20" r="2" />
                            </svg>
                            <span>Cotiza tu web ideal</span>
                        </button>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-3 mb-10" id="planFilters">
                    <button
                        class="plan-filter-btn px-5 py-2 rounded-xl text-sm font-medium relative cursor-pointer active-filter"
                        data-category="paginas-web">
                        <div class="absolute inset-0 bg-navy-dark rounded-xl z-0"></div>
                        <span class="relative z-10 text-white">Webs Corporativas</span>
                    </button>
                    <button class="plan-filter-btn px-5 py-2 rounded-xl text-sm font-medium relative cursor-pointer"
                        data-category="sistemas">
                        <span class="relative z-10 text-zinc-600">Sistemas</span>
                    </button>
                    <button class="plan-filter-btn px-5 py-2 rounded-xl text-sm font-medium relative cursor-pointer"
                        data-category="chatbots">
                        <span class="relative z-10 text-zinc-600">Chatbots IA</span>
                    </button>
                    <button class="plan-filter-btn px-5 py-2 rounded-xl text-sm font-medium relative cursor-pointer"
                        data-category="landing-bio">
                        <span class="relative z-10 text-zinc-600">Landing / Bio Link</span>
                    </button>
                </div>

                <div class="flex justify-center mb-14" id="chatbotPromoBar">
                    <div
                        class="inline-flex flex-wrap sm:flex-nowrap items-center gap-3 bg-gradient-to-r from-electric-blue/5 to-teal-600/5 border border-electric-blue/10 rounded-2xl px-4 sm:px-5 py-3">
                        <span class="text-xs sm:text-sm text-zinc-700 font-semibold">Activa el Chatbot IA y
                            desbloquea precios promocionales</span>
                        <div class="flex items-center gap-1.5 bg-white p-1 rounded-xl shadow-sm">
                            <button class="px-4 py-1.5 rounded-xl text-xs font-medium relative cursor-pointer">
                                <div class="absolute inset-0 bg-navy-dark rounded-xl z-0"></div>
                                <span class="relative z-10 text-white">Sin chatbot</span>
                            </button>
                            <button class="px-4 py-1.5 rounded-xl text-xs font-medium relative cursor-pointer">
                                <span class="relative z-10 text-zinc-600">Chatbot 1.000</span>
                            </button>
                            <button class="px-4 py-1.5 rounded-xl text-xs font-medium relative cursor-pointer">
                                <span class="relative z-10 text-zinc-600">Chatbot 3.000</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-8" id="plansGrid">
                    <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 w-full md:w-[30%]"
                        data-category="paginas-web">
                        <h3 class="text-xl font-semibold text-deep-slate">Landing Page</h3>
                        <div
                            class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                            🤖 PROMO IA</div>
                        <div class="mt-5 price-container">
                            <span class="price-original hidden text-lg text-zinc-400 line-through">$99</span>
                            <span class="price-display text-4xl font-bold text-deep-slate tracking-tight" data-usd="99"
                                data-usd-promo="79" data-usd-promo-pro="69" data-currency="ves">Bs. 0</span>
                            <span
                                class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$79</span>
                        </div>
                        <ul class="mt-7 space-y-3 text-sm">
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Web corporativa de una sola
                                    página</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Hasta 4 secciones
                                    informativas</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Formulario de contacto</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Botón directo a WhatsApp</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Diseño adaptable</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">SEO bósico para Google</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Dominio incluido por 1 año</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Entrega en 2 a 4 días</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Soporte post-entrega por 3 días</span></li>
                        </ul>
                        <div class="mt-9">
                            <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                href="contacto.php">
                                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Preguntar por
                                    este plan</span>
                                <span
                                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                            </a>
                        </div>
                        <div
                            class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                            <span class="font-semibold text-electric-blue">🤖 Promo Chatbot IA</span> — Automatiza
                            atención, capta leads y responde 24/7 desde tu web.
                        </div>

                    </div>

                    <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-2xl ring-2 ring-electric-blue/20 w-full md:w-[30%]"
                        data-category="paginas-web">
                        <h3 class="text-xl font-semibold text-deep-slate">Web Multipágina</h3>
                        <div
                            class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                            🤖 PROMO IA</div>
                        <div class="mt-5 price-container">
                            <span class="price-original hidden text-lg text-zinc-400 line-through">$199</span>
                            <span class="price-display text-4xl font-bold text-deep-slate tracking-tight" data-usd="199"
                                data-usd-promo="159" data-usd-promo-pro="139" data-currency="ves">Bs. 0</span>
                            <span
                                class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$159</span>
                        </div>
                        <ul class="mt-7 space-y-3 text-sm">
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Sitio web multipágina
                                    (hasta
                                    3 páginas + Inicio)</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Pógina adicional para
                                    servicios</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Diseño visual más
                                    trabajado</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Animaciones suaves y
                                    modernas</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Formulario de contacto</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Botón directo a WhatsApp</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">SEO optimizado para Google</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Dominio incluido por 1 año</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Entrega en 5 a 7 días</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Soporte post-entrega por 5 días</span></li>
                        </ul>
                        <div class="mt-9">
                            <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                href="contacto.php">
                                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Preguntar por
                                    este plan</span>
                                <span
                                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                            </a>
                        </div>
                        <div
                            class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                            <span class="font-semibold text-electric-blue">🤖 Promo Chatbot IA</span> — Automatiza
                            atención, capta leads y responde 24/7 desde tu web.
                        </div>

                    </div>

                    <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 w-full md:w-[30%] "
                        data-category="paginas-web">
                        <h3 class="text-xl font-semibold text-deep-slate">Web Profesional</h3>
                        <div
                            class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                            🤖 PROMO IA</div>
                        <div class="mt-5 price-container">
                            <span class="price-original hidden text-lg text-zinc-400 line-through">$299</span>
                            <span class="price-display text-4xl font-bold text-deep-slate tracking-tight" data-usd="299"
                                data-usd-promo="239" data-usd-promo-pro="209" data-currency="ves">Bs. 0</span>
                            <span
                                class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$239</span>
                        </div>
                        <ul class="mt-7 space-y-3 text-sm">
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Sitio web multipágina
                                    (hasta
                                    6 páginas)</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Diseño avanzado con
                                    animaciones</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Banners
                                    personalizados</span>
                            </li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">SEO tócnico + contenido
                                    optimizado</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Optimización de
                                    velocidad</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Formulario de
                                    contacto</span>
                            </li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Botón directo a
                                    WhatsApp</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Dominio incluido por 1 año</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Entrega en 7 a 10 días</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Soporte post-entrega por 7 días</span></li>
                        </ul>
                        <div class="mt-9">
                            <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                href="contacto.php">
                                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Preguntar por
                                    este plan</span>
                                <span
                                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                            </a>
                        </div>
                        <div
                            class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                            <span class="font-semibold text-electric-blue">🤖 Promo Chatbot IA</span> — Automatiza
                            atención, capta leads y responde 24/7 desde tu web.
                        </div>

                    </div>
                    <!-- Sistema Básico -->
                    <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 hidden"
                        data-category="sistemas">
                        <h3 class="text-xl font-semibold text-deep-slate">Sistema Básico</h3>
                        <div
                            class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                            🤖 PROMO IA</div>
                        <div class="mt-5 price-container">
                            <span class="price-original hidden text-lg text-zinc-400 line-through">$299</span>
                            <span class="price-display text-4xl font-bold text-deep-slate tracking-tight" data-usd="299"
                                data-usd-promo="239" data-usd-promo-pro="209" data-currency="ves">Bs. 0</span>
                            <span
                                class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$239</span>
                        </div>
                        <ul class="mt-7 space-y-3 text-sm">
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Panel administrativo con
                                    autenticación</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Hasta 3 módulos funcionales
                                    a medida</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Base de datos incluida</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Diseño responsive</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Soporte post-entrega 5 días</span></li>
                        </ul>
                        <div class="mt-9">
                            <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                href="contacto.php">
                                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar este
                                    plan</span>
                                <span
                                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                            </a>
                        </div>
                        <div
                            class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                            <span class="font-semibold text-electric-blue">🤖 Promo Chatbot IA</span> — Automatiza
                            consultas, soporte y procesos en tu sistema.
                        </div>

                    </div>
                    <!-- Sistema Pro -->
                    <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-8 transition-all duration-300 ease-out shadow-2xl ring-2 ring-white/40 hidden"
                        data-category="sistemas">
                        <h3 class="text-xl font-semibold text-deep-slate">Sistema Pro</h3>
                        <div
                            class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                            🤖 PROMO IA</div>
                        <div class="mt-5 price-container">
                            <span class="price-original hidden text-lg text-zinc-400 line-through">$549</span>
                            <span class="price-display text-4xl font-bold text-deep-slate tracking-tight" data-usd="549"
                                data-usd-promo="439" data-usd-promo-pro="384" data-currency="ves">Bs. 0</span>
                            <span
                                class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$439</span>
                        </div>
                        <ul class="mt-7 space-y-3 text-sm">
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Todo lo del Básico</span>
                            </li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Hasta 6 módulos
                                    funcionales</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Roles y permisos por usuario</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Reportes exportables</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">API REST</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Notificaciones Email / WhatsApp</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Soporte post-entrega 10 días</span></li>
                        </ul>
                        <div class="mt-9">
                            <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                href="contacto.php">
                                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar este
                                    plan</span>
                                <span
                                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                            </a>
                        </div>
                        <div
                            class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                            <span class="font-semibold text-electric-blue">🤖 Promo Chatbot IA</span> — Automatiza
                            consultas, soporte y procesos en tu sistema.
                        </div>

                    </div>
                    <!-- Sistema Enterprise -->
                    <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 hidden"
                        data-category="sistemas">
                        <h3 class="text-xl font-semibold text-deep-slate">Sistema Enterprise</h3>
                        <div
                            class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                            🤖 PROMO IA</div>
                        <div class="mt-5 price-container">
                            <span class="price-original hidden text-lg text-zinc-400 line-through">$949</span>
                            <span class="price-display text-4xl font-bold text-deep-slate tracking-tight" data-usd="949"
                                data-usd-promo="759" data-usd-promo-pro="664" data-currency="ves">Bs. 0</span>
                            <span
                                class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$759</span>
                        </div>
                        <ul class="mt-7 space-y-3 text-sm">
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Todo lo del Pro</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Módulos ilimitados</span>
                            </li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Multi-tenant</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Dashboard con métricas en tiempo
                                    real</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Automatización de procesos</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Integración con APIs externas</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Backups automáticos</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Soporte prioritario 24/7 + 15 días</span>
                            </li>
                        </ul>
                        <div class="mt-9">
                            <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                href="contacto.php">
                                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar este
                                    plan</span>
                                <span
                                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                            </a>
                        </div>
                        <div
                            class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                            <span class="font-semibold text-electric-blue">🤖 Promo Chatbot IA</span> — Automatiza
                            consultas, soporte y procesos en tu sistema.
                        </div>

                    </div>
                    <!-- Chatbots IA - Estándar -->
                    <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 hidden"
                        data-category="chatbots">
                        <h3 class="text-xl font-semibold text-deep-slate">Chatbot Estándar</h3>
                        <div
                            class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                            🤖 PROMO IA</div>
                        <div class="mt-4 price-container">
                            <p class="text-sm text-zinc-500">Hasta 1.000 conversaciones</p>
                            <p class="mt-1 text-4xl font-bold text-deep-slate tracking-tight price-display"
                                data-usd="40" data-usd-promo="32" data-usd-promo-pro="28">$40 <span
                                    class="text-base font-normal text-zinc-500">USD/mes</span></p>
                            <span class="price-original hidden text-lg text-zinc-400 line-through">$40/mes</span>
                            <span
                                class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$32/mes</span>
                        </div>
                        <div class="mt-7">
                            <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                href="contacto.php">
                                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar este
                                    plan</span>
                                <span
                                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                            </a>
                        </div>
                        <div
                            class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                            <span class="font-semibold text-electric-blue">🤖 Promo Chatbot IA</span> — Duplica tu
                            alcance combinando chatbots con tu web o sistema.
                        </div>
                    </div>
                    <!-- Chatbots IA - Pro -->
                    <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-8 transition-all duration-300 ease-out shadow-2xl ring-2 ring-electric-blue/20 hidden"
                        data-category="chatbots">
                        <h3 class="text-xl font-semibold text-deep-slate">Chatbot Pro</h3>
                        <div
                            class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                            🤖 PROMO IA</div>
                        <div class="mt-4 price-container">
                            <p class="text-sm text-zinc-500">Hasta 3.000 conversaciones</p>
                            <p class="mt-1 text-4xl font-bold text-deep-slate tracking-tight price-display"
                                data-usd="55" data-usd-promo="44" data-usd-promo-pro="38">$55 <span
                                    class="text-base font-normal text-zinc-500">USD/mes</span></p>
                            <span class="price-original hidden text-lg text-zinc-400 line-through">$55/mes</span>
                            <span
                                class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$44/mes</span>
                        </div>
                        <div class="mt-7">
                            <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                href="contacto.php">
                                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar este
                                    plan</span>
                                <span
                                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                            </a>
                        </div>
                        <div
                            class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                            <span class="font-semibold text-electric-blue">🤖 Promo Chatbot IA</span> — Duplica tu
                            alcance combinando chatbots con tu web o sistema.
                        </div>
                    </div>
                    <!-- Landing / Bio Link -->
                    <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 hidden"
                        data-category="landing-bio">
                        <h3 class="text-xl font-semibold text-deep-slate">Landing / Bio Link</h3>
                        <div
                            class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                            🤖 PROMO IA</div>
                        <div class="mt-5 price-container">
                            <span class="price-original hidden text-lg text-zinc-400 line-through">$40</span>
                            <span class="price-display text-4xl font-bold text-deep-slate tracking-tight" data-usd="40"
                                data-usd-promo="32" data-usd-promo-pro="28" data-currency="ves">Bs. 0</span>
                            <span
                                class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$32</span>
                        </div>
                        <ul class="mt-7 space-y-3 text-sm">
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Bio link personalizada con
                                    diseño moderno</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="font-semibold text-deep-slate">Enlaces a redes sociales y
                                    WhatsApp</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Diseño responsive</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Dominio incluido por 1 año</span></li>
                            <li class="flex items-start gap-3"><span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                        class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 6 9 17l-5-5" />
                                    </svg></span><span class="text-zinc-600">Soporte post-entrega 3 días</span></li>
                        </ul>
                        <div class="mt-9">
                            <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                href="contacto.php">
                                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar este
                                    plan</span>
                                <span
                                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                            </a>
                        </div>
                        <div
                            class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                            <span class="font-semibold text-electric-blue">🤖 Promo Chatbot IA</span> — Convierte
                            visitas en leads calificados desde tu bio link.
                        </div>

                    </div>
                </div>
            </div>
            <div id="noPlans" class="hidden text-center py-16 max-w-7xl mx-auto px-5">
                <span class="text-6xl block mb-4">🚧</span>
                <h3 class="text-2xl font-semibold text-deep-slate mb-2">Próximamente</h3>
                <p class="text-zinc-500">Estamos trabajando en planes para esta categoría. Contáctanos y te armamos una
                    propuesta personalizada.</p>
                <a class="mt-6 inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-electric-blue bg-white transition-all duration-500"
                    href="contacto.php">Solicitar propuesta</a>
            </div>
    </section>

    <!-- PROJECTS: Portafolio de proyectos reales desarrollados para marcas como Ekimedicall y TravelOne -->
    <section class="py-32 lg:py-40 bg-black text-white">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <div class="text-center mb-6">
                <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">Empresas que confiaron
                    en Jetrix</span>
                <h2 class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-white">
                    Proyectos desarrollados para <span class="text-electric-blue">marcas reales</span></h2>
                <p class="mt-4 text-white/50 text-lg max-w-xl mx-auto">Cada proyecto es una historia de crecimiento.
                    Conoce algunos de los que hemos construido.</p>
            </div>
            <div class="flex justify-end mb-12">
                <a class="text-white/70 font-semibold flex items-center gap-2 hover:text-electric-blue transition-colors text-sm"
                    href="proyectos.php">Ver portafolio completo <span
                        class="material-symbols-outlined text-base">north_east</span></a>
            </div>
            <!-- Grid de 4 proyectos destacados -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 md:gap-10">
                <!-- Proyecto: Ekimedicall -->
                <a class="group block" href="https://ekimedicall.com" target="_blank">
                    <div
                        class="overflow-hidden rounded-2xl bg-white/5 border border-white/10 mb-5 aspect-video flex items-center justify-center group-hover:border-electric-blue/40 transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-white/20 text-[100px] group-hover:text-electric-blue/30 transition-all duration-500">local_hospital</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white group-hover:text-electric-blue transition-colors">
                                Ekimedicall</h3>
                            <p class="text-white/50 text-sm mt-1">Claridad médica y conversión</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-white/30 group-hover:text-electric-blue transition-all duration-500">arrow_forward</span>
                    </div>
                </a>
                <!-- Proyecto: TravelOne -->
                <a class="group block" href="https://traveloneaxm.com" target="_blank">
                    <div
                        class="overflow-hidden rounded-2xl bg-white/5 border border-white/10 mb-5 aspect-video flex items-center justify-center group-hover:border-electric-blue/40 transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-white/20 text-[100px] group-hover:text-electric-blue/30 transition-all duration-500">flight</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white group-hover:text-electric-blue transition-colors">
                                TravelOne</h3>
                            <p class="text-white/50 text-sm mt-1">Captación para turismo</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-white/30 group-hover:text-electric-blue transition-all duration-500">arrow_forward</span>
                    </div>
                </a>
                <!-- Proyecto: Próximo (placeholder) -->
                <a class="group block opacity-60 hover:opacity-100 transition-all duration-500" href="contacto.php"
                    target="_blank">
                    <div
                        class="overflow-hidden rounded-2xl bg-white/5 border border-dashed border-white/20 mb-5 aspect-video flex items-center justify-center group-hover:border-electric-blue/40 transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-white/20 text-[100px] group-hover:text-electric-blue/30 transition-all duration-500">add</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <h3
                                class="text-xl font-bold text-white/50 group-hover:text-electric-blue transition-colors">
                                Tu proyecto aquí</h3>
                            <p class="text-white/30 text-sm mt-1">Cuéntanos tu idea y la hacemos realidad</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-white/20 group-hover:text-electric-blue transition-all duration-500">arrow_forward</span>
                    </div>
                </a>
                <!-- Proyecto: Próximo (placeholder) -->
                <a class="group block opacity-60 hover:opacity-100 transition-all duration-500" href="contacto.php"
                    target="_blank">
                    <div
                        class="overflow-hidden rounded-2xl bg-white/5 border border-dashed border-white/20 mb-5 aspect-video flex items-center justify-center group-hover:border-electric-blue/40 transition-all duration-500">
                        <span
                            class="material-symbols-outlined text-white/20 text-[100px] group-hover:text-electric-blue/30 transition-all duration-500">rocket_launch</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <h3
                                class="text-xl font-bold text-white/50 group-hover:text-electric-blue transition-colors">
                                Próximo proyecto</h3>
                            <p class="text-white/30 text-sm mt-1">Sé el próximo en transformar tu negocio</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-white/20 group-hover:text-electric-blue transition-all duration-500">arrow_forward</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- CONSEQUENCES: Sección oscura que muestra el costo de no tener presencia web profesional -->
    <section class="py-32 lg:py-40 bg-navy-dark text-white">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <!-- Layout dos columnas: texto explicativo a la izquierda, grid de consecuencias a la derecha -->
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-16">
                <div class="lg:w-5/12">
                    <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">El costo de no
                        actuar</span>
                    <h2 class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-white">
                        Las consecuencias de no tener un <span class="text-electric-blue">sitio web profesional</span>
                    </h2>
                    <p class="mt-6 text-white/60 text-lg leading-relaxed">Hoy tus clientes te buscan en Google antes de
                        escribirte. Si no te encuentran - o no confían - simplemente eligen a otro.</p>
                </div>
                <!-- Grid de 4 consecuencias en 2x2 con fondo oscuro -->
                <div class="lg:w-7/12 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Consecuencia 01: Invisibilidad online -->
                    <div class="bg-white/5 rounded-2xl p-8 border border-white/10">
                        <span class="text-4xl font-bold text-electric-blue">01</span>
                        <h3 class="mt-4 text-xl font-bold text-white">No existes online</h3>
                        <p class="mt-3 text-white/60 leading-relaxed">Si no tienes web, para muchos clientes simplemente
                            no existes.</p>
                    </div>
                    <div class="bg-white/5 rounded-2xl p-8 border border-white/10">
                        <span class="text-4xl font-bold text-electric-blue">02</span>
                        <h3 class="mt-4 text-xl font-bold text-white">Pierdes ventas</h3>
                        <p class="mt-3 text-white/60 leading-relaxed">Estós dejando dinero en la mesa todos los días sin
                            notarlo.</p>
                    </div>
                    <div class="bg-white/5 rounded-2xl p-8 border border-white/10">
                        <span class="text-4xl font-bold text-electric-blue">03</span>
                        <h3 class="mt-4 text-xl font-bold text-white">Respondes tarde</h3>
                        <p class="mt-3 text-white/60 leading-relaxed">Sin web ni automatización, dependes 100% de tu
                            tiempo.</p>
                    </div>
                    <div class="bg-white/5 rounded-2xl p-8 border border-white/10">
                        <span class="text-4xl font-bold text-electric-blue">04</span>
                        <h3 class="mt-4 text-xl font-bold text-white">Generas desconfianza</h3>
                        <p class="mt-3 text-white/60 leading-relaxed">Un negocio sin web se percibe menos serio y menos
                            estable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ: Preguntas frecuentes con acordeones expandibles sobre desarrollo web -->
    <section class="py-32 lg:py-40 bg-[#F7F7F4]">
        <div class="max-w-6xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <div class="text-center mb-16">
                <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">FAQ</span>
                <h2 class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate">Preguntas
                    <span class="text-electric-blue">frecuentes</span>
                </h2>
                <p class="mt-4 text-zinc-500">Resolvemos las dudas más comunes antes de empezar.</p>
            </div>
            <!-- Acordeón FAQ: usa etiquetas <details>/<summary> con animación de apertura y cierre -->
            <div class="max-w-3xl mx-auto space-y-4">
                <!-- Pregunta 1: Tiempo de desarrollo -->
                <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white"
                    style="animation-delay: 0s">
                    <details class="group p-6">
                        <summary
                            class="flex items-center justify-between cursor-pointer text-deep-slate font-semibold text-lg">
                            <span>óCuánto tiempo tarda el desarrollo de una página web?</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-zinc-500 leading-relaxed">Dependiendo del plan, la entrega suele estar entre
                            3 y 7 días hábiles. En sistemas web puede extenderse según la complejidad, pero siempre
                            definimos tiempos claros desde el inicio.</p>
                    </details>
                </div>
                <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white"
                    style="animation-delay: 0.15s">
                    <details class="group p-6">
                        <summary
                            class="flex items-center justify-between cursor-pointer text-deep-slate font-semibold text-lg">
                            <span>óCuánto cuesta una página web profesional?</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-zinc-500 leading-relaxed">El precio depende del tipo de proyecto,
                            funcionalidades y nivel de personalización. Ofrecemos planes claros y adaptados a cada
                            negocio.</p>
                    </details>
                </div>
                <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white"
                    style="animation-delay: 0.3s">
                    <details class="group p-6">
                        <summary
                            class="flex items-center justify-between cursor-pointer text-deep-slate font-semibold text-lg">
                            <span>¿Qué incluye un servicio de desarrollo web?</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-zinc-500 leading-relaxed">Incluye diseño web profesional, estructura
                            optimizada, configuración técnica, enfoque en conversión y acompañamiento inicial.</p>
                    </details>
                </div>
                <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white"
                    style="animation-delay: 0.45s">
                    <details class="group p-6">
                        <summary
                            class="flex items-center justify-between cursor-pointer text-deep-slate font-semibold text-lg">
                            <span>¿El SEO estó incluido en el desarrollo web?</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-zinc-500 leading-relaxed">Sí. Todas nuestras páginas se entregan con
                            optimización SEO bósica para mejorar visibilidad en Google desde el lanzamiento.</p>
                    </details>
                </div>
                <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white"
                    style="animation-delay: 0.6s">
                    <details class="group p-6">
                        <summary
                            class="flex items-center justify-between cursor-pointer text-deep-slate font-semibold text-lg">
                            <span>¿Puedo escalar o cambiar de plan después?</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-zinc-500 leading-relaxed">Sí. Nuestros servicios estón pensados para crecer
                            contigo. Puedes agregar ecommerce, automatizaciones o nuevas funcionalidades cuando lo
                            necesites.</p>
                    </details>
                </div>
                <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white"
                    style="animation-delay: 0.75s">
                    <details class="group p-6">
                        <summary
                            class="flex items-center justify-between cursor-pointer text-deep-slate font-semibold text-lg">
                            <span>¿Ofrecen soporte después de la entrega?</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-zinc-500 leading-relaxed">Sí. Incluimos soporte inicial y opciones de
                            acompañamiento mensual para mejoras, ajustes y optimización continua.</p>
                    </details>
                </div>
                <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white"
                    style="animation-delay: 0.9s">
                    <details class="group p-6">
                        <summary
                            class="flex items-center justify-between cursor-pointer text-deep-slate font-semibold text-lg">
                            <span>¿Ya tengo dominio y hosting?</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-zinc-500 leading-relaxed">No hay problema. Nos encargamos de gestionarlo o
                            trabajamos con lo que ya tengas. Algunos planes incluyen dominio y hosting por el primer
                            año.</p>
                    </details>
                </div>
                <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white"
                    style="animation-delay: 1.05s">
                    <details class="group p-6">
                        <summary
                            class="flex items-center justify-between cursor-pointer text-deep-slate font-semibold text-lg">
                            <span>¿Cómo funciona la activación del chatbot?</span>
                            <svg class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </summary>
                        <p class="mt-4 text-zinc-500 leading-relaxed">El chatbot se activa como complemento a tu plan.
                            Al integrarlo, obtienes automatización, atención 24/7 y captura automática de leads para tu
                            negocio.</p>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL: Llamado a la acción con propuesta, imagen y botón de contacto -->
    <section class="relative">
        <div class="relative overflow-hidden bg-black">

            <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
                <!-- Layout CTA: texto promocional + botón a la izquierda, imagen decorativa a la derecha -->
                <div class="relative grid grid-cols-1 gap-8 py-20 md:grid-cols-2 md:py-28 items-center">
                    <!-- Texto: badge de asesoría gratuita, tótulo con gradiente y botón de solicitud -->
                    <div class="max-w-xl">
                        <span class="mb-3 inline-block text-xs uppercase tracking-[0.25em] text-white/40">Asesoría
                            gratuita · 15 minutos</span>
                        <h2 class="mt-3 text-4xl font-semibold leading-[1.05] text-white md:text-5xl lg:text-6xl">¿Listo
                            para transformar tu<span class="block text-electric-blue">presencia digital?</span></h2>
                        <p class="mt-4 text-lg leading-relaxed text-zinc-400">Diseñamos sitios web, ecommerce,
                            automatizaciones y experiencias digitales enfocadas en convertir visitas en clientes y
                            generar crecimiento real para tu negocio.</p>
                        <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center">
                            <a class="inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-electric-blue hover:brightness-110 transition-all duration-500"
                                href="contacto.php">Solicitar propuesta</a>
                            <span class="text-sm text-white/60">Respuesta en menos de 24 horas</span>
                        </div>
                    </div>
                    <div class="relative flex justify-end items-end h-full">
                        <div
                            class="relative z-10 w-full max-w-xl aspect-[4/3] rounded-xl overflow-hidden border border-white/10">
                            <img src="assets/img/fotoCTA1.jpg" alt="" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cierre del contenido principal -->
</main>
<script>
    (function () {
        var filterBtns = document.querySelectorAll('#planFilters .plan-filter-btn');
        var planCards = document.querySelectorAll('#plansGrid .plan-card');
        var noPlans = document.getElementById('noPlans');
        if (!filterBtns.length || !planCards.length) return;

        function updateFilter() {
            var active = document.querySelector('#planFilters .plan-filter-btn.active-filter');
            if (!active) return;
            var cat = active.getAttribute('data-category');
            var visible = 0;
            planCards.forEach(function (card) {
                if (cat === 'todos' || card.getAttribute('data-category') === cat) {
                    card.classList.remove('hidden');
                    card.style.display = '';
                    visible++;
                } else {
                    card.classList.add('hidden');
                    card.style.display = 'none';
                }
            });
            if (noPlans) noPlans.classList.toggle('hidden', visible > 0);
            // Show/hide chatbot promo bar based on active filter
            var promoBar = document.getElementById('chatbotPromoBar');
            if (promoBar) {
                if (cat === 'chatbots') {
                    promoBar.classList.add('hidden');
                    document.querySelectorAll('.promo-ia-badge, .promo-desc, .price-original, .price-promo').forEach(function (el) {
                        el.classList.add('hidden');
                    });
                    document.querySelectorAll('.price-display').forEach(function (el) {
                        el.classList.remove('hidden');
                    });
                } else {
                    promoBar.classList.remove('hidden');
                }
            }
        }

        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                // Remove active state from all buttons
                filterBtns.forEach(function (b) {
                    b.classList.remove('active-filter');
                    var bg = b.querySelector('.filter-bg');
                    if (bg) bg.style.display = 'none';
                    var span = b.querySelector('span:not(.filter-bg)');
                    if (span) {
                        span.classList.remove('text-white');
                        span.classList.add('text-zinc-600');
                    }
                });
                // Add active state to clicked button
                this.classList.add('active-filter');
                var bgDiv = this.querySelector('.filter-bg');
                if (!bgDiv) {
                    bgDiv = document.createElement('div');
                    bgDiv.className = 'filter-bg absolute inset-0 bg-navy-dark rounded-xl z-0';
                    this.insertBefore(bgDiv, this.firstChild);
                }
                bgDiv.style.display = '';
                var span = this.querySelector('span:last-child');
                if (span) {
                    span.classList.remove('text-zinc-600');
                    span.classList.add('text-white');
                }
                updateFilter();
            });
        });

        // Initialize: make sure the default active filter bg div has the right class
        var firstBtn = document.querySelector('#planFilters .plan-filter-btn.active-filter');
        if (firstBtn) {
            var existingBg = firstBtn.querySelector('.absolute.inset-0');
            if (existingBg) existingBg.classList.add('filter-bg');
            updateFilter();
        }
    })();

    // Chatbot toggle promo logic
    (function () {
        var chatContainer = document.querySelector('.flex.justify-center.mb-14');
        if (!chatContainer) return;
        var btns = chatContainer.querySelectorAll('button');
        var badges = document.querySelectorAll('.promo-ia-badge');
        var descs = document.querySelectorAll('.promo-desc');
        var origPrices = document.querySelectorAll('.price-original');
        var promoPrices = document.querySelectorAll('.price-promo');
        var prices = document.querySelectorAll('.price-display');

        function formatPromoPrice(usdValue) {
            var cur = window.__currency || 'ves';
            var r = window.__rates || null;
            if (cur === 'ves' && r) return 'Bs. ' + Math.round(usdValue * r.usd).toLocaleString('es-VE');
            if (cur === 'eur' && r) return '\u20AC' + Math.round((usdValue * r.usd) / r.eur).toLocaleString('de-DE');
            return '$' + Number(usdValue).toLocaleString('en-US');
        }

        function togglePromos(level) {
            var show = level > 0;
            badges.forEach(function (b) {
                if (show) b.classList.remove('hidden');
                else b.classList.add('hidden');
            });
            descs.forEach(function (d) {
                if (show) d.classList.remove('hidden');
                else d.classList.add('hidden');
            });
            origPrices.forEach(function (op) {
                if (show) op.classList.remove('hidden');
                else op.classList.add('hidden');
            });
            promoPrices.forEach(function (pp) {
                if (show) pp.classList.remove('hidden');
                else pp.classList.add('hidden');
                if (show && level === 2) {
                    var card = pp.closest('.plan-card');
                    if (card) {
                        var pd = card.querySelector('.price-display');
                        var proPrice = pd ? pd.getAttribute('data-usd-promo-pro') : null;
                        if (proPrice) pp.textContent = formatPromoPrice(parseFloat(proPrice));
                    }
                } else if (show && level === 1) {
                    var card = pp.closest('.plan-card');
                    if (card) {
                        var pd = card.querySelector('.price-display');
                        var stdPrice = pd ? pd.getAttribute('data-usd-promo') : null;
                        if (stdPrice) pp.textContent = formatPromoPrice(parseFloat(stdPrice));
                    }
                }
            });
            prices.forEach(function (p) {
                if (show) p.classList.add('hidden');
                else p.classList.remove('hidden');
            });
        }

        btns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                btns.forEach(function (b) {
                    var bg = b.querySelector('.absolute.inset-0');
                    if (bg) bg.style.display = 'none';
                    var sp = b.querySelector('span') || b.querySelector('.relative.z-10');
                    if (sp) {
                        sp.classList.remove('text-white');
                        sp.classList.add('text-zinc-600');
                    } else {
                        b.classList.remove('text-white');
                        b.classList.add('text-zinc-600');
                    }
                });
                var bg = this.querySelector('.absolute.inset-0');
                if (!bg) {
                    bg = document.createElement('div');
                    bg.className = 'absolute inset-0 bg-navy-dark rounded-xl z-0';
                    this.insertBefore(bg, this.firstChild);
                }
                bg.style.display = '';
                var sp = this.querySelector('span') || this.querySelector('.relative.z-10');
                if (sp) {
                    sp.classList.remove('text-zinc-600');
                    sp.classList.add('text-white');
                } else {
                    this.classList.remove('text-zinc-500');
                    this.classList.add('text-white');
                }
                var text = this.textContent.trim();
                if (text === 'Sin chatbot') togglePromos(0);
                else if (text === 'Chatbot 1.000') togglePromos(1);
                else if (text === 'Chatbot 3.000') togglePromos(2);
            });
        });
    })();
</script>
<?php // Footer
include 'includes/footer.php'; ?>