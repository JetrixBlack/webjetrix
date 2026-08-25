<?php
// Configuración de la página actual y título para el header
$currentPage = '';
$pageTitle = 'Términos y Condiciones | Jetrix';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main class="pt-14 md:pt-0">
    <!-- Hero - Cabecera de términos y condiciones -->
    <section class="py-20 md:py-28 bg-[#F7F7F4]">
        <div class="max-w-3xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">Legal</span>
            <h1 class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate mb-6">Términos y Condiciones</h1>
            <p class="text-zinc-500 mb-8">Última actualización: 2025</p>

            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">1. Aceptación de los términos</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Al acceder y utilizar este sitio web, aceptas cumplir con estos términos y condiciones. Si no estás de acuerdo con alguna parte, no debes utilizar nuestros servicios.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">2. Servicios</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Jetrix ofrece servicios de desarrollo web, diseño, automatización con IA y consultoría digital. Las características específicas de cada servicio se detallan en la propuesta comercial acordada con el cliente.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">3. Propiedad intelectual</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Todo el contenido de este sitio web, incluyendo textos, gráficos, logotipos y código, es propiedad de Jetrix o de sus respectivos propietarios y está protegido por leyes de propiedad intelectual.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">4. Limitación de responsabilidad</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Jetrix no será responsable por daños directos, indirectos, incidentales o consecuentes que resulten del uso o la imposibilidad de usar nuestros servicios.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">5. Modificaciones</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Nos reservamos el derecho de modificar estos términos en cualquier momento. Los cambios entrarán en vigor inmediatamente después de su publicación en el sitio web.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">6. Contacto</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Para cualquier consulta sobre estos términos, contáctanos en <a href="mailto:contacto@webjetrix.com" class="text-electric-blue hover:underline">contacto@webjetrix.com</a>.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php // Inclusión del pie de página
include 'includes/footer.php'; ?>
