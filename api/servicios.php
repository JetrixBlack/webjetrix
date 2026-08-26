<?php
// Configuración de la página actual y SEO para Servicios
$currentPage = 'servicios';
$pageTitle = 'Servicios de Desarrollo Web, Software y Chatbots IA | Jetrix';
$pageDescription = 'Descubre nuestros servicios de desarrollo web corporativo, software a medida, e-commerce, integraciones de API y chatbots inteligentes para empresas.';
$pageKeywords = 'servicios desarrollo web, desarrollo software a medida, creacion chatbots ia, diseno ecommerce, integraciones api';
$canonicalUrl = 'https://webjetrix.com/servicios';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
?>
<style>
/* Timeline vertical - línea central con animación */
.timeline-line {
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, transparent, #14B8A6 10%, #14B8A6 90%, transparent);
    transform: translateX(-50%);
}
@media (max-width: 767px) {
    .timeline-line { left: 24px; }
}
/* Punto de la timeline */
.timeline-dot {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 16px;
    height: 16px;
    background: #14B8A6;
    border: 4px solid #F7F7F4;
    border-radius: 50%;
    box-shadow: 0 0 0 4px rgba(20,184,166,0.2), 0 0 20px rgba(20,184,166,0.3);
    z-index: 10;
}
@media (max-width: 767px) {
    .timeline-dot { left: 24px; }
}
/* Animación de entrada */
.timeline-item {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
}
.timeline-item.visible {
    opacity: 1;
    transform: translateY(0);
}
/* Imagen con efecto hover */
.timeline-img {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}
.timeline-img:hover {
    transform: scale(1.03);
    box-shadow: 0 20px 60px rgba(20,184,166,0.15);
}
/* Número de paso */
.step-number {
    position: absolute;
    top: -12px;
    left: -12px;
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #14B8A6, #0D9488);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 700;
    color: white;
    box-shadow: 0 4px 20px rgba(20,184,166,0.4);
    z-index: 20;
}
</style>
<main class="pt-14 md:pt-0">
    <!-- Hero -->
    <section class="relative w-full min-h-[50svh] flex items-end bg-navy-dark">
        <div class="absolute inset-0 z-0">
            <div class="hidden md:block absolute -top-40 left-1/2 -translate-x-1/2 w-125 h-125 rounded-xl bg-electric-blue/10 blur-3xl"></div>
        </div>
        <div class="relative z-10 w-full px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12 py-24 md:py-32">
            <div class="max-w-7xl mx-auto">
                <div class="max-w-3xl">
                    <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">Nuestros Servicios</span>
                    <h1 data-typewriter class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-white">
                        Soluciones digitales completas para <span class="text-electric-blue">impulsar tu negocio</span>
                    </h1>
                    <p class="mt-6 text-lg text-white/70 max-w-2xl leading-relaxed">
                        Desde desarrollo web hasta automatización con IA, cubrimos todo lo que tu negocio necesita para crecer online.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Vertical de Servicios -->
    <section class="py-24 md:py-32 bg-[#F7F7F4] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12 relative">
            <!-- Línea vertical central -->
            <div class="timeline-line hidden md:block"></div>

            <!-- Servicio 1: Desarrollo Web (imagen izquierda, texto derecha) -->
            <div class="timeline-item relative flex flex-col md:flex-row items-center gap-8 md:gap-16 mb-24 md:mb-32">
                <!-- Imagen -->
                <div class="w-full md:w-1/2 relative">
                    <div class="relative step-number">01</div>
                    <div class="timeline-img rounded-2xl overflow-hidden bg-white border border-zinc-200 shadow-lg p-6">
                        <img src="/assets/img/Desarrollo-Web.png" alt="Desarrollo Web" class="w-full max-w-sm mx-auto object-contain">
                    </div>
                </div>
                <!-- Dot timeline (solo desktop) -->
                <div class="timeline-dot hidden md:block"></div>
                <!-- Texto -->
                <div class="w-full md:w-1/2 md:pl-8">
                    <span class="text-xs uppercase tracking-widest text-electric-blue font-semibold">Servicio 01</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-bold text-deep-slate leading-tight">Desarrollo Web</h2>
                    <p class="mt-4 text-zinc-500 leading-relaxed text-lg">
                        Landing pages y sitios corporativos ultra rápidos, optimizados para SEO y conversión. Diseño responsive que convierte visitas en clientes.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-center gap-3 text-zinc-600"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Landing pages y sitios corporativos</li>
                        <li class="flex items-center gap-3 text-zinc-600"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Optimizados para SEO y conversión</li>
                        <li class="flex items-center gap-3 text-zinc-600"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Diseño responsive y moderno</li>
                        <li class="flex items-center gap-3 text-zinc-600"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Integración con sistemas existentes</li>
                    </ul>
                    <div class="mt-8">
                        <a href="/planes" class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden">
                            <span class="relative z-10 inline-flex items-center gap-3">Ver planes</span>
                            <span class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Servicio 2: Sistemas a Medida (texto izquierda, imagen derecha) -->
            <div class="timeline-item relative flex flex-col md:flex-row-reverse items-center gap-8 md:gap-16 mb-24 md:mb-32">
                <!-- Imagen -->
                <div class="w-full md:w-1/2 relative">
                    <div class="relative step-number">02</div>
                    <div class="timeline-img rounded-2xl overflow-hidden bg-white border border-zinc-200 shadow-lg p-6">
                        <img src="/assets/img/Sistemas-a-medida.png" alt="Sistemas a Medida" class="w-full max-w-sm mx-auto object-contain">
                    </div>
                </div>
                <!-- Dot timeline (solo desktop) -->
                <div class="timeline-dot hidden md:block"></div>
                <!-- Texto -->
                <div class="w-full md:w-1/2 md:pr-8 md:text-right">
                    <span class="text-xs uppercase tracking-widest text-electric-blue font-semibold">Servicio 02</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-bold text-deep-slate leading-tight">Sistemas a Medida</h2>
                    <p class="mt-4 text-zinc-500 leading-relaxed text-lg">
                        Paneles administrativos, ERPs, CRMs y plataformas de gestión empresarial construidos específicamente para tu negocio.
                    </p>
                    <ul class="mt-6 space-y-3 md:ml-auto">
                        <li class="flex items-center gap-3 text-zinc-600 md:justify-end"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Paneles administrativos personalizados</li>
                        <li class="flex items-center gap-3 text-zinc-600 md:justify-end"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> ERPs y CRMs a medida</li>
                        <li class="flex items-center gap-3 text-zinc-600 md:justify-end"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Sistemas de inventario y facturación</li>
                        <li class="flex items-center gap-3 text-zinc-600 md:justify-end"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Roles, permisos y reportes exportables</li>
                    </ul>
                    <div class="mt-8 md:flex md:justify-end">
                        <a href="/planes" class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden">
                            <span class="relative z-10 inline-flex items-center gap-3">Ver planes</span>
                            <span class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Servicio 3: Chatbots & IA (imagen izquierda, texto derecha) -->
            <div class="timeline-item relative flex flex-col md:flex-row items-center gap-8 md:gap-16 mb-24 md:mb-32">
                <!-- Imagen -->
                <div class="w-full md:w-1/2 relative">
                    <div class="relative step-number">03</div>
                    <div class="timeline-img rounded-2xl overflow-hidden bg-white border border-zinc-200 shadow-lg p-6">
                        <img src="/assets/img/Chatbots.png" alt="Chatbots IA" class="w-full max-w-sm mx-auto object-contain">
                    </div>
                </div>
                <!-- Dot timeline (solo desktop) -->
                <div class="timeline-dot hidden md:block"></div>
                <!-- Texto -->
                <div class="w-full md:w-1/2 md:pl-8">
                    <span class="text-xs uppercase tracking-widest text-electric-blue font-semibold">Servicio 03</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-bold text-deep-slate leading-tight">Chatbots &amp; IA</h2>
                    <p class="mt-4 text-zinc-500 leading-relaxed text-lg">
                        Asistentes virtuales con inteligencia artificial que atienden, captan leads y responden 24/7 desde tu web o WhatsApp.
                    </p>
                    <ul class="mt-6 space-y-3">
                        <li class="flex items-center gap-3 text-zinc-600"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Chatbots con inteligencia artificial</li>
                        <li class="flex items-center gap-3 text-zinc-600"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Atención al cliente 24/7 automatizada</li>
                        <li class="flex items-center gap-3 text-zinc-600"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Captación de leads y calificación</li>
                        <li class="flex items-center gap-3 text-zinc-600"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Integración con WhatsApp y web</li>
                    </ul>
                    <div class="mt-8">
                        <a href="/planes" class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden">
                            <span class="relative z-10 inline-flex items-center gap-3">Ver planes</span>
                            <span class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Servicio 4: Automatizaciones (texto izquierda, imagen derecha) -->
            <div class="timeline-item relative flex flex-col md:flex-row-reverse items-center gap-8 md:gap-16">
                <!-- Imagen -->
                <div class="w-full md:w-1/2 relative">
                    <div class="relative step-number">04</div>
                    <div class="timeline-img rounded-2xl overflow-hidden bg-navy-dark border border-white/10 shadow-lg p-6">
                        <img src="/assets/img/Automatizacion.png" alt="Automatizaciones" class="w-full max-w-sm mx-auto object-contain">
                    </div>
                </div>
                <!-- Dot timeline (solo desktop) -->
                <div class="timeline-dot hidden md:block"></div>
                <!-- Texto -->
                <div class="w-full md:w-1/2 md:pr-8 md:text-right">
                    <span class="text-xs uppercase tracking-widest text-electric-blue font-semibold">Servicio 04</span>
                    <h2 class="mt-3 text-3xl md:text-4xl font-bold text-deep-slate leading-tight">Automatizaciones</h2>
                    <p class="mt-4 text-zinc-500 leading-relaxed text-lg">
                        Optimiza procesos, reduce tareas manuales y conecta tus herramientas con flujos inteligentes que trabajan solos.
                    </p>
                    <ul class="mt-6 space-y-3 md:ml-auto">
                        <li class="flex items-center gap-3 text-zinc-600 md:justify-end"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Flujos de automatización empresarial</li>
                        <li class="flex items-center gap-3 text-zinc-600 md:justify-end"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Integración de APIs y servicios externos</li>
                        <li class="flex items-center gap-3 text-zinc-600 md:justify-end"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Bots para procesos repetitivos</li>
                        <li class="flex items-center gap-3 text-zinc-600 md:justify-end"><span class="w-2 h-2 bg-electric-blue rounded-full shrink-0"></span> Workflows inteligentes con n8n</li>
                    </ul>
                    <div class="mt-8 md:flex md:justify-end">
                        <a href="/contacto" class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden">
                            <span class="relative z-10 inline-flex items-center gap-3">Consultar</span>
                            <span class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 lg:py-28 bg-navy-dark text-white relative overflow-hidden border-t border-white/5">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12 relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
                <div class="max-w-2xl">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-white">¿Listo para <span class="text-electric-blue">empezar?</span></h2>
                    <p class="mt-4 text-white/70 text-lg">Agenda una llamada y descubre si Jetrix es para tu negocio.</p>
                </div>
                <a class="inline-flex items-center justify-center rounded-xl px-10 py-5 text-lg font-semibold text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] shrink-0" href="/contacto">Agendar llamada</a>
            </div>
        </div>
    </section>
</main>
<!-- Script de animación scroll para la timeline -->
<script>
(function() {
    var items = document.querySelectorAll('.timeline-item');
    function checkVisible() {
        items.forEach(function(item) {
            var rect = item.getBoundingClientRect();
            if (rect.top < window.innerHeight * 0.85) {
                item.classList.add('visible');
            }
        });
    }
    window.addEventListener('scroll', checkVisible, { passive: true });
    checkVisible();
})();
</script>
<?php include __DIR__ . '/../includes/footer.php'; ?>
