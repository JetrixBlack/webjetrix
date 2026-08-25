<!DOCTYPE html>
<!-- Declaración del tipo de documento HTML5 -->
<html class="scroll-smooth" lang="es">
<!-- scroll-smooth activa desplazamiento suave; lang="es" define idioma español -->

<head>
    <meta charset="utf-8" />
    <!-- Codificación de caracteres UTF-8 -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- Meta tag para diseño responsive en móviles -->
    <title><?= htmlspecialchars($pageTitle ?? 'Jetrix | Desarrollo Web que Convierte') ?></title>
    <!-- Título dinámico de la página; usa valor por defecto si no se define $pageTitle -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- CDN de Tailwind CSS con plugins de formularios y container queries -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <!-- Fuente de iconos Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100..900&display=swap" rel="stylesheet" />
    <!-- Fuente Exo 2 para títulos -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100..900&display=swap" rel="stylesheet" />
    <!-- Fuente Raleway para cuerpo de texto -->
    <script>
        // Configuración extendida de Tailwind CSS
        tailwind.config = {
            // Modo oscuro no implementado actualmente
            theme: {
                extend: {
                    // Paleta de colores personalizada de la marca Jetrix
                    colors: {
                        "surface-container-highest": "#e2e2e2", "tertiary-fixed-dim": "#b7c8e1", "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#0b1c30", "secondary-fixed": "#dae2fd", "on-primary-container": "#ffffff",
                        "primary-fixed-dim": "#aec6ff", "on-tertiary": "#ffffff", "outline-variant": "#c1c6d7",
                        "secondary": "#565e74", "on-secondary": "#ffffff", "on-primary-fixed-variant": "#004397",
                        "surface-dim": "#dadada", "surface-tint": "#0059c5", "on-secondary-fixed": "#131b2e",
                        "on-secondary-container": "#5c647a", "border-subtle": "#E2E8F0", "on-secondary-fixed-variant": "#3f465c",
                        "soft-ice": "#F8FAFC", "deep-slate": "#0F172A", "surface-variant": "#e2e2e2",
                        "primary-fixed": "#d8e2ff", "inverse-surface": "#2f3131", "primary": "#0058c3",
                        "on-error-container": "#93000a", "background": "#f9f9f9", "on-tertiary-fixed-variant": "#38485d",
                        "tertiary-container": "#67778e", "surface-container-low": "#f3f3f4", "slate-gray": "#475569",
                        "secondary-fixed-dim": "#bec6e0", "tertiary": "#4e5e74", "on-error": "#ffffff",
                        "on-tertiary-container": "#fffeff", "error-container": "#ffdad6", "inverse-primary": "#aec6ff",
                        "on-surface": "#1a1c1c", "on-background": "#1a1c1c", "on-surface-variant": "#414754",
                        "on-primary-fixed": "#001a43", "surface-container-high": "#e8e8e8", "secondary-container": "#dae2fd",
                        "surface": "#f9f9f9", "primary-container": "#14B8A6", "surface-bright": "#f9f9f9",
                        "inverse-on-surface": "#f0f1f1", "tertiary-fixed": "#d3e4fe", "surface-container": "#eeeeee",
                        "outline": "#727786", "electric-blue": "#14B8A6", "water-green": "#14B8A6", "error": "#ba1a1a", "surface-container-lowest": "#ffffff", "navy-dark": "#070B14"
                    },
                    // Sistema de espaciado uniforme
                    spacing: {
                        "container-max": "1280px", "margin-mobile": "20px", "stack-md": "24px",
                        "stack-sm": "12px", "section-gap": "120px", "gutter": "24px",
                        "margin-desktop": "64px", "unit": "4px", "stack-lg": "48px"
                    },
                    // Familias tipográficas del diseño
                    fontFamily: {
                        "headline-xl": ["Exo 2"], "display-lg-mobile": ["Exo 2"], "label-sm": ["Exo 2"],
                        "code-md": ["Exo 2"], "body-lg": ["Raleway"], "display-lg": ["Exo 2"],
                        "headline-lg": ["Exo 2"], "body-md": ["Raleway"]
                    },
                    // Escala de tamaños de texto con sus propiedades
                    fontSize: {
                        "headline-xl": ["48px", { lineHeight: "1.2", letterSpacing: "-0.02em", fontWeight: "600" }],
                        "display-lg-mobile": ["40px", { lineHeight: "1.2", letterSpacing: "-0.02em", fontWeight: "700" }],
                        "label-sm": ["14px", { lineHeight: "1.4", letterSpacing: "0.05em", fontWeight: "500" }],
                        "code-md": ["14px", { lineHeight: "1.5", letterSpacing: "0", fontWeight: "400" }],
                        "body-lg": ["18px", { lineHeight: "1.6", letterSpacing: "0", fontWeight: "400" }],
                        "display-lg": ["72px", { lineHeight: "1.1", letterSpacing: "-0.04em", fontWeight: "700" }],
                        "headline-lg": ["32px", { lineHeight: "1.3", letterSpacing: "-0.01em", fontWeight: "600" }],
                        "body-md": ["16px", { lineHeight: "1.6", letterSpacing: "0", fontWeight: "400" }]
                    }
                }
            }
        }
    </script>
    <link rel="icon" type="image/png" href="assets/img/Logo_Jetrix.png">
    <meta name="theme-color" content="#14B8A6">
    <!-- Favicon del sitio -->
    <link rel="stylesheet" href="assets/css/custom.css?v=2.0">
    <script defer src="assets/js/main.js?v=2.0"></script>

</head>

<body class="bg-background text-on-background selection:bg-electric-blue selection:text-white font-body-md">
<!-- Preloader: pantalla de carga con logo y barra circular -->
<div id="preloader" class="fixed inset-0 z-[99999] flex flex-col items-center justify-center bg-[#070B14] transition-opacity duration-500">
    <!-- Logo principal -->
    <img src="assets/img/Logo_Jetrix.png" alt="Jetrix" class="w-28 md:w-36 mb-8 animate-pulse">
    <!-- Barra de carga circular SVG -->
    <svg class="w-12 h-12 md:w-14 md:h-14" viewBox="0 0 50 50">
        <circle cx="25" cy="25" r="20" fill="none" stroke="rgba(20,184,166,0.15)" stroke-width="4"/>
        <circle cx="25" cy="25" r="20" fill="none" stroke="#14B8A6" stroke-width="4" stroke-linecap="round" stroke-dasharray="125.6" stroke-dashoffset="125.6" class="preloader-ring"/>
    </svg>
    <!-- Texto sutil -->
    <p class="mt-5 text-xs uppercase tracking-[0.2em] text-white/40 font-medium">Cargando</p>
</div>
<style>
/* Animación de la barra circular de carga */
.preloader-ring {
    animation: preloaderSpin 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    transform-origin: center;
}
@keyframes preloaderSpin {
    0% { stroke-dashoffset: 125.6; transform: rotate(0deg); }
    50% { stroke-dashoffset: 31.4; }
    100% { stroke-dashoffset: 125.6; transform: rotate(360deg); }
}
/* Fade out del preloader cuando la página carga */
.preloader-hide {
    opacity: 0;
    pointer-events: none;
}
</style>
<script>
// Ocultar preloader cuando la página carga completamente
window.addEventListener('load', function() {
    setTimeout(function() {
        var preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.classList.add('preloader-hide');
            setTimeout(function() { preloader.remove(); }, 500);
        }
    }, 600);
});
</script>
<!-- Cuerpo: fondo claro, texto oscuro, selección azul eléctrico, tipografía base Raleway -->