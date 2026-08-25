<?php
// Configuración de la página actual y título para el header
$currentPage = 'blog';
$pageTitle = 'Blog | Jetrix — Próximamente';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main class="pt-14 md:pt-0">
    <!-- Próximamente - Página de blog en preparación -->
    <section class="min-h-[80vh] flex items-center justify-center bg-[#F7F7F4]">
        <div class="max-w-3xl mx-auto px-5 text-center">
            <!-- Icono de calendario -->
            <div class="mb-8">
                <span class="material-symbols-outlined text-electric-blue text-7xl md:text-8xl" style="font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 48;">calendar_month</span>
            </div>
            <!-- Título principal -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate">
                Blog <span class="text-electric-blue">próximamente</span>
            </h1>
            <!-- Descripción -->
            <p class="mt-6 text-lg text-zinc-500 max-w-xl mx-auto leading-relaxed">
                Estamos preparando artículos sobre diseño web, inteligencia artificial, automatización y estrategia digital. 
                <span class="font-semibold text-zinc-700">¡No te lo pierdas!</span>
            </p>
            <!-- Contador de días (decorativo) -->
            <div class="mt-10 flex items-center justify-center gap-4">
                <div class="flex flex-col items-center">
                    <span class="text-4xl md:text-5xl font-bold text-electric-blue" id="countDays">--</span>
                    <span class="text-xs uppercase tracking-widest text-zinc-400 mt-1">Días</span>
                </div>
                <span class="text-2xl text-zinc-300 font-light">:</span>
                <div class="flex flex-col items-center">
                    <span class="text-4xl md:text-5xl font-bold text-electric-blue" id="countHours">--</span>
                    <span class="text-xs uppercase tracking-widest text-zinc-400 mt-1">Horas</span>
                </div>
                <span class="text-2xl text-zinc-300 font-light">:</span>
                <div class="flex flex-col items-center">
                    <span class="text-4xl md:text-5xl font-bold text-electric-blue" id="countMins">--</span>
                    <span class="text-xs uppercase tracking-widest text-zinc-400 mt-1">Min</span>
                </div>
            </div>
            <!-- CTA para no perderse nada -->
            <div class="mt-12">
                <a class="group relative inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] overflow-hidden"
                    href="contacto.php">
                    <span class="relative z-10 inline-flex items-center gap-3">Contáctanos para estar al día</span>
                    <span class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
                </a>
            </div>
        </div>
    </section>
</main>
<!-- CTA - Llamado a la acción -->
<section class="py-20 lg:py-28 bg-navy-dark text-white relative overflow-hidden border-t border-white/5">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12 relative z-10">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
            <div class="max-w-2xl">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-white">¿Listo para <span class="text-electric-blue">empezar?</span></h2>
                <p class="mt-4 text-white/70 text-lg">Agenda una llamada y descubre si Jetrix es para tu negocio.</p>
            </div>
            <a class="inline-flex items-center justify-center rounded-xl px-10 py-5 text-lg font-semibold text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 hover:scale-[1.04] hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] shrink-0" href="contacto.php">Agendar llamada</a>
        </div>
    </div>
</section>
<!-- Script del contador regresivo (30 días desde hoy) -->
<script>
(function() {
    var target = new Date();
    target.setDate(target.getDate() + 30);
    function update() {
        var now = new Date();
        var diff = target - now;
        if (diff <= 0) return;
        var d = Math.floor(diff / 86400000);
        var h = Math.floor((diff % 86400000) / 3600000);
        var m = Math.floor((diff % 3600000) / 60000);
        document.getElementById('countDays').textContent = d < 10 ? '0' + d : d;
        document.getElementById('countHours').textContent = h < 10 ? '0' + h : h;
        document.getElementById('countMins').textContent = m < 10 ? '0' + m : m;
    }
    update();
    setInterval(update, 60000);
})();
</script>
<?php include 'includes/footer.php'; ?>
