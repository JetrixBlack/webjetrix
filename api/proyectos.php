<?php
// Configuración de la página actual y SEO para Portafolio / Proyectos
$currentPage = 'proyectos';
$pageTitle = 'Portafolio de Proyectos y Casos de Éxito | Jetrix';
$pageDescription = 'Explora nuestro portafolio de proyectos: páginas web de alto impacto, tiendas online e-commerce, sistemas a medida y chatbots interactivos.';
$pageKeywords = 'portafolio desarrollo web, proyectos paginas web, casos de exito desarrollo web, software portfolio, diseno web ejemplos';
$canonicalUrl = 'https://webjetrix.com/proyectos';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
?>
<main class="pt-14 md:pt-0">
    <section class="pt-40 pb-20 lg:pt-48 lg:pb-28 bg-[#F7F7F4]">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <div class="max-w-3xl">
                <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">Portafolio</span>
                <h1 data-typewriter class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate">Nuestro <span class="text-electric-blue">portfolio</span></h1>
                <p class="mt-6 text-lg text-zinc-500">Proyectos diseñados con enfoque estratégico y alto impacto visual.</p>
            </div>

            <div class="flex flex-wrap gap-3 mt-12">
                <button class="project-filter-btn px-5 py-2 rounded-xl text-sm font-medium relative cursor-pointer active-filter" data-category="todos">
                    <div class="filter-bg absolute inset-0 bg-navy-dark rounded-xl z-0"></div>
                    <span class="relative z-10 text-white">Todos</span>
                </button>
                <button class="project-filter-btn px-5 py-2 rounded-xl text-sm font-medium relative cursor-pointer" data-category="paginas-web">
                    <span class="relative z-10 text-zinc-600">Página web</span>
                </button>
                <button class="project-filter-btn px-5 py-2 rounded-xl text-sm font-medium relative cursor-pointer" data-category="ecommerce">
                    <span class="relative z-10 text-zinc-600">Ecommerce</span>
                </button>
                <button class="project-filter-btn px-5 py-2 rounded-xl text-sm font-medium relative cursor-pointer" data-category="sistemas">
                    <span class="relative z-10 text-zinc-600">Sistema</span>
                </button>
                <button class="project-filter-btn px-5 py-2 rounded-xl text-sm font-medium relative cursor-pointer" data-category="chatbots">
                    <span class="relative z-10 text-zinc-600">Chatbot</span>
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10" id="projectsGrid">

                <!-- Proyecto: PageLink (link-in-bio personalizable con admin) -->
                <div class="project-card bg-white rounded-[18px] overflow-hidden border border-zinc-200 transition-all duration-300 group" data-category="sistemas">
                    <div class="relative h-[280px] overflow-hidden bg-gradient-to-br from-rose-400/30 to-pink-100">
                        <div class="absolute inset-0 bg-gradient-to-br from-rose-400/20 to-pink-100/50 group-hover:opacity-0 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 bg-gradient-to-r from-[#c47a8a]/30 to-[#e8b4c0]/20"></div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-500"></div>
                        <div class="flex flex-col items-center justify-center h-full px-6">
                            <span class="text-8xl font-bold text-white/10 select-none">P</span>
                            <span class="mt-2 inline-flex items-center gap-2 text-xs font-medium text-[#c47a8a] bg-white/80 rounded-full px-3 py-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#c47a8a]"></span> Link in Bio
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-lg font-semibold text-deep-slate mb-3 leading-7">PageLink</h3>
                        <p class="text-sm text-zinc-500 leading-[22.75px] mb-4">Centraliza todos tus enlaces en una página personalizable con tema oscuro rosado. Gestiona tus links, testimonios y mide cada clic desde un panel admin propio.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center gap-2 text-sm text-zinc-600"><span class="text-electric-blue"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span> Panel admin propio</li>
                            <li class="flex items-center gap-2 text-sm text-zinc-600"><span class="text-electric-blue"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span> Tracking de clics y estadísticas</li>
                            <li class="flex items-center gap-2 text-sm text-zinc-600"><span class="text-electric-blue"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span> Testimonios y gestión de comentarios</li>
                        </ul>
                        <div class="bg-zinc-50 border border-zinc-200 rounded-lg px-3 py-2.5 mb-4">
                            <div class="text-[10px] font-semibold uppercase tracking-wider text-zinc-400 mb-1.5">Demo</div>
                            <div class="flex items-center gap-2 text-xs text-zinc-600">
                                <span class="font-medium text-zinc-700">Usuario:</span>
                                <code class="bg-white border border-zinc-200 rounded px-1.5 py-0.5 text-[11px]">admin</code>
                                <span class="font-medium text-zinc-700 ml-1">Clave:</span>
                                <code class="bg-white border border-zinc-200 rounded px-1.5 py-0.5 text-[11px]">admin123</code>
                            </div>
                        </div>
                        <div class="mt-auto grid grid-cols-2 gap-2">
                            <a href="https://pagelink-josue.vercel.app" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg bg-black text-white text-sm font-medium transition-all duration-300 hover:bg-zinc-800">Ver página</a>
                            <a href="https://pagelink-josue.vercel.app/admin" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg border border-zinc-300 text-deep-slate text-sm font-medium transition-all duration-300 hover:border-[#c47a8a] hover:text-[#c47a8a]">Panel admin</a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto: WebJetrix -->
                <div class="project-card bg-white rounded-[18px] overflow-hidden border border-zinc-200 transition-all duration-300 group" data-category="paginas-web">
                    <div class="relative h-[280px] overflow-hidden bg-gradient-to-br from-electric-blue/30 to-teal-100">
                        <div class="absolute inset-0 bg-gradient-to-br from-electric-blue/20 to-teal-100/50 group-hover:opacity-0 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 bg-gradient-to-r from-[#0070F3]/20 to-[#14B8A6]/20"></div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-500"></div>
                        <div class="flex flex-col items-center justify-center h-full px-6">
                            <span class="text-8xl font-bold text-white/10 select-none">W</span>
                            <span class="mt-2 inline-flex items-center gap-2 text-xs font-medium text-electric-blue bg-white/80 rounded-full px-3 py-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-electric-blue"></span> Sitio Web
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-lg font-semibold text-deep-slate mb-3 leading-7">WebJetrix</h3>
                        <p class="text-sm text-zinc-500 leading-[22.75px] mb-4">Sitio web corporativo de alto rendimiento para la agencia, diseñado con enfoque estratégico en conversión, velocidad y posicionamiento.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center gap-2 text-sm text-zinc-600"><span class="text-electric-blue"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span> Diseño orientado a conversión y SEO</li>
                            <li class="flex items-center gap-2 text-sm text-zinc-600"><span class="text-electric-blue"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span> Precios en vivo con tasas BCV y modo claro/oscuro</li>
                            <li class="flex items-center gap-2 text-sm text-zinc-600"><span class="text-electric-blue"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span> Portafolio, planes y cotizaciones integrados</li>
                        </ul>
                        <div class="mt-auto flex items-center justify-between">
                            <a href="https://webjetrix.vercel.app" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-5 py-2.5 rounded-lg bg-black text-white text-sm font-medium transition-all duration-300 hover:bg-zinc-800">Ver sitio</a>
                            <span class="text-xs text-zinc-400 capitalize">Página Web</span>
                        </div>
                    </div>
                </div>

                <div class="project-card bg-white rounded-[18px] overflow-hidden border border-zinc-200 transition-all duration-300 group" data-category="ecommerce">
                    <div class="relative h-[280px] overflow-hidden bg-gradient-to-br from-purple-500/30 to-pink-100">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-pink-100/50 group-hover:opacity-0 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 bg-gradient-to-r from-[#0070F3]/20 to-[#14B8A6]/20"></div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-500"></div>
                        <div class="flex items-center justify-center h-full">
                            <span class="text-8xl font-bold text-white/10 select-none">E</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-lg font-semibold text-deep-slate mb-3 leading-7">E-commerce Elite</h3>
                        <p class="text-sm text-zinc-500 leading-[22.75px] mb-6">Tienda online de alto rendimiento con pasarela de pagos integrada y gestión de envíos.</p>
                        <div class="mt-auto flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-5 py-2.5 rounded-lg bg-black text-white text-sm font-medium transition-all duration-300 hover:bg-zinc-800">Ver proyecto</a>
                            <span class="text-xs text-zinc-400 capitalize">Ecommerce</span>
                        </div>
                    </div>
                </div>

                <div class="project-card bg-white rounded-[18px] overflow-hidden border border-zinc-200 transition-all duration-300 group" data-category="sistemas">
                    <div class="relative h-[280px] overflow-hidden bg-gradient-to-br from-navy-dark/40 to-zinc-200">
                        <div class="absolute inset-0 bg-gradient-to-br from-navy-dark/30 to-zinc-200/50 group-hover:opacity-0 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 bg-gradient-to-r from-[#0070F3]/20 to-[#14B8A6]/20"></div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-500"></div>
                        <div class="flex items-center justify-center h-full">
                            <span class="text-8xl font-bold text-white/10 select-none">E</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-lg font-semibold text-deep-slate mb-3 leading-7">Plataforma ERP</h3>
                        <p class="text-sm text-zinc-500 leading-[22.75px] mb-6">Sistema de gestión empresarial con módulos de inventario, facturación y reportes.</p>
                        <div class="mt-auto flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-5 py-2.5 rounded-lg bg-black text-white text-sm font-medium transition-all duration-300 hover:bg-zinc-800">Ver proyecto</a>
                            <span class="text-xs text-zinc-400 capitalize">Sistema</span>
                        </div>
                    </div>
                </div>

                <div class="project-card bg-white rounded-[18px] overflow-hidden border border-zinc-200 transition-all duration-300 group" data-category="chatbots">
                    <div class="relative h-[280px] overflow-hidden bg-gradient-to-br from-green-500/30 to-green-100">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-green-100/50 group-hover:opacity-0 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 bg-gradient-to-r from-[#0070F3]/20 to-[#14B8A6]/20"></div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-500"></div>
                        <div class="flex items-center justify-center h-full">
                            <span class="text-8xl font-bold text-white/10 select-none">A</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-lg font-semibold text-deep-slate mb-3 leading-7">Asistente Virtual IA</h3>
                        <p class="text-sm text-zinc-500 leading-[22.75px] mb-6">Agente conversacional 24/7 integrado con WhatsApp para calificación de leads.</p>
                        <div class="mt-auto flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-5 py-2.5 rounded-lg bg-black text-white text-sm font-medium transition-all duration-300 hover:bg-zinc-800">Ver proyecto</a>
                            <span class="text-xs text-zinc-400 capitalize">Chatbot</span>
                        </div>
                    </div>
                </div>

                <div class="project-card bg-white rounded-[18px] overflow-hidden border border-zinc-200 transition-all duration-300 group" data-category="paginas-web">
                    <div class="relative h-[280px] overflow-hidden bg-gradient-to-br from-blue-500/30 to-indigo-100">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-indigo-100/50 group-hover:opacity-0 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 bg-gradient-to-r from-[#0070F3]/20 to-[#14B8A6]/20"></div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-500"></div>
                        <div class="flex items-center justify-center h-full">
                            <span class="text-8xl font-bold text-white/10 select-none">E</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-lg font-semibold text-deep-slate mb-3 leading-7">Ekimedicall</h3>
                        <p class="text-sm text-zinc-500 leading-[22.75px] mb-6">Portal médico con enfoque en claridad informativa y conversión de pacientes.</p>
                        <div class="mt-auto flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-5 py-2.5 rounded-lg bg-black text-white text-sm font-medium transition-all duration-300 hover:bg-zinc-800">Ver proyecto</a>
                            <span class="text-xs text-zinc-400 capitalize">Página Web</span>
                        </div>
                    </div>
                </div>

                <div class="project-card bg-white rounded-[18px] overflow-hidden border border-zinc-200 transition-all duration-300 group" data-category="sistemas">
                    <div class="relative h-[280px] overflow-hidden bg-gradient-to-br from-amber-500/30 to-orange-100">
                        <div class="absolute inset-0 bg-gradient-to-br from-amber-500/20 to-orange-100/50 group-hover:opacity-0 transition-opacity duration-500"></div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-500 bg-gradient-to-r from-[#0070F3]/20 to-[#14B8A6]/20"></div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-500"></div>
                        <div class="flex items-center justify-center h-full">
                            <span class="text-8xl font-bold text-white/10 select-none">T</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-lg font-semibold text-deep-slate mb-3 leading-7">TravelOne</h3>
                        <p class="text-sm text-zinc-500 leading-[22.75px] mb-6">Plataforma de captación y reservas para agencia de viajes con panel admin.</p>
                        <div class="mt-auto flex items-center justify-between">
                            <a href="#" class="inline-flex items-center px-5 py-2.5 rounded-lg bg-black text-white text-sm font-medium transition-all duration-300 hover:bg-zinc-800">Ver proyecto</a>
                            <span class="text-xs text-zinc-400 capitalize">Sistema</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="noProjects" class="hidden text-center py-16">
                <span class="text-6xl block mb-4">🔍</span>
                <h3 class="text-2xl font-semibold text-deep-slate mb-2">No hay proyectos</h3>
                <p class="text-zinc-500">No encontramos proyectos en esta categoría todavía.</p>
            </div>
        </div>
    </section>
</main>

<script src="/assets/js/projects-filter.js"></script>
<?php // Inclusión del pie de página
include __DIR__ . '/../includes/footer.php'; ?>
