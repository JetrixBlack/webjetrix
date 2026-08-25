<?php
// Configuración de la página actual y título para el header
$currentPage = '';
$pageTitle = 'Política de Privacidad | Jetrix';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main class="pt-14 md:pt-0">
    <!-- Hero - Cabecera de la política de privacidad -->
    <section class="py-20 md:py-28 bg-[#F7F7F4]">
        <div class="max-w-3xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">Legal</span>
            <h1 class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate mb-6">Política de Privacidad</h1>
            <p class="text-zinc-500 mb-8">Última actualización: 2025</p>

            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">1. Información que recopilamos</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">En Jetrix, recopilamos información personal que nos proporcionas voluntariamente a través de nuestros formularios de contacto, incluyendo nombre, correo electrónico, empresa y mensaje. También recopilamos datos de navegación anónimos mediante cookies y tecnologías similares.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">2. Uso de la información</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Utilizamos tu información para responder a tus consultas, proporcionarte los servicios solicitados, mejorar nuestra página web y enviarte comunicaciones relacionadas con nuestros servicios si has dado tu consentimiento.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">3. Protección de datos</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Implementamos medidas de seguridad técnicas y organizativas para proteger tu información personal contra acceso no autorizado, pérdida o alteración. Tus datos se almacenan en servidores seguros con acceso restringido.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">4. Tus derechos</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Tienes derecho a acceder, rectificar, cancelar u oponerte al tratamiento de tus datos personales. Para ejercer estos derechos, contáctanos a través de nuestro formulario de contacto o correo electrónico.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">5. Cookies</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Utilizamos cookies esenciales para el funcionamiento del sitio y cookies analíticas para entender cómo los visitantes interactúan con nuestra web. Puedes configurar tu navegador para rechazar todas las cookies.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">6. Contacto</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Si tienes preguntas sobre esta política de privacidad, puedes contactarnos en <a href="mailto:contacto@webjetrix.com" class="text-electric-blue hover:underline">contacto@webjetrix.com</a>.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php // Inclusión del pie de página
include 'includes/footer.php'; ?>
