<?php
// Configuración de la página actual y SEO para Planes y Precios
$currentPage = 'planes';
$pageTitle = 'Planes y Precios de Desarrollo Web, Software y Chatbots | Jetrix';
$pageDescription = 'Conoce nuestros planes y precios transparentes para desarrollo de páginas web, sistemas a medida y chatbots con IA. Cotiza en USD, EUR o Bolívares en tiempo real.';
$pageKeywords = 'precios paginas web, planes desarrollo web, costo crear pagina web, presupuesto software a medida, cotizar chatbot ia';
$canonicalUrl = 'https://webjetrix.com/planes';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
?>
<main class="relative overflow-x-clip pt-14 md:pt-0">
    <!-- Fondo decorativo superior -->
    <section class="relative w-full min-h-[80svh] flex items-center justify-center">
        <img src="/assets/img/Fondo-planes.jpg" alt="Planes y precios de desarrollo web Jetrix" class="absolute w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center max-w-3xl px-4 py-6"
            style="text-shadow: 0 0 30px rgba(0,0,0,0.8), 0 0 60px rgba(0,0,0,0.5);">
            <h1 data-typewriter class="text-3xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-white">Planes de desarrollo
                web adaptados a <span class="text-electric-blue">cada etapa de tu negocio</span></h1>
            <p class="mt-4 text-sm md:text-base text-zinc-300">* Precios en USD fijos. Al seleccionar VES o EUR se
                calculan al tipo de cambio oficial del BCV en tiempo real.</p>
        </div>
        <div class="scroll-indicator" aria-hidden="true">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
        </div>
    </section>

    <div class="mt-20 md:mt-24 lg:mt-4">
        <!-- Sección de planes y precios -->
        <section class="relative py-8 bg-transparent">
            <div class="relative z-10">
                <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
                    <!-- Encabezado de planes con selector de moneda -->
                    <div class="text-center max-w-2xl mx-auto mb-4 md:mb-6">
                        <div class="flex flex-wrap items-center justify-center gap-3">
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
                                    € EUR
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

                    <!-- Filtros por tipo de plan (Webs Corporativas, Sistemas, Chatbots, Landing/Bio Link) -->
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

                    <!-- Selector de inclusión de chatbot -->
                    <div class="flex justify-center mb-14" id="chatbotPromoBar">
                        <div
class="inline-flex flex-wrap sm:flex-nowrap items-center gap-3 bg-gradient-to-r from-electric-blue/5 to-teal-600/5 border border-electric-blue/10 rounded-2xl px-5 py-3">
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

                    <!-- Grid de planes disponibles -->
                    <div class="flex flex-wrap justify-center gap-8" id="plansGrid">
                        <!-- Landing Page -->
                        <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 w-full md:w-[30%] "
                            data-category="paginas-web">
                            <h3 class="text-xl font-semibold text-deep-slate">Landing Page</h3>
                            <div
                                class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                                🤖 PROMO IA</div>
                            <div class="mt-5 price-container">
                                <span class="price-original hidden text-lg text-zinc-400 line-through">$99</span>
                                <span class="price-display text-4xl font-bold text-deep-slate tracking-tight"
                                    data-usd="99" data-usd-promo="79" data-usd-promo-pro="69" data-currency="ves">Bs.
                                    0</span>
                                <span
                                    class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$79</span>
                            </div>
                            <ul class="mt-7 space-y-3 text-sm">
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">Web corporativa de una
                                        sola página</span></li>
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
                                        </svg></span><span class="text-zinc-600">SEO básico para Google</span></li>
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
                                        </svg></span><span class="text-zinc-600">Soporte post-entrega por 3 días</span>
                                </li>
                            </ul>
                            <div class="mt-9">
                                <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                    href="/contacto">
                                    <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Preguntar
                                        por este plan</span>
                                    <span
                                        class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                                </a>
                            </div>
                            <div
                                class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                                <span class="font-semibold text-electric-blue"> Promo Chatbot IA</span> — Automatiza
                                atención, capta leads y responde 24/7 desde tu web.
                            </div>

                        </div>

                        <!-- Web Multipágina -->
                        <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-2xl ring-2 ring-electric-blue/20 w-full md:w-[30%] "
                            data-category="paginas-web">
                            <h3 class="text-xl font-semibold text-deep-slate">Web Multipágina</h3>
                            <div
                                class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                                🤖 PROMO IA</div>
                            <div class="mt-5 price-container">
                                <span class="price-original hidden text-lg text-zinc-400 line-through">$199</span>
                                <span class="price-display text-4xl font-bold text-deep-slate tracking-tight"
                                    data-usd="199" data-usd-promo="159" data-usd-promo-pro="139" data-currency="ves">Bs.
                                    0</span>
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
                                        (hasta 3 páginas + Inicio)</span></li>
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">Página adicional para
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
                                        </svg></span><span class="text-zinc-600">Soporte post-entrega por 5 días</span>
                                </li>
                            </ul>
                            <div class="mt-9">
                                <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                    href="/contacto">
                                    <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Preguntar
                                        por este plan</span>
                                    <span
                                        class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                                </a>
                            </div>
                            <div
                                class="promo-desc hidden mt-3 pt-3 border-t border-electric-blue/10 text-xs text-zinc-500 leading-relaxed">
                                <span class="font-semibold text-electric-blue"> Promo Chatbot IA</span> — Automatiza
                                atención, capta leads y responde 24/7 desde tu web.
                            </div>

                        </div>

                        <!-- Web Profesional -->
                        <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 w-full md:w-[30%] "
                            data-category="paginas-web">
                            <h3 class="text-xl font-semibold text-deep-slate">Web Profesional</h3>
                            <div
                                class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                                🤖 PROMO IA</div>
                            <div class="mt-5 price-container">
                                <span class="price-original hidden text-lg text-zinc-400 line-through">$299</span>
                                <span class="price-display text-4xl font-bold text-deep-slate tracking-tight"
                                    data-usd="299" data-usd-promo="239" data-usd-promo-pro="209" data-currency="ves">Bs.
                                    0</span>
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
                                        (hasta 6 páginas)</span></li>
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
                                        personalizados</span></li>
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">SEO técnico + contenido
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
                                        contacto</span></li>
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
                                        </svg></span><span class="text-zinc-600">Soporte post-entrega por 7 días</span>
                                </li>
                            </ul>
                            <div class="mt-9">
                                <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                    href="/contacto">
                                    <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Preguntar
                                        por este plan</span>
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
                        <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 w-full md:w-[30%]  hidden"
                            data-category="sistemas">
                            <h3 class="text-xl font-semibold text-deep-slate">Sistema Básico</h3>
                            <div
                                class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                                🤖 PROMO IA</div>
                            <div class="mt-5 price-container">
                                <span class="price-original hidden text-lg text-zinc-400 line-through">$299</span>
                                <span class="price-display text-4xl font-bold text-deep-slate tracking-tight"
                                    data-usd="299" data-usd-promo="239" data-usd-promo-pro="209" data-currency="ves">Bs.
                                    0</span>
                                <span
                                    class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$239</span>
                            </div>
                            <ul class="mt-7 space-y-3 text-sm">
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">Panel administrativo
                                        con autenticación</span></li>
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">Hasta 3 módulos
                                        funcionales a medida</span></li>
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
                                    href="/contacto">
                                    <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar
                                        este plan</span>
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
                        <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-2xl ring-2 ring-electric-blue/20 w-full md:w-[30%]  hidden"
                            data-category="sistemas">
                            <h3 class="text-xl font-semibold text-deep-slate">Sistema Pro</h3>
                            <div
                                class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                                🤖 PROMO IA</div>
                            <div class="mt-5 price-container">
                                <span class="price-original hidden text-lg text-zinc-400 line-through">$549</span>
                                <span class="price-display text-4xl font-bold text-deep-slate tracking-tight"
                                    data-usd="549" data-usd-promo="439" data-usd-promo-pro="384" data-currency="ves">Bs.
                                    0</span>
                                <span
                                    class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$439</span>
                            </div>
                            <ul class="mt-7 space-y-3 text-sm">
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">Todo lo del
                                        Básico</span></li>
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
                                        </svg></span><span class="text-zinc-600">Roles y permisos por usuario</span>
                                </li>
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
                                        </svg></span><span class="text-zinc-600">Notificaciones Email / WhatsApp</span>
                                </li>
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="text-zinc-600">Soporte post-entrega 10 días</span>
                                </li>
                            </ul>
                            <div class="mt-9">
                                <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                    href="/contacto">
                                    <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar
                                        este plan</span>
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
                        <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 w-full md:w-[30%]  hidden"
                            data-category="sistemas">
                            <h3 class="text-xl font-semibold text-deep-slate">Sistema Enterprise</h3>
                            <div
                                class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                                🤖 PROMO IA</div>
                            <div class="mt-5 price-container">
                                <span class="price-original hidden text-lg text-zinc-400 line-through">$949</span>
                                <span class="price-display text-4xl font-bold text-deep-slate tracking-tight"
                                    data-usd="949" data-usd-promo="759" data-usd-promo-pro="664" data-currency="ves">Bs.
                                    0</span>
                                <span
                                    class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$759</span>
                            </div>
                            <ul class="mt-7 space-y-3 text-sm">
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">Todo lo del Pro</span>
                                </li>
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">Módulos
                                        ilimitados</span></li>
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
                                        </svg></span><span class="text-zinc-600">Integración con APIs externas</span>
                                </li>
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
                                        </svg></span><span class="text-zinc-600">Soporte prioritario 24/7 + 15
                                        días</span></li>
                            </ul>
                            <div class="mt-9">
                                <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden w-full"
                                    href="/contacto">
                                    <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar
                                        este plan</span>
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
                        <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 w-full md:w-[30%]  hidden"
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
                                    href="/contacto">
                                    <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar
                                        este plan</span>
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
                        <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-2xl ring-2 ring-electric-blue/20 w-full md:w-[30%]  hidden"
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
                                    href="/contacto">
                                    <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar
                                        este plan</span>
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
                        <div class="plan-card relative rounded-xl bg-white border border-zinc-200 p-6 sm:p-8 transition-all duration-300 ease-out shadow-md hover:shadow-xl hover:-translate-y-1 w-full md:w-[30%]  hidden"
                            data-category="landing-bio">
                            <h3 class="text-xl font-semibold text-deep-slate">Landing / Bio Link</h3>
                            <div
                                class="promo-ia-badge hidden mt-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-electric-blue/10 text-electric-blue text-[10px] font-semibold uppercase tracking-wider">
                                🤖 PROMO IA</div>
                            <div class="mt-5 price-container">
                                <span class="price-original hidden text-lg text-zinc-400 line-through">$40</span>
                                <span class="price-display text-4xl font-bold text-deep-slate tracking-tight"
                                    data-usd="40" data-usd-promo="32" data-usd-promo-pro="28" data-currency="ves">Bs.
                                    0</span>
                                <span
                                    class="price-promo hidden text-4xl font-bold text-electric-blue tracking-tight">$32</span>
                            </div>
                            <ul class="mt-7 space-y-3 text-sm">
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">Bio link personalizada
                                        con diseño moderno</span></li>
                                <li class="flex items-start gap-3"><span
                                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-electric-blue/10"><svg
                                            class="w-4 h-4 text-electric-blue" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M20 6 9 17l-5-5" />
                                        </svg></span><span class="font-semibold text-deep-slate">Enlaces a redes
                                        sociales y WhatsApp</span></li>
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
                                    href="/contacto">
                                    <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Solicitar
                                        este plan</span>
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
            </div>
        </section>

        <!-- FAQ - Sección de preguntas frecuentes -->
        <section class="py-20 bg-zinc-200">
            <div class="max-w-4xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
                <div class="text-center mb-14">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate">Preguntas
                        <span class="text-electric-blue">frecuentes</span>
                    </h2>
                    <p class="mt-4 text-zinc-600 max-w-xl mx-auto">Resolvemos las dudas más comunes antes de empezar.
                    </p>
                </div>
                <div class="space-y-4">
                    <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white shadow-sm"
                        style="animation-delay: 0s">
                        <details class="group p-6">
                            <summary class="flex items-center justify-between cursor-pointer"><span
                                    class="font-medium text-zinc-900">¿Cuánto tiempo tarda el desarrollo de una página
                                    web?</span><svg
                                    class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m6 9 6 6 6-6" />
                                </svg></summary>
                            <p class="mt-4 text-sm text-zinc-600 leading-relaxed">Dependiendo del plan, la entrega suele
                                estar entre 3 y 7 días hábiles. En sistemas web puede extenderse según la complejidad,
                                pero siempre definimos tiempos claros desde el inicio.</p>
                        </details>
                    </div>
                    <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white shadow-sm"
                        style="animation-delay: 0.15s">
                        <details class="group p-6">
                            <summary class="flex items-center justify-between cursor-pointer"><span
                                    class="font-medium text-zinc-900">¿Cuánto cuesta una página web
                                    profesional?</span><svg
                                    class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m6 9 6 6 6-6" />
                                </svg></summary>
                            <p class="mt-4 text-sm text-zinc-600 leading-relaxed">El precio depende del tipo de
                                proyecto, funcionalidades y nivel de personalización. Ofrecemos planes claros y
                                adaptados a cada negocio.</p>
                        </details>
                    </div>
                    <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white shadow-sm"
                        style="animation-delay: 0.3s">
                        <details class="group p-6">
                            <summary class="flex items-center justify-between cursor-pointer"><span
                                    class="font-medium text-zinc-900">¿Qué incluye un servicio de desarrollo
                                    web?</span><svg
                                    class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m6 9 6 6 6-6" />
                                </svg></summary>
                            <p class="mt-4 text-sm text-zinc-600 leading-relaxed">Incluye diseño web profesional,
                                estructura optimizada, configuración técnica, enfoque en conversión y acompañamiento
                                inicial.</p>
                        </details>
                    </div>
                    <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white shadow-sm"
                        style="animation-delay: 0.45s">
                        <details class="group p-6">
                            <summary class="flex items-center justify-between cursor-pointer"><span
                                    class="font-medium text-zinc-900">¿El SEO está incluido en el desarrollo
                                    web?</span><svg
                                    class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m6 9 6 6 6-6" />
                                </svg></summary>
                            <p class="mt-4 text-sm text-zinc-600 leading-relaxed">Sí. Todas nuestras páginas se entregan
                                con optimización SEO básica para mejorar visibilidad en Google desde el lanzamiento.</p>
                        </details>
                    </div>
                    <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white shadow-sm"
                        style="animation-delay: 0.6s">
                        <details class="group p-6">
                            <summary class="flex items-center justify-between cursor-pointer"><span
                                    class="font-medium text-zinc-900">¿Puedo escalar o cambiar de plan
                                    después?</span><svg
                                    class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m6 9 6 6 6-6" />
                                </svg></summary>
                            <p class="mt-4 text-sm text-zinc-600 leading-relaxed">Sí. Nuestros servicios están pensados
                                para crecer contigo. Puedes agregar ecommerce, automatizaciones o nuevas funcionalidades
                                cuando lo necesites.</p>
                        </details>
                    </div>
                    <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white shadow-sm"
                        style="animation-delay: 0.75s">
                        <details class="group p-6">
                            <summary class="flex items-center justify-between cursor-pointer"><span
                                    class="font-medium text-zinc-900">¿Ofrecen soporte después de la entrega?</span><svg
                                    class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m6 9 6 6 6-6" />
                                </svg></summary>
                            <p class="mt-4 text-sm text-zinc-600 leading-relaxed">Sí. Incluimos soporte inicial y
                                opciones de acompañamiento mensual para mejoras, ajustes y optimización continua.</p>
                        </details>
                    </div>
                    <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white shadow-sm"
                        style="animation-delay: 0.9s">
                        <details class="group p-6">
                            <summary class="flex items-center justify-between cursor-pointer"><span
                                    class="font-medium text-zinc-900">¿Ya tengo dominio y hosting?</span><svg
                                    class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m6 9 6 6 6-6" />
                                </svg></summary>
                            <p class="mt-4 text-sm text-zinc-600 leading-relaxed">No hay problema. Nos encargamos de
                                gestionarlo o trabajamos con lo que ya tengas. Algunos planes incluyen dominio y hosting
                                por el primer año.</p>
                        </details>
                    </div>
                    <div class="rounded-2xl border border-zinc-200 transition-all duration-500 hover:border-electric-blue animate-fade-in-slow bg-white shadow-sm"
                        style="animation-delay: 1.05s">
                        <details class="group p-6">
                            <summary class="flex items-center justify-between cursor-pointer"><span
                                    class="font-medium text-zinc-900">¿Cómo funciona la activación del
                                    chatbot?</span><svg
                                    class="w-5 h-5 transition-all duration-500 group-open:rotate-180 text-electric-blue shrink-0"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m6 9 6 6 6-6" />
                                </svg></summary>
                            <p class="mt-4 text-sm text-zinc-600 leading-relaxed">El chatbot se activa como complemento
                                a tu plan. Al integrarlo, obtienes automatización, atención 24/7 y captura automática de
                                leads para tu negocio.</p>
                        </details>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA FINAL: Llamado a la acción con propuesta, imagen y botón de contacto -->
        <section class="relative">
            <div class="relative overflow-hidden bg-black">
                <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
                    <div class="relative grid grid-cols-1 gap-8 py-20 md:grid-cols-2 md:py-28 items-center">
                        <div class="max-w-xl">
                            <span class="mb-3 inline-block text-xs uppercase tracking-[0.25em] text-white/40">Asesoría
                                gratuita · 15 minutos</span>
                            <h2 class="mt-3 text-4xl font-semibold leading-[1.05] text-white md:text-5xl lg:text-6xl">
                                ¿Listo
                                para transformar tu<span class="block text-electric-blue">presencia digital?</span></h2>
                            <p class="mt-4 text-lg leading-relaxed text-zinc-400">Diseñamos sitios web, ecommerce,
                                automatizaciones y experiencias digitales enfocadas en convertir visitas en clientes y
                                generar crecimiento real para tu negocio.</p>
                            <div class="mt-6 flex flex-col gap-4 sm:flex-row sm:items-center">
                                <a class="inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-electric-blue hover:brightness-110 transition-all duration-500"
                                    href="/contacto">Solicitar propuesta</a>
                                <span class="text-sm text-white/60">Respuesta en menos de 24 horas</span>
                            </div>
                        </div>
                        <div class="relative flex justify-end items-end h-full">
                            <div
                                class="relative z-10 w-full max-w-xl aspect-[4/3] rounded-xl overflow-hidden border border-white/10">
                                <img src="/assets/img/fotoCTA1.jpg" alt="" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<!-- Empty state para filtros sin resultados -->
<div id="noPlans" class="hidden text-center py-16 max-w-7xl mx-auto px-5">
    <span class="text-6xl block mb-4">🚧</span>
    <h3 class="text-2xl font-semibold text-deep-slate mb-2">Próximamente</h3>
    <p class="text-zinc-500">Estamos trabajando en planes para esta categoría. Mientras tanto, contáctanos y te armamos
        una propuesta personalizada.</p>
    <a class="mt-6 inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04]"
        href="/contacto">Solicitar propuesta</a>
</div>
<!-- Script de filtros de planes -->
<script>
    (function () {
        var filterBtns = document.querySelectorAll('.plan-filter-btn');
        var planCards = document.querySelectorAll('.plan-card');
        var noPlans = document.getElementById('noPlans');

        function updateFilter() {
            var active = document.querySelector('.plan-filter-btn.active-filter');
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
                    var span = b.querySelector('span');
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
        var firstBtn = document.querySelector('.plan-filter-btn.active-filter');
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
<!-- Script para conversión de monedas (VES, USD, EUR) con tasas obtenidas vía API -->
<script>
    (function () {
        var rates = null;
        var btns = document.querySelectorAll('.currency-btn');
        var prices = document.querySelectorAll('.price-display');

        var currentCurrency = 'ves';
        window.__rates = null;
        window.__currency = 'ves';

        function formatPrice(value, currency) {
            if (currency === 'usd') return '$' + Number(value).toLocaleString('en-US');
            if (currency === 'eur') return '\u20AC' + Number(value).toLocaleString('de-DE', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
            return 'Bs. ' + Number(value).toLocaleString('es-VE');
        }

        function parseUsd(text) {
            var match = text.match(/\$?([\d,]+)/);
            return match ? parseFloat(match[1].replace(',', '')) : 0;
        }

        function updatePrices(currency) {
            currentCurrency = currency;
            window.__currency = currency;
            prices.forEach(function (el) {
                var usdPrice = parseFloat(el.getAttribute('data-usd'));
                var displayPrice = usdPrice;
                if (currency === 'ves' && rates) displayPrice = usdPrice * rates.usd;
                else if (currency === 'eur' && rates) displayPrice = Math.round((usdPrice * rates.usd) / rates.eur);
                el.textContent = formatPrice(displayPrice, currency);
                el.setAttribute('data-currency', currency);
            });
            document.querySelectorAll('.price-original').forEach(function (el) {
                var usdPrice = parseUsd(el.textContent);
                if (!usdPrice) return;
                var displayPrice = usdPrice;
                if (currency === 'ves' && rates) displayPrice = usdPrice * rates.usd;
                else if (currency === 'eur' && rates) displayPrice = Math.round((usdPrice * rates.usd) / rates.eur);
                el.textContent = formatPrice(displayPrice, currency);
            });
            document.querySelectorAll('.price-promo').forEach(function (el) {
                var usdPrice = parseUsd(el.textContent);
                if (!usdPrice) return;
                var displayPrice = usdPrice;
                if (currency === 'ves' && rates) displayPrice = usdPrice * rates.usd;
                else if (currency === 'eur' && rates) displayPrice = Math.round((usdPrice * rates.usd) / rates.eur);
                el.textContent = formatPrice(displayPrice, currency);
            });
        }

        // Fetch rates then init - Obtiene tasas de cambio desde la API
        fetch('api/rates.php')
            .then(function (r) { return r.json(); })
            .then(function (data) {
                rates = data;
                window.__rates = data;
                updatePrices('ves');
            })
            .catch(function () {
                rates = { usd: 60, eur: 65 };
                window.__rates = { usd: 60, eur: 65 };
                updatePrices('ves');
            });

        btns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                btns.forEach(function (b) {
                    b.classList.remove('bg-white', 'shadow', 'text-zinc-900');
                    b.classList.add('text-zinc-500', '');
                });
                this.classList.add('bg-white', 'shadow', 'text-zinc-900');
                this.classList.remove('text-zinc-500', '');
                var currency = this.getAttribute('data-currency');
                if (rates) updatePrices(currency);
            });
        });
    })();
</script>
<?php // Inclusión del pie de página
include __DIR__ . '/../includes/footer.php'; ?>