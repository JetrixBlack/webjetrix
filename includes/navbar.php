<!-- Navbar desktop: barra fija centrada, fondo semitransparente oscuro con desenfoque -->
<header class="fixed top-4 lg:top-6 left-0 right-0 z-50 hidden md:flex justify-center pointer-events-none px-3">
    <nav class="pointer-events-auto relative flex items-center bg-black/80 border border-white/10 rounded-2xl backdrop-blur-xl transition-all duration-300 px-3 lg:px-6 gap-2 lg:gap-4 py-3 lg:py-3.5"
        style="width:min(1180px, 96vw)">
        <!-- Grupo izquierdo de enlaces de navegación -->
        <div class="flex flex-1 justify-center lg:justify-evenly items-center gap-1 lg:gap-2">
            <!-- Enlace Inicio: se resalta si $currentPage === 'inicio' -->
            <a class="group relative px-2.5 lg:px-4 py-2.5 rounded-full text-[13px] lg:text-[15px] font-normal text-white/75 transition-all duration-300 hover:text-white hover:bg-white/5 whitespace-nowrap <?= $currentPage === 'inicio' ? 'text-white bg-white/5' : '' ?>"
                href="index.php">
                <span class="relative z-10">Inicio</span>
            </a>
            <!-- Enlace Sobre mí -->
            <a class="group relative px-2.5 lg:px-4 py-2.5 rounded-full text-[13px] lg:text-[15px] font-normal text-white/75 transition-all duration-300 hover:text-white hover:bg-white/5 whitespace-nowrap <?= $currentPage === 'sobre-mi' ? 'text-white bg-white/5' : '' ?>"
                href="sobre-mi.php">
                <span class="relative z-10">Sobre mí</span>
            </a>
            <!-- Enlace Planes -->
            <a class="group relative px-2.5 lg:px-4 py-2.5 rounded-full text-[13px] lg:text-[15px] font-normal text-white/75 transition-all duration-300 hover:text-white hover:bg-white/5 whitespace-nowrap <?= $currentPage === 'planes' ? 'text-white bg-white/5' : '' ?>"
                href="planes.php">
                <span class="relative z-10">Planes</span>
            </a>
            <!-- Enlace Blog -->
            <a class="group relative px-2.5 lg:px-4 py-2.5 rounded-full text-[13px] lg:text-[15px] font-normal text-white/75 transition-all duration-300 hover:text-white hover:bg-white/5 whitespace-nowrap <?= $currentPage === 'blog' ? 'text-white bg-white/5' : '' ?>"
                href="blog.php">
                <span class="relative z-10">Blog</span>
            </a>
        </div>
        <!-- Logo Jetrix centrado -->
        <div class="shrink-0 mx-2 lg:mx-6">
            <a class="flex items-center gap-2 lg:gap-2.5" href="index.php">
                <img alt="Jetrix Logo" src="assets/img/Logo_Jetrix.png" class="object-contain h-12 w-auto">
            </a>
        </div>
        <!-- Grupo derecho de enlaces -->
        <div class="flex flex-1 justify-center lg:justify-evenly items-center gap-1 lg:gap-2">
            <!-- Enlace Portafolio -->
            <a class="group relative px-2.5 lg:px-4 py-2.5 rounded-full text-[13px] lg:text-[15px] font-normal text-white/75 transition-all duration-300 hover:text-white hover:bg-white/5 whitespace-nowrap <?= $currentPage === 'proyectos' ? 'text-white bg-white/5' : '' ?>"
                href="proyectos.php">
                <span class="relative z-10">Portafolio</span>
            </a>
            <!-- Enlace Servicios -->
            <a class="group relative px-2.5 lg:px-4 py-2.5 rounded-full text-[13px] lg:text-[15px] font-normal text-white/75 transition-all duration-300 hover:text-white hover:bg-white/5 whitespace-nowrap <?= $currentPage === 'servicios' ? 'text-white bg-white/5' : '' ?>"
                href="servicios.php">
                <span class="relative z-10">Servicios</span>
            </a>
            <!-- Indicador de tasas de cambio USD/EUR en tiempo real -->
            <div class="flex items-center gap-1 lg:gap-2 px-2.5 lg:px-3 py-1.5 rounded-full bg-white/5 border border-white/[0.06]"
                id="ratesDisplay">
                <div class="flex items-center gap-1.5 text-[11px] lg:text-[12px] text-white/75">
                    <span class="text-electric-blue font-semibold">$</span>
                    <span id="rateUsd">---</span>
                </div>
                <span class="text-white/20">|</span>
                <div class="flex items-center gap-1.5 text-[11px] lg:text-[12px] text-white/75">
                    <span class="text-electric-blue font-semibold">€</span>
                    <span id="rateEur">---</span>
                </div>
            </div>
            <!-- Botón CTA principal: "Agenda asesoría" con efecto hover de brillo -->
            <a class="group relative inline-flex items-center justify-center rounded-xl px-5 lg:px-6 py-2.5 text-[13px] lg:text-sm text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 ease-out hover:scale-[1.04] hover:-translate-y-0.5 hover:shadow-[0_0_40px_rgba(20,184,166,0.35)] active:scale-[0.98] overflow-hidden focus:outline-none focus:ring-2 focus:ring-electric-blue/40 whitespace-nowrap ml-1"
                href="contacto.php">
                <span class="relative z-10 inline-flex items-center gap-3 tracking-wide">Agenda asesoría</span>
                <span
                    class="pointer-events-none absolute inset-0 -translate-x-full skew-x-12 bg-gradient-to-r from-transparent via-white/25 to-transparent group-hover:translate-x-full transition-transform duration-1000 ease-out"></span>
            </a>
        </div>
    </nav>
</header>

<!-- Mobile header -->
<header class="md:hidden fixed top-0 left-0 w-full z-50 bg-navy-dark/95 backdrop-blur border-b border-white/[0.07]">
    <div class="flex items-center justify-between px-5 py-3">
        <a class="flex items-center gap-2" href="index.php">
            <img alt="Jetrix Logo" src="assets/img/Logo_Jetrix.png" class="object-contain h-10 w-auto">
        </a>
        <div class="flex items-center gap-2">
            <a class="hidden sm:inline-block text-sm text-white/80 px-3 py-1.5 rounded-full border border-white/10 hover:bg-white/5 transition"
                href="contacto.php">Asesoría</a>
            <button id="mobileMenuBtn" class="text-white p-3 rounded-md hover:bg-white/5 transition cursor-pointer min-w-[44px] min-h-[44px] flex items-center justify-center"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 5h16"></path>
                    <path d="M4 12h16"></path>
                    <path d="M4 19h16"></path>
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile menu overlay -->
<div id="mobileMenu"
    class="md:hidden fixed inset-0 z-[60] transition-transform duration-300 -translate-y-full pointer-events-none">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
    <nav class="relative max-h-full overflow-auto bg-navy-dark text-white p-6">
        <div class="flex items-center justify-between mb-6">
            <a class="flex items-center gap-2" href="index.php">
                <img alt="Jetrix Logo" src="assets/img/Logo_Jetrix.png" class="object-contain h-10 w-auto">
            </a>
            <button id="mobileMenuClose" class="p-3 rounded-md hover:bg-white/10 text-white cursor-pointer min-w-[44px] min-h-[44px] flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <div class="space-y-1">
            <a class="block text-lg font-semibold py-3 min-h-[44px] flex items-center <?= $currentPage === 'inicio' ? 'text-electric-blue' : 'text-white' ?>"
                href="index.php">Inicio</a>
            <a class="block text-lg font-semibold py-3 min-h-[44px] flex items-center <?= $currentPage === 'sobre-mi' ? 'text-electric-blue' : 'text-white/80' ?>"
                href="sobre-mi.php">Sobre mí</a>
            <a class="block text-lg font-semibold py-3 min-h-[44px] flex items-center <?= $currentPage === 'planes' ? 'text-electric-blue' : 'text-white/80' ?>"
                href="planes.php">Planes</a>
            <a class="block text-lg font-semibold py-3 min-h-[44px] flex items-center <?= $currentPage === 'blog' ? 'text-electric-blue' : 'text-white/80' ?>"
                href="blog.php">Blog</a>
            <a class="block text-lg font-semibold py-3 min-h-[44px] flex items-center <?= $currentPage === 'proyectos' ? 'text-electric-blue' : 'text-white/80' ?>"
                href="proyectos.php">Portafolio</a>
            <a class="block text-lg font-semibold py-3 min-h-[44px] flex items-center <?= $currentPage === 'servicios' ? 'text-electric-blue' : 'text-white/80' ?>"
                href="servicios.php">Servicios</a>
            <div class="pt-2">
                <a class="inline-flex items-center justify-center rounded-xl px-7 py-3 text-[15px] text-white bg-gradient-to-r from-electric-blue to-teal-600 transition-all duration-500 w-full justify-center py-3 text-center"
                    href="contacto.php">Agenda una asesoría</a>
            </div>
            <div class="pt-2 text-sm text-white/40">¿Necesitas ayuda? <a class="text-electric-blue"
                    href="contacto.php">Contáctanos</a></div>
        </div>
    </nav>
</div>